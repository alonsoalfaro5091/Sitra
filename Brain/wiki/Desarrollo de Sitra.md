---
tags: [proyecto, desarrollo, gestion-de-proyectos]
source: "[[Sitra]]"
aliases: [Desarrollo de Zitrazo]
---

# Desarrollo de Sitra

Documenta la carpeta `Codigo/` del proyecto real, donde va el desarrollo de [[Sitra]] separado de la documentación formal.

## Estructura

```
website/               — aplicación web de administración
Codigo/
├── dev/              — metodología y backlog de desarrollo
├── java/             — backend Java para la Raspberry Pi
├── db/               — scripts SQL y procedimientos PL/pgSQL
└── sistema-fisico/   — terminal ESP32, lector RC522 y tarjetas SofoCard
```

`website/`, `java/` y `db/` todavía no tienen una implementación completa. `sistema-fisico/` contiene la documentación del hardware confirmado. Antes de fijar la base de datos y los contratos de la API faltan los Casos de Uso, la Especificación de Requerimientos Funcionales y el Modelo Relacional Normalizado (3FN).

## Metodología

Desarrollo en 3 "olas" (iteraciones), cada una entregando algo que se puede probar:

1. **Ola 1 — Base de datos:** modelo relacional, tablas, procedimientos almacenados básicos.
2. **Ola 2 — Registro de atrasos:** lectura de tarjeta, registro, confirmación en pantalla.
3. **Ola 3 — Consultas y administración:** historial por alumno, listado del día, alta/baja de tarjetas.

Detalle completo en `Codigo/dev/metodologia.md` y `Codigo/dev/backlog.md` (fuera de la wiki, junto al código).

## Backlog

Los 10 requerimientos de la [[Planilla de Requerimientos|planilla de requerimientos]] de Sitra (R.1-R.10) están convertidos en tareas de desarrollo. Todos continúan pendientes.

## Arquitectura

La Raspberry Pi corre Debian Server sin entorno gráfico y funciona como servidor. La arquitectura queda en 3 partes:

- **Raspberry Pi (backend, sin pantalla):** PostgreSQL + servicio en Java. 4GB RAM, 32GB de almacenamiento.
- **ESP32-2432S028 + RC522:** terminal físico con pantalla táctil TFT integrada de 2,8 pulgadas. Lee la SofoCard, consulta el backend por WiFi/HTTP y muestra el resultado.
- **Aplicación web:** administración para inspectores (historial, listado del día y alta/baja de tarjetas), desarrollada en `website/` en la raíz del repositorio.

## Tecnologías

Decidido: backend Java, aplicación web, PostgreSQL + PL/pgSQL, Raspberry Pi 4 con Debian Server, ESP32-2432S028, lector RC522 y tarjetas RFID SofoCard ISO/IEC 14443A.

Pendiente: framework de la aplicación web, despliegue, pinout disponible para el RC522 y cobertura WiFi en la entrada.

Detalle completo en `Codigo/dev/tecnologias.md` (fuera de la wiki, junto al código) — se va actualizando a medida que se toman las decisiones pendientes.

## Sistema físico

`Codigo/sistema-fisico/README.md` documenta el terminal componente por componente. La placa recibe 5 V por USB-C, pero el RC522 usa 3,3 V. Antes de cablear hay que comprobar qué GPIO están libres porque la pantalla y el panel táctil vienen integrados y la ficha comercial no publica su pinout.
