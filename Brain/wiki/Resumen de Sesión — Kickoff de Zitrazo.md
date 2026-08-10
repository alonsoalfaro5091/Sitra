---
tags: [proyecto, resumen, uso-de-ia]
source: ""
---

# Resumen de Sesión — Kickoff de Zitrazo

Resumen de lo trabajado con IA (Claude) y Obsidian en una sesión de arranque del proyecto **Zitrazo** — pensado para mostrarle al profesor cómo se usó la herramienta. Ver también [[Uso de IA en el Proyecto]] para la explicación general de qué hace y qué no hace la IA en este proyecto.

## 1. Base de conocimiento (wiki en Obsidian)

Antes de arrancar el proyecto real, ya existía una wiki en Obsidian ("Brain") con el material de la asignatura sintetizado: 14 páginas sobre gestión de proyectos e ingeniería de requerimientos (conceptos como [[Requerimiento]], [[Caso de Uso]], plantillas como [[Análisis del Caso]], [[Acta de Constitución]]), más [[ArcaBlend (Proyecto Ejemplo)]], el caso real del año pasado usado como ejemplo.

En esta sesión se agregó el documento que faltaba: **[[Proyecto Final de Desarrollo de Software]]**, el enunciado y rúbrica oficial del profesor — con eso la wiki quedó mapeando cada entregable de la asignatura a su página correspondiente.

## 2. Arranque del proyecto real: Zitrazo

Se definió el proyecto real del equipo (Alonso + Esteban, Pixelazo Corp): **Zitrazo**, un sistema de control de atrasos para el Liceo RBL, cliente ficticio Sofofa.

- **Análisis del Caso** — completo, con contexto, problema, objetivos y justificación basados en información real entregada por el equipo (cómo se registran los atrasos hoy: cuaderno + traspaso a Kimche, con casos de suplantación de identidad).
- **Decisión técnica clave:** tarjeta de identificación (SofoCard) en vez de huella dactilar, para evitar tratar datos biométricos sensibles de menores de edad.
- **Planilla de Requerimientos** — adelantada, 10 requerimientos (R.1-R.10) con actores en genérico, a la espera de definir entidades en firme.

Ambos documentos se completaron en dos formatos: como página viva en la wiki ([[Zitrazo]]) y como el archivo real que se entrega (`Documentacion/1 Zitrazo Análisis del Caso.docx`, `Documentacion/4 Zitrazo Planilla de Requerimientos.xlsx`).

## 3. Tecnologías y arquitectura

Se documentó (sin implementar código todavía) la pila técnica completa:

- **Software:** Java, JavaFX, PostgreSQL + PL/pgSQL.
- **Servidor:** Raspberry Pi 4, Debian Server (4GB RAM, 32GB de almacenamiento).
- **Punto de entrada físico:** ESP32 + lector RFID RC522 + mini pantalla, en una carcasa impresa en 3D.

De esta conversación salió un ajuste importante de arquitectura: como la Raspberry Pi corre sin entorno gráfico, JavaFX no puede mostrarse ahí — se repensó como una app de administración para los inspectores (consultas, alta/baja de tarjetas), mientras que el punto de entrada físico (ESP32) es el que muestra la confirmación del atraso.

También se documentaron las consideraciones eléctricas de cada componente (ej. el RC522 funciona a 3.3V, no a 5V) en `Codigo/sistema-fisico/README.md`.

## 4. Organización del proyecto

- Carpeta `Codigo/` reestructurada: `dev/` (metodología en 3 iteraciones, backlog de los requerimientos), `java/`, `db/`, `sistema-fisico/` — con nota explícita de que el código no arranca hasta tener el Modelo Relacional Normalizado.
- Archivos reales renombrados (de "PLANTILLA"/"EJEMPLO" a "Zitrazo").
- Todo el trabajo se subió a git (repo `Zitrazo` en GitHub) en commits separados y descriptivos, incluyendo un `.gitignore` para evitar que archivos temporales de OnlyOffice se cuelen en el repo.

## 5. Errores cometidos y corregidos (uso responsable de IA)

Dos casos concretos donde la IA se equivocó y el equipo corrigió, quedan documentados como ejemplo de revisión activa (no aceptar todo lo que entrega la IA sin revisar):

- La IA asumió que el proyecto se llamaba "SofoCard" (confundiéndolo con el nombre de la tarjeta). El equipo corrigió: el proyecto es **Zitrazo**.
- `index.md` y `log.md` de la wiki se reorganizaron dos veces hasta llegar a la ubicación que el equipo realmente quería (fuera de `wiki/`, en la raíz, para tenerlos más a mano).

## Qué falta

- Kick Off (falta fecha de reunión y rol de cada integrante).
- Acta de Constitución.
- Definir entidades del sistema en firme (Inspector vs. Profesor, rol del Apoderado).
- Casos de Uso, Especificación de Requerimientos Funcionales, Modelo Relacional Normalizado (3FN).
- Decisiones de hardware pendientes: modelo del lector RFID, tipo de mini pantalla, cobertura WiFi en el punto de instalación.
