---
tags: [proyecto, en-desarrollo, gestion-de-proyectos, ingenieria-de-requerimientos]
source: "[[Lluvia de ideas Yuyito.md]]"
aliases: [Zitrazo]
---

# Sitra

Proyecto real (2026) en desarrollo por la miniempresa **Pixelazo Corp**, a diferencia de [[ArcaBlend (Proyecto Ejemplo)]] que es un caso cerrado usado solo como ejemplo — esta página se va a ir completando en vivo, documento por documento, a medida que avanza el proyecto real.

**SofoCard** es el nombre de la tarjeta RFID de identificación que usa el sistema. El proyecto se llama **Sitra**; SofoCard es uno de sus componentes.

**Cliente (ficticio):** Corporación Sofofa, dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL).

**Equipo (Pixelazo Corp):** Alonso y Esteban (2 integrantes).

## 1. Análisis del Caso

Texto base del documento real (`Documentacion/1 Sitra Análisis del Caso.docx`), en lenguaje simple de 4° medio — sin tecnicismos innecesarios:

- **Contexto:** Sofofa, la empresa dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL), le pidió a Pixelazo Corp un sistema que permita registrar los atrasos de los estudiantes de forma eficaz, ágil y segura, tanto para los alumnos como para los profesores. Hoy en día, los inspectores anotan cada atraso a mano en un cuaderno (nombre, curso y hora) y después lo pasan a Kimche, que es la aplicación que usa el liceo para todo lo demás, pero que es desordenada y poco práctica. El registro lo hace el inspector o el profesor que esté en la entrada en ese momento.
- **Problema:** hoy el registro se hace dos veces (cuaderno y después Kimche), lo que toma tiempo y puede generar errores al escribir. Además, como nadie verifica quién es realmente el alumno, algunos estudiantes dan un nombre que no es el suyo. Esto afecta a los inspectores y profesores, que pierden tiempo con el doble registro, y a los alumnos, a los que a veces les anotan atrasos que no son de ellos.
- **Objetivo general:** crear un sistema de control de atrasos que sea eficaz, ágil y seguro para el Liceo RBL, y que reemplace el registro a mano.
- **Objetivos específicos:**
  - Registrar el atraso del alumno correcto, sin errores de identificación ni de escritura.
  - Que el inspector o profesor pueda registrar el atraso en segundos, sin tener que anotarlo dos veces.
  - Cuidar los datos de los estudiantes y evitar que alguien se haga pasar por otro alumno.
- **Propósito y justificación:** el proyecto elimina el doble registro y baja el riesgo de errores al escribir, además de resolver el problema de que un alumno se haga pasar por otro, usando una tarjeta RFID SofoCard en vez de confiar solo en el nombre que dice el alumno. Se benefician los inspectores y profesores, el liceo, Sofofa, los alumnos y sus apoderados. Es viable con una Raspberry Pi 4 como servidor y un terminal ESP32 con pantalla táctil y lector RFID.

### Decisión: SofoCard (tarjeta) en vez de huella dactilar

Se descartó el escáner de huella digital. La huella es un **dato biométrico/sensible** y los usuarios son menores de edad, por lo que su tratamiento queda fuera del alcance de esta etapa. Se optó por tarjetas RFID de identificación llamadas **SofoCard**: funcionan a 13,56 MHz con ISO/IEC 14443A y son leídas por un RC522. La pantalla táctil integrada en el ESP32 confirma el resultado.

Esta decisión queda como antecedente para la [[Acta de Constitución]] (sección de riesgos iniciales / premisas y restricciones) cuando se redacte.

### Alcance por fases (Triángulo de Gestión)

Por el [[Triángulo de Gestión]], el proyecto se acota a una sola fase por ahora: terminar el sistema de control de atrasos/asistencia. Las ideas de la [[Lluvia de ideas Yuyito.md|lluvia de ideas]] original — registro de almuerzo JUNAEB y asistencia por clase — quedan como **fases futuras**, no como alcance de esta etapa.

