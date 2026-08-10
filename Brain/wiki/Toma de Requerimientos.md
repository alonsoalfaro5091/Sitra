---
tags: [concepto, ingenieria-de-requerimientos]
source: "[[Material de Apoyo toma de requerimientos.docx]], [[Toma de Requerimientos.pptx]]"
---

# Toma de Requerimientos

Proceso mediante el cual el analista obtiene información sobre las necesidades del cliente para desarrollar un sistema que resuelva un problema específico — parte de la fase "Análisis de Requerimientos" del [[Ciclo de Vida del Proyecto de Software]].

> "Un proyecto no falla al momento de programar; falla al momento de escuchar." — la toma de requerimientos es el proceso crítico para comprender el qué, el cómo, los problemas actuales y las expectativas del cliente antes de diseñar una solución.

Una mala toma de requerimientos deriva en una cadena de consecuencias: **funcionalidades incorrectas → retrasos en el proyecto → aumento de costos → insatisfacción del cliente.**

## Etapas

1. **Preparación** — investigar la empresa, conocer el negocio, revisar documentación existente, definir objetivos de la reunión, preparar preguntas.
2. **Reunión con el cliente** — escuchar más que hablar, tomar notas, solicitar ejemplos, confirmar lo entendido, evitar asumir información.
3. **Análisis** — organizar la información, detectar inconsistencias, identificar procesos, clasificar requerimientos.
4. **Documentación** — plasmar la información en una [[Planilla de Requerimientos|planilla de requerimientos]], [[Historia de Usuario|historias de usuario]], IEEE 830, [[Caso de Uso|casos de uso]].
5. **Validación** — el cliente revisa la documentación para confirmar que refleja correctamente sus necesidades. Si no aprueba, se vuelve a ajustar el análisis.

## Matriz de técnicas de levantamiento

| Eje | Técnicas |
|---|---|
| **Interacción directa** (profundidad) | Entrevistas (individual/grupal), talleres de trabajo (workshops) |
| **Escala** (volumen) | Encuestas (preguntas abiertas/cerradas), cuestionarios |
| **Observación y datos** (contexto) | Observación (participativa/no participativa), revisión de documentos |
| **Modelado y agilidad** (tangibilización) | Lluvia de ideas (brainstorming), prototipos, historias de usuario, casos de uso |

### Comparación por técnica

| Técnica | Cuándo usarla | Ventajas | Desventajas |
|---|---|---|---|
| Entrevistas | Pocos usuarios | Información detallada, aclara dudas de inmediato | Consume tiempo, requiere preparación |
| Observación | Analizar procesos | Muestra la realidad, detecta lo que el usuario olvida mencionar | Requiere presencia, puede alterar el comportamiento observado |
| Encuestas / Cuestionarios | Muchos usuarios | Rápidas, económicas, datos estadísticos | Menor profundidad, respuestas ambiguas |
| Talleres (workshops) | Definir acuerdos | Participación conjunta, acuerdos rápidos | Requiere coordinación, riesgo de opiniones contradictorias |
| Lluvia de ideas (brainstorming) | Generar ideas sin críticas iniciales | Fomenta la creatividad | — |
| Revisión documental | Existen documentos previos | Cero fricción con el usuario, aprovecha información previa | Riesgo de información obsoleta |
| Prototipos | Validar interfaz | Reduce errores, el cliente visualiza el sistema antes del desarrollo | Requiere esfuerzo inicial |
| Historias de Usuario | Proyectos ágiles | Simples, centradas en el usuario | Menos detalle técnico |
| Casos de Uso | Diseño funcional | Define claramente las interacciones | Requiere mayor documentación |

**Estrategia táctica:** usa entrevistas para entender el *por qué*; usa encuestas para medir el *cuántos*.

**Workshops vs. Brainstorming** — ambos giran en torno a un núcleo colaborativo de cliente, usuario, analista y jefatura: los workshops buscan *convergencia* (acuerdos rápidos, riesgo de opiniones contradictorias), el brainstorming busca *divergencia* (cero críticas iniciales, todas las ideas son válidas, luego se filtran).

## Preguntas recomendadas en una entrevista

- **Contexto del negocio:** ¿cuál es el servicio principal? ¿qué procesos realizan diariamente?
- **Estructura de usuarios:** ¿quién y cuántos utilizarán el sistema? ¿qué permisos tendrá cada perfil?
- **Diagnóstico del problema:** ¿qué tareas toman más tiempo hoy? ¿qué errores ocurren con mayor frecuencia?
- **Arquitectura del futuro:** ¿qué datos son obligatorios registrar? ¿qué funcionalidades son absolutamente indispensables?

## Buenas prácticas vs. errores frecuentes

| Buenas prácticas | Errores frecuentes |
|---|---|
| Escuchar más sin interrumpir | Asumir información sin confirmarla |
| Solicitar ejemplos reales | Usar jerga técnica innecesaria |
| Documentar inmediatamente después de la reunión | Ignorar procesos actuales |
| Validar la información antes de cerrar | Formular preguntas ambiguas / olvidar stakeholders ocultos |

## Ejemplo aplicado: clínica de horas médicas

Una clínica administra las horas médicas mediante planillas de cálculo — genera doble reserva, pérdida de información, demora en la atención y errores en los registros.

- **Requerimientos funcionales:** registrar pacientes y médicos, agendar/cancelar horas médicas, emitir comprobantes, consultar disponibilidad de agendas.
- **Requerimientos no funcionales:** acceso seguro (usuario/contraseña), tiempo de respuesta < 2 segundos, disponibilidad de infraestructura 99,9%, interfaz responsive (PC y móvil).
- Requerimiento raíz "Agendar Horas" en dos formatos:
  - *Ágil:* "Como paciente, quiero agendar una hora médica online, para asegurar mi atención sin llamar por teléfono."
  - *Estructurado (caso de uso):* Actor `Paciente` → `Agendar Hora` `<<include>>` `Verificar Disponibilidad`.

> "La toma de requerimientos no es solo documentar lo que el cliente pide; es descubrir lo que el cliente realmente necesita."

## Conceptos relacionados

- [[Requerimiento]] — qué es, funcional vs. no funcional.
- [[Historia de Usuario]] — formato ágil de requerimiento.
- [[Caso de Uso]] — formato estructurado de requerimiento.
- [[Mockup]] — técnica de prototipado para tangibilizar la solución.
