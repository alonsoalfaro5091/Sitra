#!/usr/bin/env python3
"""Extrae texto plano de un .docx o .pptx (son zips de XML) sin dependencias externas.
Uso: python3 extract.py archivo.docx
"""
import sys
import zipfile
import xml.etree.ElementTree as ET
# ponytail: stdlib ET (XXE-vulnerable) is fine here — input is always local files
# you own in raw/, never untrusted/network input. Swap to defusedxml if that changes.

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
        shared = []
        if "xl/sharedStrings.xml" in z.namelist():
            root = ET.fromstring(z.read("xl/sharedStrings.xml"))
            ns = "{http://schemas.openxmlformats.org/spreadsheetml/2006/main}"
            for si in root.iter(f"{ns}si"):
                shared.append("".join(t.text or "" for t in si.iter(f"{ns}t")))
        return "\n".join(shared)


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
