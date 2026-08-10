---
tags: [proyecto, desarrollo, gestion-de-proyectos]
source: "[[Zitrazo]]"
---

# Desarrollo de Zitrazo

Documenta la carpeta `Codigo/` del proyecto real (fuera de `Brain/`, hermana de `Documentacion/`), donde va el desarrollo puro en código de [[Zitrazo]] — separado de la documentación de análisis y requerimientos.

## Estructura

```
Codigo/
├── dev/              — metodología y backlog de desarrollo
├── java/             — código fuente Java (JavaFX)
├── db/                — scripts SQL y procedimientos PL/pgSQL
└── sistema-fisico/    — notas de hardware (Raspberry Pi 4, lector de tarjetas)
```

`java/`, `db/` y `sistema-fisico/` están vacíos por ahora — a propósito. Ninguno arranca antes de tener el Modelo Relacional Normalizado (3FN), que todavía no existe: falta primero el Kick Off, la Acta de Constitución, Casos de Uso y la Especificación de Requerimientos Funcionales. Escribir código de base de datos o de aplicación antes de eso implicaría muy probablemente rehacerlo.

## Metodología

Desarrollo en 3 "olas" (iteraciones), cada una entregando algo probable:

1. **Ola 1 — Base de datos:** modelo relacional, tablas, procedimientos almacenados básicos.
2. **Ola 2 — Registro de atrasos:** lectura de tarjeta, registro, confirmación en pantalla.
3. **Ola 3 — Consultas y administración:** historial por alumno, listado del día, alta/baja de tarjetas.

Detalle completo en `Codigo/dev/metodologia.md` y `Codigo/dev/backlog.md` (fuera de la wiki, junto al código).

## Backlog

Los 10 requerimientos de la [[Planilla de Requerimientos|planilla de requerimientos]] de Zitrazo (R.1-R.10) quedaron convertidos en tareas de desarrollo, agrupados por ola. Todos en estado Pendiente — ninguno implementado todavía.

## Pila técnica

Java + JavaFX (ver justificación en [[Zitrazo]]), PostgreSQL + PL/pgSQL, Raspberry Pi 4 como servidor de pruebas, git/GitHub para control de versiones.
