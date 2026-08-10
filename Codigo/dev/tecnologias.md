# Tecnologías — Zitrazo

Lo que ya está decidido, y lo que falta por decidir, para no perder de vista qué se va a usar.

## Software

| Parte | Tecnología | Por qué |
|---|---|---|
| Lenguaje | Java | Requisito obligatorio de la asignatura. |
| Interfaz | JavaFX | Reemplazo de JFrame — sigue siendo Java, separa vista (FXML) de lógica, se estiliza con CSS, corre bien en modo kiosco sobre la Raspberry Pi. |
| Base de datos | PostgreSQL | Elegida por el equipo desde la lluvia de ideas inicial. |
| Procedimientos | PL/pgSQL | Requisito de la asignatura: procedimientos almacenados. |
| Control de versiones | Git + GitHub | Repo `Zitrazo`. |

## Hardware

| Parte | Elección | Estado |
|---|---|---|
| Servidor de pruebas | Raspberry Pi 4 | Decidido — el equipo ya tiene conocimientos básicos de configuración. |
| Identificación | Tarjeta (SofoCard) | Decidido — se descartó huella dactilar por ser dato biométrico sensible de menores de edad. |
| Lector de tarjetas | — | **Pendiente:** falta definir tipo (RFID, NFC, banda magnética) y modelo. |
| Pantalla de confirmación | — | **Pendiente:** falta definir si es pantalla táctil, monitor chico, o una reutilizada. |
| Sistema operativo de la Raspberry Pi | — | **Pendiente:** falta definir (ej. Raspberry Pi OS). |
| RAM / almacenamiento de la Raspberry Pi | — | **Pendiente:** falta confirmar el modelo exacto (GB de RAM, tarjeta SD/almacenamiento). |

## Notas

Esta tabla se actualiza a medida que se van tomando las decisiones pendientes — no hace falta esperar al Kick Off o la Acta de Constitución para llenarla, pero esos documentos son donde queda formalizada la lista completa de "Especificaciones técnicas de las herramientas de desarrollo".
