# Log

Registro cronológico de ingests, queries y lints.

## [2026-08-10] setup | Inicialización de la wiki

Creados CLAUDE.md, wiki/index.md, wiki/log.md. Fuentes detectadas en `raw/`: 4 archivos en `Documentacion/` (plantillas de análisis de caso, kick off, constitución, requerimientos) y 8 archivos en `Material de Apollo/` (material de apoyo sobre toma de requerimientos, casos de uso, mockups, qué es un proyecto).

Creado `tools/extract.py` (stdlib, sin dependencias) para extraer texto de .docx/.xlsx. Detectado que las .pptx del vault son slides basadas en imagen (sin texto en el XML) — se extraen las imágenes embebidas y se leen visualmente en su lugar.

## [2026-08-10] ingest | Que es un proyecto.pptx

Deck completo (13 slides, solo imágenes) leído visualmente. Creadas 5 páginas: [[Proyecto de Software]], [[Triángulo de Gestión]], [[Ciclo de Vida del Proyecto de Software]], [[Roles del Proyecto]], [[Metodologías de Desarrollo]]. Pendiente: la página [[Acta de Constitución]] está enlazada pero aún no creada — corresponde al próximo ingest natural (la plantilla docx del mismo tema).

## [2026-08-10] ingest | 3 PLANTILLA Acta de constitución.docx

Plantilla en blanco (sin contenido de ejemplo). Creada [[Acta de Constitución]] documentando su estructura (4 secciones: información del proyecto, descripción del proyecto, descripción del sistema, cierre/aprobaciones). Cross-link con [[Triángulo de Gestión]]: los 4 ejes de "Objetivos del proyecto" (alcance, calidad, cronograma, costos) son las mismas 4 variables del triángulo.

## [2026-08-10] ingest | Resto de raw/ (batch)

Ingeridos los 10 archivos restantes de `raw/` en una sola pasada, a pedido del usuario ("ingiere todo los archivos"):

- `1 PLANTILLA Análisis del caso.docx` → [[Análisis del Caso]] (plantilla en blanco).
- `2 PLANTILLA Acta Minuta Kick Off.docx` → [[Acta de Reunión Kick Off]] (plantilla en blanco).
- `4-EJEMPLO-Planilla de Requerimientos.xlsx` → [[Planilla de Requerimientos]] (ejemplo con contenido real: sistema de hostal).
- `Material de Apoyo que es un proyecto.docx` → enriquece [[Proyecto de Software]] (no se creó página nueva, es el mismo tema que "Que es un proyecto.pptx", ya ingerido).
- `Material de Apoyo toma de requerimientos.docx` + `Toma de Requerimientos.pptx` → [[Toma de Requerimientos]], [[Requerimiento]], [[Historia de Usuario]].
- `Material de Apoyo Caso de Uso.docx` + `Caso de Uso.pptx` → [[Caso de Uso]].
- `Material de Apoyo Mockup.docx` + `Mockups.pptx` → [[Mockup]].

Las 3 `.pptx` de este batch (Toma de Requerimientos, Mockups, Caso de Uso) resultaron ser, igual que "Que es un proyecto.pptx", decks de imágenes generados con NotebookLM — se extrajeron y leyeron visualmente con el mismo método (`tools/extract.py` para los .docx/.xlsx con texto real, extracción manual de `ppt/media/` para las .pptx). Cada deck es el compañero visual de su .docx homónimo, con framings y matrices adicionales (ej. matriz de técnicas de levantamiento, espectro de fidelidad wireframe/mockup/prototipo, relaciones include/extend/generalización en UML) que se integraron a las páginas correspondientes.

Wiki: 5 páginas nuevas de conceptos, 2 plantillas nuevas, 1 ejemplo nuevo. Todo `raw/` está ahora ingerido.

## [2026-08-10] lint | Revisión de salud de la wiki

Revisadas las 14 páginas de contenido (excluye index/log): sin páginas huérfanas (todas tienen ≥1 enlace entrante), sin contradicciones detectadas entre páginas. Los únicos wikilinks "rotos" son los de `source:` en el frontmatter apuntando a archivos de `raw/` — es esperado, esos archivos viven fuera de `wiki/` y no son páginas.

Encontradas 2 referencias cruzadas faltantes, corregidas: [[Análisis del Caso]] ahora enlaza hacia adelante a [[Acta de Reunión Kick Off]] (siguiente paso natural del proceso); [[Toma de Requerimientos]] ahora enlaza a [[Planilla de Requerimientos]] como salida concreta de la etapa de documentación (antes solo la mencionaba genéricamente como "documento de requerimientos").

## [2026-08-10] ingest | Ejemplo Documentacion (batch, carpeta completa)

Ingeridos los 4 archivos de `raw/Ejemplo Documentacion/` — un proyecto real de curso (2025, "ArcaBlend": máquina de arcade educativa para Sofofa/Pixelazo Corp) que completa la misma cadena de plantillas ya documentada en la wiki: Análisis del Caso → Acta de Reunión Kick Off → Acta de Constitución → Planilla de Requerimientos.

En vez de fusionar el contenido dentro de cada página de plantilla (que documentan la estructura, no un caso aplicado), se creó una página de proyecto nueva, [[ArcaBlend (Proyecto Ejemplo)]], que recorre las 4 etapas y muestra la trazabilidad de una misma necesidad (valor educativo) a través de los 4 documentos. Se agregaron enlaces "Ejemplo aplicado" desde las 4 páginas de plantilla hacia esta página nueva, y se sumó [[Planilla de Requerimientos]] como comparación con el ejemplo del hostal ya existente (esta planilla real, a diferencia de la del hostal, quedó parcialmente incompleta).

