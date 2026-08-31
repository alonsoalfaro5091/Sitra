# Tecnologías — Sitra

Decisiones técnicas vigentes del proyecto. Los datos de los componentes físicos se tomaron de las fichas de los productos seleccionados por el equipo.

## Arquitectura

La arquitectura queda dividida en tres partes:

- **Raspberry Pi 4 (servidor, sin pantalla):** corre Debian Server, PostgreSQL, procedimientos PL/pgSQL y el servicio backend en Java. Recibe por WiFi/HTTP los registros enviados desde el punto de entrada.
- **ESP32-2432S028 + RC522 (punto de entrada físico):** la placa ESP32 es el cerebro del terminal. Lee la tarjeta RFID SofoCard mediante el RC522, muestra la información en su pantalla táctil integrada y se comunica con la Raspberry Pi.
- **Aplicación web de administración:** se desarrolla en `website/`, en la raíz del repositorio, y se usa desde el computador del inspector para consultar atrasos y administrar alumnos y tarjetas. La tecnología web exacta todavía debe definirse.

## Software

| Parte | Tecnología | Estado |
|---|---|---|
| Backend | Java | Decidido; corre en la Raspberry Pi. |
| Aplicación de administración | Aplicación web | Decidido; framework y herramientas pendientes. |
| Base de datos | PostgreSQL | Decidido. |
| Procedimientos | PL/pgSQL | Decidido; requisito de la asignatura. |
| Firmware del terminal | C/C++ con Arduino framework para ESP32 | Decidido; se comunica con el backend por WiFi/HTTP. |
| Control de versiones | Git + GitHub | Proyecto Sitra; la aplicación web vive en la carpeta raíz `website/`. |

## Hardware

| Parte | Elección | Estado |
|---|---|---|
| Servidor | Raspberry Pi 4, 4 GB RAM y 32 GB de almacenamiento | Decidido. |
| Sistema operativo | Debian Server sin entorno gráfico | Decidido. |
| Cerebro del terminal | ESP32-2432S028 con ESP32-D0WDQ6 de doble núcleo, hasta 240 MHz | Decidido. |
| Pantalla | TFT táctil integrada de 2,8 pulgadas, 320 × 240 px | Decidido. |
| Memoria del ESP32 | 520 KB SRAM y 32 Mbit (4 MB) Flash | Confirmado por la ficha del producto. |
| Conectividad | WiFi, Bluetooth 4.2 y BLE | Integrada en la placa. |
| Lector RFID | Módulo RC522 de 13,56 MHz, interfaz SPI y alimentación de 3,3 V | Decidido. |
| Identificación | Tarjeta SofoCard RFID de 13,56 MHz, ISO/IEC 14443A y 1 KB EEPROM | Decidido. |
| Alimentación del terminal | 5 V por USB tipo C | Confirmado para la placa ESP32. |
| Carcasa | Impresa en 3D | El equipo tiene impresora disponible. |

## Compatibilidad y pendientes

- Las tarjetas SofoCard y el RC522 trabajan a 13,56 MHz y usan ISO 14443A, por lo que son compatibles.
- El RC522 debe alimentarse con 3,3 V; conectarlo directamente a 5 V puede dañarlo.
- La ficha de la placa no publica el pinout utilizado por la pantalla y el panel táctil. Antes de cablear el RC522 hay que identificar GPIO y bus SPI disponibles en la placa física.
- Falta confirmar la cobertura WiFi en el punto de entrada.
- La carcasa se diseñará después de medir la placa, el lector y sus conectores.
- El driver USB-Serial de la placa es CH340; puede requerir instalación en el computador usado para programarla.

## Fuentes de los componentes

- [Placa ESP32-2432S028 con pantalla táctil de 2,8 pulgadas](https://afel.cl/products/placa-de-desarrollo-esp32-con-pantalla-tactil-de-2-8-pulgadas)
- [Tarjetas RFID de 13,56 MHz ISO 14443A](https://afel.cl/products/pack-5-tarjetas-de-acceso-rfid-13-56-mhz)
- [Lector RFID RC522 de 13,56 MHz](https://afel.cl/products/lector-rfid-13-56mhz)
