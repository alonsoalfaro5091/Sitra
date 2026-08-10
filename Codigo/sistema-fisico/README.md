# sistema-fisico/

Componentes del punto de entrada (ESP32 + lector + pantalla) y consideraciones de cada uno. Ver también `../dev/tecnologias.md` para la tabla resumen y `../dev/backlog.md` para las tareas.

## Lista de componentes

| Componente | Función | Interfaz |
|---|---|---|
| ESP32 (placa de desarrollo) | Cerebro del punto de entrada: lee la tarjeta, controla la pantalla, habla por WiFi con el backend de la Pi | — |
| Módulo RFID RC522 | Lee la tarjeta SofoCard | SPI |
| Mini pantalla (OLED o TFT) | Muestra la confirmación del atraso | I2C (OLED) o SPI (TFT) |
| Tarjetas/llaveros RFID 13.56MHz | La tarjeta SofoCard en sí | — |
| Fuente de alimentación 5V (USB) | Energiza el ESP32 | — |
| Carcasa impresa en 3D | Aloja todo, fija el punto donde se pasa la tarjeta | — |

## Consideraciones por componente

- **RC522:** funciona a **3.3V, no a 5V** — conectarlo a 5V lo daña. El ESP32 ya entrega 3.3V en sus pines correspondientes, así que hay que usar esos, no el pin de 5V. Rango de lectura corto (unos 3 cm) — es lo esperado, obliga a un gesto intencional de acercar la tarjeta, lo cual es bueno para evitar lecturas accidentales.
- **ESP32:** tiene WiFi integrado (necesario para hablar con el backend de la Pi) y suficientes pines para RC522 + pantalla al mismo tiempo. Se alimenta por USB a 5V; internamente regula a 3.3V para los periféricos.
- **Elegir OLED (I2C) en vez de TFT (SPI) simplifica el cableado:** si se usa TFT, tanto el RC522 como la pantalla comparten el bus SPI y hay que darle un pin CS (chip select) distinto a cada uno para que no interfieran. La OLED por I2C evita ese problema — dos cables (SDA/SCL) y listo. Si se prioriza legibilidad sobre simplicidad, TFT sigue siendo viable, solo hay que tener cuidado con el cableado.
- **Alimentación:** el punto de entrada necesita una fuente de 5V estable en un punto fijo (cerca de la puerta) — considerar si se alimenta con un cargador USB de pared o se corre un cable desde otro punto de energía ya disponible.
- **Red WiFi:** el ESP32 necesita señal WiFi utilizable en la entrada del liceo — falta confirmar que la cobertura llegue hasta ahí.
- **Carcasa 3D:** debe dejar la antena del RC522 lo más cerca posible de la superficie donde se apoya la tarjeta (el rango de lectura es corto), tener paso para los cables, y ser resistente al uso diario en la entrada de un liceo.

## Pendiente

- Confirmar si la pantalla final es OLED o TFT.
- Confirmar cobertura WiFi en el punto de instalación.
- Diseñar la carcasa 3D una vez elegidos los componentes físicos exactos (medidas).
