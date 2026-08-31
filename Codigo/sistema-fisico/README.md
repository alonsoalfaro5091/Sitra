# Sistema físico de Sitra

El punto de entrada usa una placa ESP32 con pantalla táctil integrada como cerebro, un lector RFID externo y las tarjetas SofoCard. Ver también `../dev/tecnologias.md` para la arquitectura completa y `../dev/backlog.md` para las tareas.

## Lista de componentes

| Componente | Función | Interfaz |
|---|---|---|
| ESP32-2432S028 | Cerebro del terminal: lee el RC522, controla la interfaz táctil y se comunica por WiFi con la Raspberry Pi | SPI, WiFi y GPIO por confirmar |
| Pantalla TFT táctil integrada | Muestra el estado del sistema, el nombre del alumno y la confirmación del atraso | Integrada en la placa, 2,8 pulgadas y 320 × 240 px |
| Módulo RFID RC522 | Lee y escribe las tarjetas SofoCard de 13,56 MHz | SPI, 3,3 V |
| Tarjetas RFID SofoCard | Identifican al alumno mediante ISO/IEC 14443A | 13,56 MHz, 1 KB EEPROM |
| Fuente de alimentación USB-C de 5 V | Energiza la placa ESP32 y sus periféricos | USB-C |
| Carcasa impresa en 3D | Aloja todo, fija el punto donde se pasa la tarjeta | — |

## Consideraciones por componente

- **ESP32-2432S028:** usa un ESP32-D0WDQ6 clásico de doble núcleo, hasta 240 MHz, con 520 KB SRAM, 4 MB Flash, WiFi y Bluetooth. La pantalla y el panel táctil ya vienen integrados.
- **RC522:** funciona a **3,3 V, no a 5 V**. La ficha indica un consumo normal de 13 a 26 mA y hasta 30 mA máximo. Su distancia de lectura puede llegar a 60 mm según la tarjeta y la antena.
- **SofoCard:** las tarjetas seleccionadas usan 13,56 MHz, ISO/IEC 14443A y tienen 1 KB de memoria EEPROM. Su formato es el de una tarjeta PVC de identificación.
- **Cableado:** la ficha de la placa no indica qué GPIO ocupa la pantalla o el panel táctil. No se debe fijar un pinout del RC522 hasta revisar la placa física y confirmar qué bus SPI y pines están disponibles.
- **Alimentación:** la placa recibe 5 V por USB-C, pero el RC522 debe recibir 3,3 V desde una salida adecuada de la placa.
- **Red WiFi:** el ESP32 necesita señal WiFi utilizable en la entrada del liceo — falta confirmar que la cobertura llegue hasta ahí.
- **Carcasa 3D:** debe dejar visible y accesible la pantalla táctil, acercar la antena del RC522 a la superficie de lectura, permitir el acceso al USB-C y resistir el uso diario.

## Flujo esperado

1. El alumno acerca su SofoCard al RC522.
2. El ESP32 lee el identificador y lo envía por WiFi al backend de la Raspberry Pi.
3. El backend valida la tarjeta y registra el atraso en PostgreSQL.
4. La pantalla táctil muestra la confirmación o el error correspondiente.

## Pendiente

- Confirmar el pinout disponible de la placa ESP32-2432S028 antes de conectar el RC522.
- Confirmar cobertura WiFi en el punto de instalación.
- Definir qué funciones, además de la confirmación, usarán la entrada táctil.
- Diseñar la carcasa 3D después de medir los componentes físicos.
