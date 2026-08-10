# Tecnologías — Zitrazo

Lo que ya está decidido, y lo que falta por decidir, para no perder de vista qué se va a usar.

## Arquitectura

La Raspberry Pi corre **Debian Server, sin entorno gráfico** — por lo tanto no puede mostrar JavaFX en su propia pantalla. La arquitectura queda dividida en dos partes:

- **Raspberry Pi (backend, sin pantalla):** PostgreSQL + el servicio en Java que registra y consulta atrasos. Le habla por WiFi/HTTP al ESP32 de la entrada y a la app de administración.
- **ESP32 + lector RFID + mini pantalla (punto de entrada físico):** lee la tarjeta SofoCard, le pregunta al backend de la Pi, y muestra la confirmación en su propia pantalla. Carcasa impresa en 3D.
- **JavaFX (app de administración):** corre en el computador de un inspector, no en la Pi — cubre R.4, R.5, R.6, R.7 (historial, listado del día, alta/baja de tarjetas).

## Software

| Parte | Tecnología | Por qué |
|---|---|---|
| Lenguaje | Java | Requisito obligatorio de la asignatura. |
| Interfaz de administración | JavaFX | Reemplazo de JFrame — sigue siendo Java, separa vista (FXML) de lógica, se estiliza con CSS. Corre en el PC de un inspector, no en la Pi (ver Arquitectura). |
| Base de datos | PostgreSQL | Elegida por el equipo desde la lluvia de ideas inicial. |
| Procedimientos | PL/pgSQL | Requisito de la asignatura: procedimientos almacenados. |
| Firmware del punto de entrada | C/C++ (Arduino framework para ESP32) | Es lo estándar para programar un ESP32; se comunica con el backend en Java por HTTP. |
| Control de versiones | Git + GitHub | Repo `Zitrazo`. |

## Hardware

| Parte | Elección | Estado |
|---|---|---|
| Servidor | Raspberry Pi 4, 4GB RAM, 32GB almacenamiento | Decidido. |
| Sistema operativo de la Raspberry Pi | Debian Server (terminal pura, sin entorno gráfico) | Decidido. |
| Identificación | Tarjeta (SofoCard) | Decidido — se descartó huella dactilar por ser dato biométrico sensible de menores de edad. |
| Lector de tarjetas | ESP32 + módulo RFID RC522 (MFRC522, 13.56MHz, SPI) | Recomendado: barato (unos pocos dólares), muy documentado, tarjetas/llaveros RFID de centavos cada uno. A confirmar. |
| Pantalla de confirmación | Mini pantalla en el ESP32 — OLED (SSD1306, I2C, más barata) o TFT (ILI9341 2.4", SPI, más legible a distancia) | Recomendado TFT por legibilidad, a definir cuál según presupuesto. |
| Carcasa del punto de entrada | Impresa en 3D | El equipo ya tiene impresora disponible. |

## Notas

Esta tabla se actualiza a medida que se van tomando las decisiones pendientes — no hace falta esperar al Kick Off o la Acta de Constitución para llenarla, pero esos documentos son donde queda formalizada la lista completa de "Especificaciones técnicas de las herramientas de desarrollo".