### Pendiente

- **Entidades del sistema:** aún en consideración, no profundizado (candidatas de la lluvia de ideas: Alumno, Representante/Apoderado, Inspector, Profesor, Método de Recolección — falta decidir si Inspector y Profesor son el mismo actor o dos con permisos distintos).
- **Pila web pendiente:** la aplicación de administración será web, pero todavía falta elegir framework, estructura y despliegue.
- **Integración física pendiente:** falta confirmar el pinout disponible de la placa ESP32-2432S028 para conectar el RC522 sin interferir con la pantalla ni el panel táctil.

### Arquitectura técnica vigente

- **Raspberry Pi 4:** servidor Debian sin interfaz gráfica, con PostgreSQL, PL/pgSQL y backend Java.
- **ESP32-2432S028:** cerebro del terminal de entrada, con pantalla táctil TFT integrada de 2,8 pulgadas y comunicación WiFi con la Raspberry Pi.
- **RC522 + SofoCard:** lector SPI de 13,56 MHz y tarjetas ISO/IEC 14443A.
- **Aplicación web:** interfaz de administración usada desde el computador del inspector; su código vive en `website/`, en la raíz del repositorio.

## 4. Planilla de Requerimientos

Adelantada antes del Kick Off y la Acta de Constitución, a pedido del usuario — actores en genérico ("Inspector o Profesor") hasta definir entidades en firme.

| R-N° | Requerimiento | Tipo | Actores | Estado |
|---|---|---|---|---|
| R.1 | Registrar atraso con tarjeta RFID SofoCard | Funcional | Inspector o Profesor | Solicitado |
| R.2 | Confirmar el registro en la pantalla táctil | Funcional | Inspector, Profesor y Alumno | Solicitado |
| R.3 | Detectar tarjeta no reconocida | Funcional | Inspector o Profesor | Solicitado |
| R.4 | Consultar atrasos por alumno | Funcional | Inspector | Solicitado |
| R.5 | Consultar listado de atrasos del día | Funcional | Inspector | Solicitado |
| R.6 | Registrar alumno y su tarjeta RFID SofoCard | Funcional | Administrador | Solicitado |
| R.7 | Dar de baja una tarjeta extraviada | Funcional | Administrador | Solicitado |
| R.8 | Registro rápido en la entrada | No Funcional | Inspector o Profesor | Solicitado |
| R.9 | Protección de datos del alumno | No Funcional | — | Solicitado |
| R.10 | Disponibilidad en el horario de entrada | No Funcional | — | Solicitado |

Ver descripciones completas en el documento real `Documentacion/4 Sitra Planilla de Requerimientos.xlsx`. R.9 formaliza como requerimiento la decisión de no usar huella dactilar.

### Pendiente de esta sección

Revisar "Actores" cuando se definan las entidades del sistema (Inspector vs. Profesor, rol del Apoderado) — probablemente cambie de genérico a específico.

## Convención de lenguaje

Todos los documentos de este proyecto (real y en la wiki) se redactan en lenguaje simple de 4° medio: oraciones directas, sin tecnicismos de gestión de proyectos ni vocabulario rebuscado. Aplica también a los próximos documentos (Kick Off, Acta de Constitución, etc.).

## Próximos pasos

- Definir entidades del sistema (y afinar "Actores" de la planilla de requerimientos).
- Kick off / [[Acta de Reunión Kick Off]] — falta fecha, y rol/responsabilidad de Alonso y Esteban.
- [[Acta de Constitución]] con la pila técnica y fases definidas.

## Desarrollo en código

Ver [[Desarrollo de Sitra]] — carpeta `Codigo/` (fuera de la wiki), con la arquitectura, la app web, la metodología y el backlog de R.1-R.10. La implementación debe avanzar junto con los casos de uso, la especificación funcional y el Modelo Relacional Normalizado.
