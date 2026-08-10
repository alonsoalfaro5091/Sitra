# Metodología de desarrollo — Zitrazo

## Equipo

Pixelazo Corp: Alonso y Esteban. Rol de cada uno en el desarrollo del código: **pendiente** (se define en el Kick Off).

## Cómo vamos a trabajar

Desarrollo en "olas" (iteraciones), cada una entregando algo que se puede probar:

- **Ola 1 — Base de datos:** modelo relacional normalizado, tablas creadas en PostgreSQL, procedimientos almacenados básicos.
- **Ola 2 — Registro de atrasos:** lectura de la tarjeta SofoCard, registro del atraso, confirmación en pantalla (interfaz JavaFX mínima).
- **Ola 3 — Consultas y administración:** historial por alumno, listado del día, alta/baja de tarjetas.

El detalle de tareas de cada ola está en [`backlog.md`](backlog.md).

## Tecnologías

Ver [`tecnologias.md`](tecnologias.md) — lo ya decidido (Java, JavaFX, PostgreSQL/PL-pgSQL, Raspberry Pi 4, tarjeta SofoCard) y lo que todavía falta definir (lector de tarjetas, pantalla, sistema operativo de la Pi).

## Antes de escribir código

Todavía faltan, en este orden, los documentos que definen QUÉ construir:

1. Kick Off (roles, fecha).
2. Acta de Constitución.
3. Casos de Uso (actores definidos en firme).
4. Especificación de Requerimientos Funcionales.
5. Modelo Relacional Normalizado (3FN).

Escribir código de base de datos o de la aplicación antes de tener el modelo relacional normalizado significa muy probablemente rehacerlo después. El backlog de la Ola 1 no arranca hasta tener el modelo.
