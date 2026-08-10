---
tags: [ejemplo, proyecto, gestion-de-proyectos, ingenieria-de-requerimientos]
source: "[[1 PLANTILLA Análisis del caso completo .docx]], [[2 PLANTILLA Acta Minuta Kick Off completada.docx]], [[3 PLANTILLA Acta de constitución.docx]], [[4-PLANTILLA-Planilla de Requerimientos terminada.xlsx]]"
---

# ArcaBlend (Proyecto Ejemplo)

Caso real de un proyecto de curso (2025), usado aquí como **ejemplo aplicado end-to-end** de la cadena documental completa: [[Análisis del Caso]] → [[Acta de Reunión Kick Off]] → [[Acta de Constitución]] → [[Planilla de Requerimientos]]. Mientras que otros ejemplos de la wiki (ej. el caso del hostal en [[Planilla de Requerimientos]]) cubren un solo documento, este caso permite ver cómo la misma información evoluciona y se formaliza a través de las cuatro etapas.

**Empresa desarrolladora:** Pixelazo Corp (equipo estudiantil) — **Cliente:** Sofofa / Liceo Bicentenario de Electrotecnia — **Proyecto:** ArcaBlend, una máquina de arcade educativa.

## 1. Análisis del Caso

- **Contexto:** Pixelazo Inc es contratada para producir máquinas de arcade para liceos, a usarse en un evento. Requisito del cliente: juego original con fines educativos, con participación de estudiantes en su creación.
- **Problema:** plazo limitado para un producto de calidad.
- **Objetivo general:** crear una máquina de arcade operativa con un juego de quiz matemático original, para educar de forma entretenida.
- **Objetivos específicos:** cumplir criterios del cliente, integrar juegos variados y de calidad, resolver glitches/incompatibilidades, mantener bajo costo de producción, entregar valor educativo.
- **Justificación:** producto calidad/precio que da renombre e ingresos a la empresa desarrolladora.

## 2. Acta de Reunión Kick Off

- **Reunión:** 09/07/2025, Liceo Bicentenario de Electrotecnia. Participantes: 2 estudiantes desarrolladores (roles de líder de proyecto/programador SQLite y control de calidad/programador Pygame) + 2 patrocinadores (jefes de especialidad).
- **Requerimientos iniciales capturados:** hardware (cuerpo de madera, pantalla reciclada, controles impresos en 3D con Arduino, Raspberry Pi 4 + Recalbox, mandos PS2 reciclados) y software (juego matemático tipo quiz con base de datos de preguntas).
- **Limitaciones observadas:** incompatibilidad de emuladores, incertidumbre sobre compatibilidad Raspberry Pi/base de datos, dificultad de integrar juegos propios.
- **Técnicas de levantamiento** usadas por los distintos actores (ver [[Toma de Requerimientos]]): análisis de posibilidades, lluvia de ideas, discusión.

Este acta es el punto donde los requerimientos "generales" del análisis del caso se vuelven concretos (hardware/software específico) — confirma la nota de [[Acta de Reunión Kick Off]] sobre ser el primer registro de toma de requerimientos del proyecto.

## 3. Acta de Constitución

Formaliza lo anterior en la estructura de 4 secciones descrita en [[Acta de Constitución]]:

- **Datos:** empresa "Alfamonte SA", proyecto "ArcaBlend: Sistema versátil de entretenimiento y educación", 02/06/2025–16/10/2025 (~3 meses y 3 días), cliente Pixelazo Corp, presupuesto estimado $400.000.
- **Objetivos del proyecto** organizados en los 4 ejes del [[Triángulo de Gestión]]: alcance (catálogo variado + valor educativo), calidad (experiencia de juego + mejora académica medible), cronograma (3 iteraciones de 3-4 semanas cada una), costos (tope de $400.000).
- **Solución propuesta:** Raspberry Pi 4 + Recalbox (emulación), controles impresos en 3D + Arduino + microswitches, mandos PS2 reciclados, juego matemático en Python con base de datos SQL de preguntas por nivel educativo.
- **Riesgos iniciales:** incompatibilidad de BIOS/programas, errores de conexión de controles, incompatibilidad de la base de datos con la Raspberry Pi — los mismos riesgos ya anticipados informalmente en el kick off, ahora formalizados.
- **Especificaciones técnicas:** BD en SQL, lenguaje Python, SO Recalbox, controladores en Arduino.

## 4. Planilla de Requerimientos

8 requerimientos derivados directamente de la solución propuesta en el acta de constitución (ver estructura de columnas en [[Planilla de Requerimientos]]):

| R-N° | Requerimiento | Tipo | Estado |
|---|---|---|---|
| R.1 | Funcionamiento correcto del arcade (emuladores, ROMs, BIOS) | Funcional | Logrado |
| R.2 | Compatibilidad del sistema con el juego original | — | — |
| R.3 | Apoyo académico efectivo | No Funcional | — |
| R.4 | Buen catálogo de juegos | — | — |
| R.5 | Durabilidad de la máquina | — | — |
| R.6 | Desarrollo y actualización del juego matemático | — | — |
| R.7 | Mantenimiento del arcade | — | — |
| R.8 | Ranking de jugadores (ID + puntaje en base de datos) | — | — |

A diferencia del ejemplo del hostal en [[Planilla de Requerimientos]] (columnas "Actores Relacionados" y "Criterio de Aceptación" completas), esta planilla real quedó parcialmente rellenada — solo R.1 tiene estado, y el tipo (Funcional/No Funcional) solo está marcado en R.1 y R.3. Es un recordatorio de que en la práctica las plantillas rara vez se completan al 100%.

## Trazabilidad end-to-end

Un hilo se puede seguir a través de los 4 documentos: la necesidad de "valor educativo" del Análisis del Caso → se concreta como "juego matemático tipo quiz" en el Kick Off → se especifica técnicamente como "Python + SQL, preguntas por nivel educativo" en el Acta de Constitución → se mide como R.3 "Apoyo académico efectivo" en la Planilla de Requerimientos. Cada etapa no reinventa la información, la refina.
