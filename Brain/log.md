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

Nuevo proyecto real en desarrollo (no un ingest de fuente externa, sino trabajo en vivo con el usuario). Creada [[Zitrazo|SofoCard]], primera sección (Análisis del Caso) a partir de la conversación y de `raw/Ideas/Lluvia de ideas Yuyito.md`.

Decisiones registradas: se descarta huella dactilar por ser dato biométrico sensible de menores de edad (Ley 19.628 / 21.719), se opta por sistema de tarjetas ("SofoCard"); alcance acotado por fases según el [[Triángulo de Gestión]] (atrasos primero, JUNAEB/asistencia por clase quedan como fases futuras); JavaFX recomendado como reemplazo de JFrame (mantiene el requisito de usar Java, corre bien en el servidor de pruebas Raspberry Pi 4 que están considerando). Entidades del sistema quedan pendientes, aún sin profundizar.

Esta página se va a seguir completando en próximas sesiones (kick off, acta de constitución, etc.) — a diferencia de [[ArcaBlend (Proyecto Ejemplo)]], que documenta un caso ya cerrado.

## [2026-08-10] ingest | Proyecto Yuyito.docx

Documento fundacional: enunciado + rúbrica oficial del trabajo final de 4° medio (especialidad Programación) — la razón detrás del nombre "Yuyito" de esta wiki. Creada [[Proyecto Final de Desarrollo de Software]], que documenta las 2 etapas del proyecto, mapea cada entregable a su página existente en la wiki, y deja registrados dos conceptos que la wiki aún no cubría: Especificación de Requerimientos Funcionales y Modelo Relacional Normalizado (pendientes de página propia).

A pedido del usuario, [[ArcaBlend (Proyecto Ejemplo)]] queda congelado como estaba — proyecto ya cerrado, no se le sigue agregando contenido a partir de este documento.

## [2026-08-10] proyecto | SofoCard — Análisis del Caso completo

Completada la sección 1 de [[Zitrazo|SofoCard]] siguiendo la estructura oficial de 9 puntos de [[Proyecto Final de Desarrollo de Software]] (más detallada que la plantilla genérica). Datos aportados por el usuario: situación actual (registro a mano en cuaderno por los inspectores, traspasado luego a Kimche —descrita como mala y desorganizada—, con casos de alumnos que dan nombres falsos al no haber verificación de identidad) y quiénes hacen el ingreso hoy (inspectores o profesores presentes en la entrada).

Con esto, la problemática y la necesidad detectada quedan ancladas en un hecho concreto: no es solo "no hay sistema", es "doble registro manual + sin verificación de identidad" — lo cual justifica más fuerte la decisión ya tomada de usar tarjeta (SofoCard) en vez de depender de la palabra del alumno.

## [2026-08-10] proyecto | SofoCard — documento real completado y simplificado

Completado el documento real `Documentacion/1 PLANTILLA Análisis del caso.docx` (fuera de `Brain/`, en `/home/shiroi/Proyectos/Zitrazo/Documentacion/`) editando directamente el XML interno del .docx a partir de la plantilla en blanco de `raw/Documentacion/` (nunca tocada), para conservar el formato y estilo exactos de la plantilla oficial. El archivo estaba abierto en OnlyOffice; se esperó a que el usuario lo cerrara antes de editar, por riesgo de corrupción/pérdida de cambios.

A pedido del usuario, se bajó el nivel de lenguaje a uno simple de 4° medio (sin tecnicismos de gestión de proyectos) — se regeneró el documento completo desde la plantilla limpia en vez de editar el texto ya insertado, para evitar duplicar IDs de párrafo en la sección de objetivos específicos (que tiene varios ítems). Esta convención de lenguaje simple queda registrada en [[Zitrazo|SofoCard]] para aplicarse a todos los documentos siguientes del proyecto (Kick Off, Acta de Constitución, etc.), tanto en el .docx real como en la wiki.

## [2026-08-10] proyecto | SofoCard — Análisis del Caso aprobado, equipo confirmado

El usuario aprobó el documento 1 (Análisis del Caso) en su versión simplificada. Se confirma que el equipo Pixelazo Corp lo forman 2 personas: Alonso (el usuario) y Esteban. Dato registrado en [[Zitrazo|SofoCard]] para usarse en el Kick Off (integrantes, roles, responsabilidades).

## [2026-08-10] proyecto | SofoCard — Planilla de Requerimientos (adelantada)

A pedido del usuario, se adelantó la Planilla de Requerimientos antes del Kick Off y la Acta de Constitución, usando actores genéricos ("Inspector o Profesor") hasta definir entidades en firme. No existía una plantilla en blanco para este documento (a diferencia de los otros 3) — se generó `Documentacion/4-EJEMPLO-Planilla de Requerimientos.xlsx` reescribiendo directamente `xl/worksheets/sheet2.xml` con celdas de texto inline (sin tocar sharedStrings.xml, más simple y sin riesgo de romper la tabla de strings compartida), a partir de la copia limpia en `Brain/raw/Documentacion/`.

