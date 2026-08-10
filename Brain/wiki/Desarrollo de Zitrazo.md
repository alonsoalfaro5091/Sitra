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

## Arquitectura

La Raspberry Pi corre Debian Server sin entorno gráfico, así que JavaFX no puede mostrarse en su propia pantalla. La arquitectura queda en 3 partes:

- **Raspberry Pi (backend, sin pantalla):** PostgreSQL + servicio en Java. 4GB RAM, 32GB de almacenamiento.
- **ESP32 + lector RFID (RC522) + mini pantalla:** el punto de entrada físico donde se pasa la tarjeta SofoCard — le habla al backend por WiFi/HTTP, muestra la confirmación en su propia pantalla. Carcasa impresa en 3D.
- **JavaFX:** app de administración para los inspectores (historial, listado del día, alta/baja de tarjetas) — corre en su computador, no en la Pi.

## Tecnologías

Decidido: Java, JavaFX (app de administración), PostgreSQL + PL/pgSQL, Raspberry Pi 4 (Debian Server, 4GB RAM, 32GB), ESP32 + RC522 para el lector, tarjeta SofoCard, git/GitHub.

Pendiente: modelo exacto del lector RFID, tipo de mini pantalla (OLED vs. TFT).

Detalle completo en `Codigo/dev/tecnologias.md` (fuera de la wiki, junto al código) — se va actualizando a medida que se toman las decisiones pendientes.

## Sistema físico

`Codigo/sistema-fisico/README.md` documenta el punto de entrada componente por componente (ESP32, RC522, pantalla, alimentación, carcasa) con sus consideraciones eléctricas — por ejemplo, que el RC522 funciona a 3.3V (no 5V), o que una pantalla OLED por I2C simplifica el cableado frente a una TFT por SPI al compartir bus con el lector. Quedan pendientes: tipo de pantalla final, cobertura WiFi en el punto de instalación, y el diseño de la carcasa.
