---
tags: [proyecto, resumen, uso-de-ia]
source: ""
aliases: [Resumen de Sesión — Kickoff de Zitrazo]
---

# Resumen de Sesión — Kickoff de Sitra

Resumen de lo trabajado con IA y Obsidian durante el arranque del proyecto actualmente llamado **Sitra**. En la sesión original el proyecto todavía se llamaba Zitrazo. Ver también [[Uso de IA en el Proyecto]].

## 1. Base de conocimiento (wiki en Obsidian)

Antes de arrancar el proyecto real, ya existía una wiki en Obsidian ("Brain") con el material de la asignatura sintetizado: 14 páginas sobre gestión de proyectos e ingeniería de requerimientos (conceptos como [[Requerimiento]], [[Caso de Uso]], plantillas como [[Análisis del Caso]], [[Acta de Constitución]]), más [[ArcaBlend (Proyecto Ejemplo)]], el caso real del año pasado usado como ejemplo.

En esta sesión se agregó el documento que faltaba: **[[Proyecto Final de Desarrollo de Software]]**, el enunciado y rúbrica oficial del profesor — con eso la wiki quedó mapeando cada entregable de la asignatura a su página correspondiente.

## 2. Arranque del proyecto real: Sitra

Se definió el proyecto real del equipo (Alonso + Esteban, Pixelazo Corp): **Sitra**, un sistema de control de atrasos para el Liceo RBL, cliente ficticio Sofofa.

- **Análisis del Caso** — completo, con contexto, problema, objetivos y justificación basados en información real entregada por el equipo (cómo se registran los atrasos hoy: cuaderno + traspaso a Kimche, con casos de suplantación de identidad).
- **Decisión técnica clave:** tarjeta de identificación (SofoCard) en vez de huella dactilar, para evitar tratar datos biométricos sensibles de menores de edad.
- **Planilla de Requerimientos** — adelantada, 10 requerimientos (R.1-R.10) con actores en genérico, a la espera de definir entidades en firme.

Ambos documentos se completaron en dos formatos: como página viva en la wiki ([[Sitra]]) y como archivos reales (`Documentacion/1 Sitra Análisis del Caso.docx` y `Documentacion/4 Sitra Planilla de Requerimientos.xlsx`).

## 3. Tecnologías y arquitectura

Se documentó (sin implementar código todavía) la pila técnica completa:

- **Software:** backend Java, aplicación web, PostgreSQL + PL/pgSQL.
- **Servidor:** Raspberry Pi 4, Debian Server (4GB RAM, 32GB de almacenamiento).
- **Punto de entrada físico:** ESP32-2432S028 con pantalla táctil integrada de 2,8 pulgadas + lector RFID RC522 + tarjetas SofoCard de 13,56 MHz.

La Raspberry Pi funciona como servidor sin entorno gráfico. El ESP32 controla el terminal físico y la confirmación táctil, mientras la administración para inspectores se realiza mediante la aplicación web en desarrollo.

También se documentaron las consideraciones eléctricas de cada componente (ej. el RC522 funciona a 3.3V, no a 5V) en `Codigo/sistema-fisico/README.md`.

## 4. Organización del proyecto

- Carpeta `Codigo/` organizada en `dev/`, `java/`, `db/` y `sistema-fisico/`; la aplicación web vive en `AppWeb/`, en la raíz del repositorio.
- Los documentos activos fueron renombrados a Sitra; `Brain/raw/` se mantiene intacto como fuente original.
- La aplicación web se prepara directamente en la carpeta raíz `AppWeb/`. El repositorio remoto todavía conserva el nombre histórico `Zitrazo` hasta que el equipo decida renombrarlo en GitHub.

## 5. Errores cometidos y corregidos (uso responsable de IA)

Dos casos concretos donde la IA se equivocó y el equipo corrigió, quedan documentados como ejemplo de revisión activa (no aceptar todo lo que entrega la IA sin revisar):

- La IA asumió primero que el proyecto se llamaba "SofoCard". El equipo aclaró que SofoCard es la tarjeta; el proyecto se llamó Zitrazo y luego fue renombrado por el equipo a **Sitra**.
- `index.md` y `log.md` de la wiki se reorganizaron dos veces hasta llegar a la ubicación que el equipo realmente quería (fuera de `wiki/`, en la raíz, para tenerlos más a mano).

## Qué falta

- Kick Off (falta fecha de reunión y rol de cada integrante).
- Acta de Constitución.
- Definir entidades del sistema en firme (Inspector vs. Profesor, rol del Apoderado).
- Casos de Uso, Especificación de Requerimientos Funcionales, Modelo Relacional Normalizado (3FN).
- Elegir el framework y despliegue de la aplicación web.
- Confirmar el pinout disponible de la placa ESP32-2432S028 para conectar el RC522.
- Confirmar la cobertura WiFi en el punto de instalación.