10 requerimientos (R.1-R.10: 7 funcionales, 3 no funcionales), todos en estado "Solicitado". R.9 formaliza como requerimiento no funcional la decisión ya tomada de no usar datos biométricos. Queda pendiente revisar la columna de actores una vez definidas las entidades del sistema.

## [2026-08-10] proyecto | Corrección de nombre: el proyecto es Zitrazo, no SofoCard

El usuario corrigió: el proyecto completo se llama **Zitrazo** (nombre que además coincide con el directorio raíz `/home/shiroi/Proyectos/Zitrazo/`). **SofoCard** es solo el nombre de la tarjeta de identificación, un componente del sistema — no el proyecto entero. Fue un error de esta wiki asumirlo como nombre de proyecto.

Renombrada `wiki/SofoCard.md` → `wiki/Zitrazo.md` (mismo contenido, título y menciones ajustadas). Actualizadas las referencias en `index.md` y en `Proyecto Final de Desarrollo de Software.md`. Los enlaces `[[SofoCard]]` de entradas anteriores de este log se dejaron como `[[Zitrazo|SofoCard]]` (mismo texto visible, apuntando a la página correcta) en vez de reescribir el historial.

A pedido del usuario, también se renombraron los 4 documentos reales en `Documentacion/` (que decían "SofoCard" en el nombre de archivo) a "Zitrazo".

## [2026-08-10] ingest | Uso de IA en el Proyecto

Creada [[Uso de IA en el Proyecto]] a pedido del usuario, para dejar registro de cómo el equipo usó IA durante el desarrollo — pensada como respaldo para el criterio de rúbrica "Uso responsable de IA" (Etapa 2 de [[Proyecto Final de Desarrollo de Software]]) y para la defensa individual. Incluye qué tareas hizo la IA (redacción de borradores, llenado de documentos reales, una recomendación técnica puntual), qué decisiones siguieron siendo del equipo, y el error de nombre SofoCard/Zitrazo como ejemplo concreto de por qué hay que revisar lo que la IA entrega.

## [2026-08-10] ingest | Restructuración de Codigo/ y creación de dev/

A pedido del usuario, se reestructuró `Zitrazo/Codigo/` (antes 3 carpetas vacías sin contenido: `DB`, `Java`, `Sistema Fisico`) en `dev/`, `java/`, `db/`, `sistema-fisico/`. `dev/` es nueva: guarda `metodologia.md` (desarrollo en 3 "olas"/iteraciones, pila técnica, y una nota explícita de que el código no debe empezar antes del Modelo Relacional Normalizado) y `backlog.md` (los R.1-R.10 de la planilla de requerimientos convertidos en tareas, agrupadas por ola, todas Pendiente). `java/`, `db/` y `sistema-fisico/` quedaron con un README explicando qué van a contener y de qué dependen — deliberadamente vacíos todavía.

Ingest de esa restructuración a la wiki: creada [[Desarrollo de Zitrazo]], enlazada desde [[Zitrazo]] (nueva sección "Desarrollo en código") y sumada al índice. Conecta el backlog con [[Planilla de Requerimientos]] y con la decisión de tarjeta vs. huella ya registrada.

## [2026-08-10] lint | Revisión de salud de la wiki (segunda pasada)

Revisadas las 19 páginas de contenido (excluye index/log). Sin páginas huérfanas nuevas: [[Uso de IA en el Proyecto]] y [[Desarrollo de Zitrazo]] tienen enlace entrante desde el índice y desde [[Zitrazo]]. Sin contradicciones detectadas.

Pendientes ya identificados en ingests anteriores, todavía abiertos (no son bugs de la wiki, son huecos de contenido real del proyecto Zitrazo): páginas [[Especificación de Requerimientos Funcionales]] y [[Modelo Relacional Normalizado]] enlazadas desde [[Proyecto Final de Desarrollo de Software]] pero aún sin crear; Kick Off y Acta de Constitución de Zitrazo sin iniciar (falta fecha de reunión y roles del equipo); columna "Actores" de la planilla de requerimientos en genérico, pendiente de afinar cuando se definan entidades.

## [2026-08-10] proyecto | Zitrazo — solo documentar tecnologías, no implementar todavía

El usuario aclaró: por ahora solo quiere dejar documentado qué se va a usar (Raspberry Pi, lenguajes, etc.), no empezar a programar. Creado `Codigo/dev/tecnologias.md` con tabla de software (Java, JavaFX, PostgreSQL/PL-pgSQL, git) y hardware (Raspberry Pi 4, tarjeta SofoCard) ya decididos, y lo que falta definir marcado explícitamente como pendiente: tipo/modelo del lector de tarjetas, tipo de pantalla, sistema operativo de la Pi, y su RAM/almacenamiento — no se inventó ninguno de estos datos. `metodologia.md` ahora enlaza a este archivo en vez de duplicar la lista. Reflejado en [[Desarrollo de Zitrazo]].

## [2026-08-10] proyecto | Zitrazo — hardware del punto de entrada y corrección de arquitectura

