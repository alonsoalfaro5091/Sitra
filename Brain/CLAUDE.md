# Yuyito — LLM Wiki

Wiki personal construida y mantenida por Claude a partir de material sobre análisis de requerimientos y gestión de proyectos (plantillas, ejemplos, material de apoyo).

## Capas

- `raw/` — fuentes originales (docx, xlsx, pptx). Nunca se editan, solo se leen.
- `wiki/` — páginas markdown generadas y mantenidas por Claude. Aquí vive todo el conocimiento sintetizado.
- `index.md` y `log.md` — viven en la raíz de `Brain/`, fuera de `wiki/`, para tenerlos a mano fácilmente (no hay que entrar a la carpeta de páginas para consultarlos).
- `*.canvas` — canvases de Obsidian en la raíz de `Brain/`, para diagramas visuales (ej. `Modelo Relacional Sitra.canvas` para el modelo de datos del proyecto real).
- Este archivo — el esquema. Se actualiza junto con el usuario a medida que el flujo de trabajo se afina.

## `index.md` y `log.md`

- `index.md` — catálogo de todas las páginas de la wiki, organizado por categoría, cada una con link + resumen de una línea. Se actualiza en cada ingest.
- `log.md` — registro cronológico append-only. Cada entrada empieza con `## [YYYY-MM-DD] tipo | Título` (tipo: ingest, query, lint, proyecto).

## Estructura de `wiki/`

- Solo páginas de contenido, sin subcarpetas fijas por ahora — se crean a medida que aparecen categorías reales (ej. `Conceptos/`, `Plantillas/`, `Proyectos/`). No crear carpetas vacías de antemano.

## Convenciones de página

- Frontmatter YAML mínimo: `tags`, y `source` (link a los archivos de `raw/` de los que viene la página) cuando aplique.
- Enlaces con `[[wikilink]]` de Obsidian.
- Español, salvo términos técnicos que ya son estándar en inglés.

## Flujo de ingest

1. Leer la fuente en `raw/`.
2. Conversar brevemente con el usuario sobre los puntos clave.
3. Escribir/actualizar la(s) página(s) de la wiki correspondientes (conceptos, plantillas, comparaciones).
4. Actualizar `index.md`.
5. Agregar entrada a `log.md`.

Ingest de a una fuente por vez, con el usuario involucrado en cada paso — no hacer batch silencioso salvo que el usuario lo pida.

## Flujo de query

Buscar primero en `index.md`, entrar a las páginas relevantes, sintetizar con citas a las páginas/fuentes. Si la respuesta vale la pena conservarla, ofrecer guardarla como página nueva en `wiki/` (y sumarla al índice).

## Flujo de lint

Bajo pedido: revisar contradicciones entre páginas, páginas huérfanas sin enlaces entrantes, conceptos mencionados pero sin página propia, referencias cruzadas faltantes.
