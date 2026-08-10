---
tags: [proyecto, meta, uso-de-ia]
source: ""
---

# Uso de IA en el Proyecto

Registro de cómo el equipo de [[Zitrazo]] usó IA (Claude, como asistente de Claude Code) durante el desarrollo del proyecto. Se guarda como respaldo para el criterio de rúbrica "Uso responsable de IA" (Etapa 2) y para la defensa individual, donde cualquier integrante puede tener que explicar una decisión del proyecto.

## Para qué se usó

- **Mantener esta wiki:** organizar el material de la asignatura (plantillas, ejemplos, el enunciado del proyecto) en páginas conectadas entre sí, para no perder el hilo entre documentos.
- **Redactar un primer borrador** de cada documento (Análisis del Caso, Planilla de Requerimientos) a partir de la información y las decisiones que el equipo entregó en la conversación.
- **Rellenar los archivos reales** (.docx/.xlsx en `Documentacion/`) con ese contenido, manteniendo el formato de las plantillas oficiales.
- **Una recomendación técnica puntual:** usar JavaFX en vez de JFrame para la interfaz, justificada por el equipo (sigue siendo Java, moderno, corre bien en la Raspberry Pi 4 que van a usar de servidor).
- **Tareas de orden:** renombrar archivos, organizar el repositorio git, hacer commits y push.

## Qué NO hizo la IA (sigue siendo del equipo)

- Las decisiones de fondo las tomó el equipo: usar tarjeta (SofoCard) en vez de huella dactilar, las fases del proyecto, el alcance.
- Toda la información real la entregó el equipo — cómo se registran los atrasos hoy (cuaderno + Kimche), quién hace el registro, quiénes son los integrantes. La IA no inventó contexto: cuando faltó un dato, se preguntó antes de escribir.
- El equipo revisó y aprobó cada documento antes de darlo por bueno. Por ejemplo, el Análisis del Caso se reescribió a un lenguaje más simple después de que el equipo pidiera bajar el nivel del primer borrador.

## Un error real, como ejemplo

En un momento la IA asumió que el proyecto se llamaba "SofoCard" (confundiéndolo con el nombre de la tarjeta). El equipo lo corrigió: el proyecto es **Zitrazo**, SofoCard es solo un componente. Se corrigió en toda la wiki y en los archivos reales. Queda como ejemplo de por qué el equipo tiene que revisar todo lo que la IA entrega, no darlo por hecho — que es justo lo que pide el criterio de la rúbrica.
