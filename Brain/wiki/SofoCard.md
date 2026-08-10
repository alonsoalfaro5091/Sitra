---
tags: [proyecto, en-desarrollo, gestion-de-proyectos, ingenieria-de-requerimientos]
source: "[[Lluvia de ideas Yuyito.md]]"
---

# SofoCard

Proyecto real (2026) en desarrollo por la miniempresa **Pixelazo Corp**, a diferencia de [[ArcaBlend (Proyecto Ejemplo)]] que es un caso cerrado usado solo como ejemplo — esta página se va a ir completando en vivo, documento por documento, a medida que avanza el proyecto real.

**Cliente (ficticio):** Corporación Sofofa, dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL).

## 1. Análisis del Caso

Estructura oficial exigida por [[Proyecto Final de Desarrollo de Software]] (más detallada que la plantilla genérica [[Análisis del Caso]]):

- **Contexto:** Sofofa, dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL), pide un sistema que permita manejar los atrasos de los estudiantes de manera eficaz, ágil y segura, tanto para estudiantes como para profesores.
- **Situación actual:** los inspectores registran cada atraso a mano en un cuaderno (nombre, curso y hora del atraso) y luego traspasan ese registro a Kimche, la aplicación que usa el liceo para todo lo demás — descrita por el propio equipo como mala y desorganizada. Además, al no haber verificación de identidad en el momento del registro, algunos alumnos entregan un nombre que no es el suyo.
- **Problemática:** doble registro manual (cuaderno → Kimche) que es lento, propenso a error de transcripción, y no verifica la identidad real del alumno — lo que permite suplantación al momento de anotar el atraso. No existe un registro digital directo ni confiable en el punto de entrada.
- **Personas u organizaciones involucradas:** Sofofa (dueña del liceo, cliente), Liceo RBL, Inspectoría (quienes registran hoy en el cuaderno), profesores que se encuentren en la entrada (también realizan el ingreso cuando corresponde), estudiantes, apoderados (indirectamente, como interesados en la asistencia de sus hijos).
- **Usuarios afectados:** inspectores y profesores — realizan el registro diario y hoy cargan con el doble trabajo cuaderno + Kimche; estudiantes — son quienes se identifican (o mal-identifican) en cada registro.
- **Necesidad detectada:** un mecanismo de identificación rápido y confiable en el punto de entrada que reemplace el cuaderno y evite que un alumno registre el atraso a nombre de otro.
- **Justificación:** elimina el doble registro (cuaderno + traspaso manual a Kimche), reduce el error humano de transcripción, y resuelve la suplantación de identidad mediante una identificación verificable (tarjeta) — sin depender de Kimche para este proceso específico.
- **Beneficiarios:** Inspectoría y profesores (registro en segundos, sin doble trabajo), Dirección/Sofofa (datos de atrasos confiables y consultables), estudiantes y apoderados (registro correcto, atribuido a la persona real).
- **Oportunidad de solución:** existe tecnología de bajo costo y ya validada (lectores de tarjeta, Raspberry Pi 4 como servidor) para levantar un sistema propio del liceo que resuelva específicamente el registro de atrasos, sin necesidad de esperar cambios en Kimche.

- **Objetivo general:** desarrollar un sistema de control de atrasos eficaz, ágil y seguro.
- **Objetivos específicos** (uno por cada palabra clave del pedido del cliente):
  - **Eficaz:** registrar el atraso correctamente asociado al alumno correcto, sin errores de identificación ni de transcripción.
  - **Ágil:** que el inspector o profesor registre el atraso en segundos, sin el doble trabajo actual de cuaderno + Kimche.
  - **Seguro:** proteger los datos de los estudiantes y evitar la suplantación de identidad (ver decisión sobre huella dactilar vs. tarjeta, abajo).

### Decisión: SofoCard (tarjeta) en vez de huella dactilar

Se descartó el escáner de huella digital. La huella es un **dato biométrico/sensible** (Ley 19.628 y la entrante Ley 21.719 en Chile) y los usuarios son menores de edad — usarla habría metido al proyecto en requisitos de consentimiento y tratamiento de datos fuera del alcance de esta etapa. Se optó por el sistema de tarjetas de identificación, bautizado **SofoCard**: el alumno pasa la tarjeta por el lector, la pantalla al costado confirma "atraso registrado — alumno X".

Esta decisión queda como antecedente para la [[Acta de Constitución]] (sección de riesgos iniciales / premisas y restricciones) cuando se redacte.

### Alcance por fases (Triángulo de Gestión)

Por el [[Triángulo de Gestión]], el proyecto se acota a una sola fase por ahora: terminar el sistema de control de atrasos/asistencia. Las ideas de la [[Lluvia de ideas Yuyito.md|lluvia de ideas]] original — registro de almuerzo JUNAEB y asistencia por clase — quedan como **fases futuras**, no como alcance de esta etapa.

### Pendiente

- **Entidades del sistema:** aún en consideración, no profundizado (candidatas de la lluvia de ideas: Alumno, Representante/Apoderado, Inspector, Profesor, Método de Recolección — falta decidir si Inspector y Profesor son el mismo actor o dos con permisos distintos).
- **Pila técnica** (para la futura Acta de Constitución, no para el Análisis del Caso): Java + JavaFX (reemplazo de JFrame — ver justificación de la elección más abajo), PostgreSQL + PL/pgSQL, servidor de pruebas real en Raspberry Pi 4.

### Nota técnica: JavaFX como reemplazo de JFrame

Se evaluó el reemplazo de JFrame para la interfaz (pantalla junto al lector de tarjeta). Se optó por **JavaFX**: mantiene el requisito de usar Java, separa vista (FXML) de lógica, se estiliza con CSS, y corre bien en modo kiosco/pantalla completa sobre la Raspberry Pi 4 que ya consideran como servidor de pruebas. Alternativa de menor esfuerzo si JavaFX resulta pesado en la Pi: FlatLaf (Look & Feel moderno sobre Swing, sin cambiar de framework).

## Próximos pasos

- Definir entidades del sistema.
- Kick off / [[Acta de Reunión Kick Off]].
- [[Acta de Constitución]] con la pila técnica y fases definidas.
