#!/usr/bin/env python3
"""Extrae texto plano de un .docx, .pptx o .xlsx sin dependencias externas.
Uso: python3 extract.py archivo.docx
"""
import sys
import zipfile
import xml.etree.ElementTree as ET
# ponytail: stdlib ET (XXE-vulnerable) is fine here — input is always local files
# you own in this project, never untrusted/network input. Swap to defusedxml if that changes.

W_NS = "{http://schemas.openxmlformats.org/wordprocessingml/2006/main}"
A_NS = "{http://schemas.openxmlformats.org/drawingml/2006/main}"


def extract_docx(path):
    with zipfile.ZipFile(path) as z:
        xml = z.read("word/document.xml")
    root = ET.fromstring(xml)
    parts = []
    for p in root.iter(f"{W_NS}p"):
        text = "".join(t.text or "" for t in p.iter(f"{W_NS}t"))
        parts.append(text)
    return "\n".join(parts)


def extract_pptx(path):
    with zipfile.ZipFile(path) as z:
        slide_names = sorted(
            n for n in z.namelist() if n.startswith("ppt/slides/slide") and n.endswith(".xml")
        )
        out = []
        for n in slide_names:
            root = ET.fromstring(z.read(n))
            texts = [t.text or "" for t in root.iter(f"{A_NS}t")]
            out.append(f"--- {n} ---\n" + "\n".join(texts))
    return "\n\n".join(out)


def extract_xlsx(path):
    with zipfile.ZipFile(path) as z:
        ns = "{http://schemas.openxmlformats.org/spreadsheetml/2006/main}"
        rel_ns = "{http://schemas.openxmlformats.org/package/2006/relationships}"
        doc_rel_ns = "{http://schemas.openxmlformats.org/officeDocument/2006/relationships}"
        shared = []
        if "xl/sharedStrings.xml" in z.namelist():
            root = ET.fromstring(z.read("xl/sharedStrings.xml"))
            for si in root.iter(f"{ns}si"):
                shared.append("".join(t.text or "" for t in si.iter(f"{ns}t")))

        workbook = ET.fromstring(z.read("xl/workbook.xml"))
        relationships = ET.fromstring(z.read("xl/_rels/workbook.xml.rels"))
        targets = {
            rel.attrib["Id"]: rel.attrib["Target"]
            for rel in relationships.iter(f"{rel_ns}Relationship")
        }

        out = []
        for sheet in workbook.iter(f"{ns}sheet"):
            rel_id = sheet.attrib[f"{doc_rel_ns}id"]
            target = targets[rel_id]
            if target.startswith("/"):
                sheet_path = target.lstrip("/")
            elif target.startswith("xl/"):
                sheet_path = target
            else:
                sheet_path = "xl/" + target
            root = ET.fromstring(z.read(sheet_path))
            out.append(f"--- {sheet.attrib['name']} ---")

            for row in root.iter(f"{ns}row"):
                values = []
                for cell in row.findall(f"{ns}c"):
                    cell_type = cell.attrib.get("t")
                    if cell_type == "inlineStr":
                        inline = cell.find(f"{ns}is")
                        value = "" if inline is None else "".join(
                            text.text or "" for text in inline.iter(f"{ns}t")
                        )
                    else:
                        raw = cell.find(f"{ns}v")
                        value = "" if raw is None else raw.text or ""
                        if cell_type == "s" and value:
                            value = shared[int(value)]
                    values.append(value)
                if any(values):
                    out.append("\t".join(values))
        return "\n".join(out)


if __name__ == "__main__":
    path = sys.argv[1]
    if path.endswith(".docx"):
        print(extract_docx(path))
    elif path.endswith(".pptx"):
        print(extract_pptx(path))
    elif path.endswith(".xlsx"):
        print(extract_xlsx(path))
    else:
        sys.exit(f"Formato no soportado: {path}")
