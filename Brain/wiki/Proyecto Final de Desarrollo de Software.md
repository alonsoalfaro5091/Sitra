---
tags: [concepto, gestion-de-proyectos, ingenieria-de-requerimientos]
source: "[[Proyecto Yuyito.docx]]"
---

# Proyecto Final de Desarrollo de Software

Enunciado y rúbrica oficial del trabajo final de 4° Medio, especialidad Programación (grupos de hasta 3 estudiantes). Es el documento marco que define **toda** la cadena de entregables que la wiki viene documentando — cada plantilla y concepto ya existente ([[Análisis del Caso]], [[Acta de Reunión Kick Off]], [[Acta de Constitución]], [[Planilla de Requerimientos]], [[Caso de Uso]]) corresponde a un punto específico de este enunciado.

Propósito general: resolver una problemática de la comunidad escolar o municipal (se prioriza componente ecológico/sustentable), integrando obligatoriamente base de datos relacional normalizada, procedimientos almacenados, aplicación Java o Web, y documentación técnica y de usuario completa.

## Etapa 1 — Análisis, Requerimientos y Diseño de Datos

Objetivo: analizar la problemática, definir la solución, sus requerimientos, y diseñar la estructura de datos.

| # | Entregable | Página en la wiki |
|---|---|---|
| 1 | Análisis del Caso — contexto, situación actual, problemática, involucrados, usuarios afectados, necesidad, justificación, beneficiarios, oportunidad de solución | [[Análisis del Caso]] |
| 2 | Kick Off — nombre, integrantes, fecha, problemática, solución propuesta, objetivo inicial, alcance preliminar, roles, responsabilidades, acuerdos | [[Acta de Reunión Kick Off]] |
| 3 | Acta de Constitución — nombre, justificación, objetivos, alcance, exclusiones, beneficiarios, entregables, recursos, riesgos, restricciones, tecnologías, roles | [[Acta de Constitución]] |
| 4 | Planilla de Requerimientos — funcionales (RF-XX) y no funcionales (RNF-XX), cada uno con ID único | [[Planilla de Requerimientos]], [[Requerimiento]] |
| 5 | Casos de Uso — actores, casos de uso, diagrama general, relaciones, descripción de los principales | [[Caso de Uso]] |
| 6 | Especificación de Requerimientos Funcionales — ficha por cada RF relevante | [[Especificación de Requerimientos Funcionales]] |
| 7 | Modelo Relacional Normalizado (3FN) — entidades, atributos, PK/FK, cardinalidades, integridad | [[Modelo Relacional Normalizado]] |
| 8 | Presentación de la Etapa 1 | — |

**Trazabilidad exigida explícitamente:** Requerimientos → Casos de Uso → Datos necesarios → Modelo Relacional. Es un criterio de evaluación propio ("Coherencia y trazabilidad"), no solo una buena práctica — cada documento debe poder rastrearse hasta el anterior.

## Etapa 2 — Desarrollo, Documentación y Presentación Final

Objetivo: implementar la solución de la Etapa 1, generar documentación técnica/usuario, y demostrar que el sistema cumple los requerimientos.

- **ERS (Especificación de Requisitos de Software)** — documento formal que consolida y amplía los requerimientos de la Etapa 1; debe mantenerse coherente con la app realmente desarrollada (cambios de requerimientos durante el desarrollo deben quedar documentados).
- **Manual de Usuario** — debe permitir que alguien ajeno al desarrollo use el sistema; se recomienda incluir capturas de pantalla.
- **Software entregado:** base de datos con datos de prueba e integridad, procedimientos almacenados implementados y explicables, aplicación (Java de escritorio o Web) conectada correctamente a la base de datos.
- **Presentación y defensa final** — vuelve a explicar los elementos clave de la Etapa 1 y demuestra la solución funcionando en vivo (inicio de sesión, registro, modificación, consultas, procedimientos, validaciones, manejo de errores).
- **Defensa individual** — aunque el proyecto es grupal, cualquier integrante puede ser interrogado sobre cualquier parte del sistema ("explique este método", "¿por qué esta FK?", "explique esta consulta SQL"). El uso de IA está permitido pero no exime de comprender y poder explicar todo lo entregado; el desconocimiento significativo puede implicar calificación mínima individual.

## Flujo completo

Problemática → Análisis del Caso → Solución tecnológica → Kick Off → Acta de Constitución → Requerimientos (RF/RNF) → Casos de Uso → Especificación de Requerimientos → Modelo Relacional (3FN) → **Presentación Etapa 1** → Desarrollo de BD → Procedimientos Almacenados → Desarrollo Java/Web → Integración → Pruebas → ERS → Manual de Usuario → **Aplicación terminada** → Presentación y Defensa Final.

## Notas para [[Zitrazo]]

El proyecto real en desarrollo debe seguir esta estructura completa. Al momento de este ingest, [[Zitrazo]] tiene resuelto el punto 1 (Análisis del Caso) y decisiones preliminares de alcance y tecnología; faltan los puntos 2 en adelante.