Primera página en la categoría "Proyectos" del índice (antes vacía).

## [2026-08-10] proyecto | SofoCard — inicio del Análisis del Caso

Nuevo proyecto real en desarrollo (no un ingest de fuente externa, sino trabajo en vivo con el usuario). Creada [[SofoCard]], primera sección (Análisis del Caso) a partir de la conversación y de `raw/Ideas/Lluvia de ideas Yuyito.md`.

Decisiones registradas: se descarta huella dactilar por ser dato biométrico sensible de menores de edad (Ley 19.628 / 21.719), se opta por sistema de tarjetas ("SofoCard"); alcance acotado por fases según el [[Triángulo de Gestión]] (atrasos primero, JUNAEB/asistencia por clase quedan como fases futuras); JavaFX recomendado como reemplazo de JFrame (mantiene el requisito de usar Java, corre bien en el servidor de pruebas Raspberry Pi 4 que están considerando). Entidades del sistema quedan pendientes, aún sin profundizar.

Esta página se va a seguir completando en próximas sesiones (kick off, acta de constitución, etc.) — a diferencia de [[ArcaBlend (Proyecto Ejemplo)]], que documenta un caso ya cerrado.

## [2026-08-10] ingest | Proyecto Yuyito.docx

Documento fundacional: enunciado + rúbrica oficial del trabajo final de 4° medio (especialidad Programación) — la razón detrás del nombre "Yuyito" de esta wiki. Creada [[Proyecto Final de Desarrollo de Software]], que documenta las 2 etapas del proyecto, mapea cada entregable a su página existente en la wiki, y deja registrados dos conceptos que la wiki aún no cubría: Especificación de Requerimientos Funcionales y Modelo Relacional Normalizado (pendientes de página propia).

A pedido del usuario, [[ArcaBlend (Proyecto Ejemplo)]] queda congelado como estaba — proyecto ya cerrado, no se le sigue agregando contenido a partir de este documento.

## [2026-08-10] proyecto | SofoCard — Análisis del Caso completo

Completada la sección 1 de [[SofoCard]] siguiendo la estructura oficial de 9 puntos de [[Proyecto Final de Desarrollo de Software]] (más detallada que la plantilla genérica). Datos aportados por el usuario: situación actual (registro a mano en cuaderno por los inspectores, traspasado luego a Kimche —descrita como mala y desorganizada—, con casos de alumnos que dan nombres falsos al no haber verificación de identidad) y quiénes hacen el ingreso hoy (inspectores o profesores presentes en la entrada).

Con esto, la problemática y la necesidad detectada quedan ancladas en un hecho concreto: no es solo "no hay sistema", es "doble registro manual + sin verificación de identidad" — lo cual justifica más fuerte la decisión ya tomada de usar tarjeta (SofoCard) en vez de depender de la palabra del alumno.

## [2026-08-10] proyecto | SofoCard — documento real completado y simplificado

Completado el documento real `Documentacion/1 PLANTILLA Análisis del caso.docx` (fuera de `Brain/`, en `/home/shiroi/Proyectos/Zitrazo/Documentacion/`) editando directamente el XML interno del .docx a partir de la plantilla en blanco de `raw/Documentacion/` (nunca tocada), para conservar el formato y estilo exactos de la plantilla oficial. El archivo estaba abierto en OnlyOffice; se esperó a que el usuario lo cerrara antes de editar, por riesgo de corrupción/pérdida de cambios.

A pedido del usuario, se bajó el nivel de lenguaje a uno simple de 4° medio (sin tecnicismos de gestión de proyectos) — se regeneró el documento completo desde la plantilla limpia en vez de editar el texto ya insertado, para evitar duplicar IDs de párrafo en la sección de objetivos específicos (que tiene varios ítems). Esta convención de lenguaje simple queda registrada en [[SofoCard]] para aplicarse a todos los documentos siguientes del proyecto (Kick Off, Acta de Constitución, etc.), tanto en el .docx real como en la wiki.

## [2026-08-10] proyecto | SofoCard — Análisis del Caso aprobado, equipo confirmado

El usuario aprobó el documento 1 (Análisis del Caso) en su versión simplificada. Se confirma que el equipo Pixelazo Corp lo forman 2 personas: Alonso (el usuario) y Esteban. Dato registrado en [[SofoCard]] para usarse en el Kick Off (integrantes, roles, responsabilidades).

## [2026-08-10] proyecto | SofoCard — Planilla de Requerimientos (adelantada)

A pedido del usuario, se adelantó la Planilla de Requerimientos antes del Kick Off y la Acta de Constitución, usando actores genéricos ("Inspector o Profesor") hasta definir entidades en firme. No existía una plantilla en blanco para este documento (a diferencia de los otros 3) — se generó `Documentacion/4-EJEMPLO-Planilla de Requerimientos.xlsx` reescribiendo directamente `xl/worksheets/sheet2.xml` con celdas de texto inline (sin tocar sharedStrings.xml, más simple y sin riesgo de romper la tabla de strings compartida), a partir de la copia limpia en `Brain/raw/Documentacion/`.

10 requerimientos (R.1-R.10: 7 funcionales, 3 no funcionales), todos en estado "Solicitado". R.9 formaliza como requerimiento no funcional la decisión ya tomada de no usar datos biométricos. Queda pendiente revisar la columna de actores una vez definidas las entidades del sistema.