El usuario confirmó: Raspberry Pi con Debian Server (terminal pura, sin entorno gráfico), 4GB RAM, 32GB de almacenamiento; para el lector de tarjetas quieren algo barato y accesible, tienen impresora 3D disponible, y preguntaron si un ESP32 con mini pantalla podría servir.

Se recomendó ESP32 + módulo RFID RC522 (barato, muy documentado) + mini pantalla (OLED o TFT). Se detectó y flagueó una inconsistencia con la arquitectura previa: Debian Server sin GUI no puede correr JavaFX en la propia Pi. El usuario confirmó la arquitectura corregida: Pi = backend headless (PostgreSQL + Java), ESP32+RC522+pantalla = punto de entrada físico, JavaFX = app de administración en el PC de un inspector (no en la Pi). Documentado en `Codigo/dev/tecnologias.md` y reflejado en [[Desarrollo de Zitrazo]] (nueva sección "Arquitectura").

## [2026-08-10] proyecto | Zitrazo — sistema físico y componentes electrónicos

El usuario notó que `Codigo/sistema-fisico/` seguía con el placeholder vacío pese a haber hardware ya decidido. Completado con lista de componentes (ESP32, RC522, mini pantalla, tarjetas RFID, fuente 5V, carcasa 3D) y consideraciones eléctricas de cada uno: el RC522 es de 3.3V y no tolera 5V, el rango de lectura corto es una ventaja (evita lecturas accidentales), y elegir OLED (I2C) en vez de TFT (SPI) simplifica el cableado al no compartir bus con el RC522. Reflejado en [[Desarrollo de Zitrazo]] (nueva sección "Sistema físico").

## [2026-08-10] lint | index.md y log.md movidos fuera de wiki/ por error

Se detectó que `wiki/index.md` y `wiki/log.md` habían quedado movidos a la raíz de `Brain/` (probablemente un arrastre accidental en Obsidian mientras se solucionaba el problema de la vista gráfica de la entrada anterior). Contenido idéntico al de la última versión commiteada — no se perdió nada, solo la ubicación. Restaurados a `wiki/` según la estructura definida en `CLAUDE.md`.

## [2026-08-10] proyecto | Corrección: index.md y log.md sí van fuera de wiki/

El usuario aclaró que el movimiento de la entrada anterior no fue un accidente: quiere `index.md` y `log.md` en la raíz de `Brain/` (fuera de `wiki/`) a propósito, para tenerlos más a mano. Revertida la restauración — vuelven a `Brain/index.md` y `Brain/log.md`. Actualizado `CLAUDE.md` para reflejar esta estructura como la definitiva.

De paso, el usuario aclaró el propósito del archivo `Sin título.canvas` (vacío, en la raíz de `Brain/`): es para diagramar el Modelo Relacional Normalizado de [[Zitrazo]]. Renombrado a `Modelo Relacional Zitrazo.canvas`.

## [2026-08-10] query | Resumen de la sesión para el profesor

A pedido del usuario, se sintetizó todo lo trabajado en esta sesión en una página nueva, [[Resumen de Sesión — Kickoff de Zitrazo]], pensada para mostrarle al profesor: qué se hizo en la wiki, el arranque del proyecto Zitrazo (Análisis del Caso y Planilla de Requerimientos, real y en la wiki), la pila técnica y la corrección de arquitectura (Pi headless / ESP32 como punto de entrada / JavaFX como app de administración), la reorganización de `Codigo/`, y dos errores concretos de la IA que el equipo corrigió (nombre del proyecto, ubicación de index/log) — como evidencia de revisión activa para el criterio de rúbrica "Uso responsable de IA".

## [2026-08-31] proyecto | Zitrazo pasa a llamarse Sitra y se confirma el hardware

El equipo cambió el nombre vigente del proyecto de **Zitrazo** a **Sitra**. **SofoCard** se mantiene como nombre de la tarjeta RFID. Los documentos y páginas activas se renombraron, mientras que `Brain/raw/` y las entradas históricas anteriores de este log se conservaron sin reescribir.

Se confirmó la arquitectura: Raspberry Pi 4 con Debian Server como servidor; backend Java con PostgreSQL y PL/pgSQL; aplicación web de administración en `Codigo/AppWeb/`; y una placa ESP32-2432S028 como cerebro del terminal físico. La placa integra una pantalla TFT táctil de 2,8 pulgadas y se conecta a un lector RC522 para leer tarjetas SofoCard de 13,56 MHz, ISO/IEC 14443A. El pinout del lector queda pendiente hasta revisar qué GPIO están libres en la placa física.

## [2026-08-31] proyecto | Ubicación de la aplicación web

El equipo decidió que la aplicación web vive en `AppWeb/`, directamente en la raíz del repositorio, y no dentro de `Codigo/`. La rama `AppWeb` fue eliminada; el trabajo continúa en la rama principal.

## [2026-08-31] proyecto | Aplicación web en website/

La ubicación vigente de la aplicación web es `website/`, directamente en la raíz del repositorio. La carpeta `AppWeb/` no se utiliza.
