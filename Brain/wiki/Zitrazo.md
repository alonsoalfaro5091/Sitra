---
tags: [proyecto, en-desarrollo, gestion-de-proyectos, ingenieria-de-requerimientos]
source: "[[Lluvia de ideas Yuyito.md]]"
---

# Zitrazo

Proyecto real (2026) en desarrollo por la miniempresa **Pixelazo Corp**, a diferencia de [[ArcaBlend (Proyecto Ejemplo)]] que es un caso cerrado usado solo como ejemplo — esta página se va a ir completando en vivo, documento por documento, a medida que avanza el proyecto real.

**SofoCard** es el nombre de la tarjeta de identificación que usa el sistema (ver decisión más abajo) — no es el nombre del proyecto, es solo uno de sus componentes.

**Cliente (ficticio):** Corporación Sofofa, dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL).

**Equipo (Pixelazo Corp):** Alonso y Esteban (2 integrantes).

## 1. Análisis del Caso

Texto igual al del documento real (`Documentacion/1 Zitrazo Análisis del Caso.docx`), en lenguaje simple de 4° medio — sin tecnicismos innecesarios:

- **Contexto:** Sofofa, la empresa dueña del Liceo Bicentenario de Electrotecnia Ramón Barros Luco (RBL), le pidió a Pixelazo Corp un sistema que permita registrar los atrasos de los estudiantes de forma eficaz, ágil y segura, tanto para los alumnos como para los profesores. Hoy en día, los inspectores anotan cada atraso a mano en un cuaderno (nombre, curso y hora) y después lo pasan a Kimche, que es la aplicación que usa el liceo para todo lo demás, pero que es desordenada y poco práctica. El registro lo hace el inspector o el profesor que esté en la entrada en ese momento.
- **Problema:** hoy el registro se hace dos veces (cuaderno y después Kimche), lo que toma tiempo y puede generar errores al escribir. Además, como nadie verifica quién es realmente el alumno, algunos estudiantes dan un nombre que no es el suyo. Esto afecta a los inspectores y profesores, que pierden tiempo con el doble registro, y a los alumnos, a los que a veces les anotan atrasos que no son de ellos.
- **Objetivo general:** crear un sistema de control de atrasos que sea eficaz, ágil y seguro para el Liceo RBL, y que reemplace el registro a mano.
- **Objetivos específicos:**
  - Registrar el atraso del alumno correcto, sin errores de identificación ni de escritura.
  - Que el inspector o profesor pueda registrar el atraso en segundos, sin tener que anotarlo dos veces.
  - Cuidar los datos de los estudiantes y evitar que alguien se haga pasar por otro alumno.
- **Propósito y justificación:** el proyecto elimina el doble registro y baja el riesgo de errores al escribir, además de resolver el problema de que un alumno se haga pasar por otro, usando una tarjeta (SofoCard) en vez de confiar solo en el nombre que dice el alumno. Se benefician los inspectores y profesores (registro en segundos, sin depender de Kimche), el liceo y Sofofa (datos de atrasos confiables) y los alumnos y apoderados (sin atrasos mal anotados). Es viable ahora porque existe tecnología barata y probada: lectores de tarjeta y una Raspberry Pi 4 como servidor.

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

## 4. Planilla de Requerimientos

Adelantada antes del Kick Off y la Acta de Constitución, a pedido del usuario — actores en genérico ("Inspector o Profesor") hasta definir entidades en firme.

| R-N° | Requerimiento | Tipo | Actores | Estado |
|---|---|---|---|---|
| R.1 | Registrar atraso con tarjeta SofoCard | Funcional | Inspector o Profesor | Solicitado |
| R.2 | Confirmar el registro en pantalla | Funcional | Inspector, Profesor y Alumno | Solicitado |
| R.3 | Detectar tarjeta no reconocida | Funcional | Inspector o Profesor | Solicitado |
| R.4 | Consultar atrasos por alumno | Funcional | Inspector | Solicitado |
| R.5 | Consultar listado de atrasos del día | Funcional | Inspector | Solicitado |
| R.6 | Registrar alumno y su tarjeta SofoCard | Funcional | Administrador | Solicitado |
| R.7 | Dar de baja una tarjeta extraviada | Funcional | Administrador | Solicitado |
| R.8 | Registro rápido en la entrada | No Funcional | Inspector o Profesor | Solicitado |
| R.9 | Protección de datos del alumno | No Funcional | — | Solicitado |
| R.10 | Disponibilidad en el horario de entrada | No Funcional | — | Solicitado |

Ver descripciones completas en el documento real `Documentacion/4 Zitrazo Planilla de Requerimientos.xlsx`. R.9 formaliza como requerimiento la decisión ya tomada de no usar huella dactilar.

### Pendiente de esta sección

Revisar "Actores" cuando se definan las entidades del sistema (Inspector vs. Profesor, rol del Apoderado) — probablemente cambie de genérico a específico.

## Convención de lenguaje

Todos los documentos de este proyecto (real y en la wiki) se redactan en lenguaje simple de 4° medio: oraciones directas, sin tecnicismos de gestión de proyectos ni vocabulario rebuscado. Aplica también a los próximos documentos (Kick Off, Acta de Constitución, etc.).

## Próximos pasos

- Definir entidades del sistema (y afinar "Actores" de la planilla de requerimientos).
- Kick off / [[Acta de Reunión Kick Off]] — falta fecha, y rol/responsabilidad de Alonso y Esteban.
- [[Acta de Constitución]] con la pila técnica y fases definidas.
