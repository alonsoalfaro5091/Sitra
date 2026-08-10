# Backlog — Zitrazo

Requerimientos de `Documentacion/4 Zitrazo Planilla de Requerimientos.xlsx` convertidos en tareas de desarrollo, agrupados por ola (ver `metodologia.md`). Estado inicial: todos **Pendiente**.

## Ola 1 — Base de datos

- [ ] Diseñar el modelo relacional normalizado (3FN) — depende de Casos de Uso y entidades definidas.
- [ ] Crear las tablas en PostgreSQL según el modelo.
- [ ] R.6 — Procedimiento para registrar alumno y su tarjeta SofoCard.
- [ ] R.7 — Procedimiento para dar de baja una tarjeta extraviada y asociar una nueva.
- [ ] R.9 — Revisar que el modelo no guarde más datos del alumno que los necesarios (dato sensible descartado: huella dactilar).

## Ola 2 — Registro de atrasos

- [ ] R.1 — Leer tarjeta SofoCard y registrar el atraso (alumno, fecha, hora).
- [ ] R.2 — Mostrar confirmación en pantalla tras el registro.
- [ ] R.3 — Manejar tarjeta no reconocida (mensaje de error, no registrar).
- [ ] R.8 — Verificar que el registro completo tome pocos segundos.

## Ola 3 — Consultas y administración

- [ ] R.4 — Consultar atrasos por alumno.
- [ ] R.5 — Consultar listado de atrasos del día.
- [ ] R.10 — Verificar disponibilidad del sistema durante el horario de entrada.

## Fuera de alcance por ahora

Registro de almuerzo JUNAEB y asistencia por clase (ver [[Zitrazo]], sección "Alcance por fases") — no se agregan tareas para esto hasta que el sistema de atrasos esté terminado.
