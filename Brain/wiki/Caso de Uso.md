---
tags: [concepto, ingenieria-de-requerimientos]
source: "[[Material de Apoyo Caso de Uso.docx]], [[Caso de Uso.pptx]]"
---

# Caso de Uso

Técnica de modelamiento (notación UML) para describir cómo un **actor** interactúa con un **sistema** para lograr un objetivo específico, representando las funcionalidades desde el punto de vista del usuario, sin entrar en detalles técnicos de programación. Formato estructurado de [[Requerimiento]] — ver comparación con [[Historia de Usuario]].

> Los casos de uso son el puente definitivo en la Ingeniería de Requerimientos. Al mapear actores, flujos y excepciones, transforman la ambigüedad humana en una arquitectura sólida lista para el desarrollo.

## Por qué mapear casos de uso

- **Comunicación fluida** entre usuarios (lenguaje de negocio) y desarrolladores (lenguaje técnico).
- **Descubrimiento y detección** — identifica funcionalidades exactas, detecta requerimientos faltantes tempranamente.
- **Enfoque en el cliente** — comprende sus necesidades y objetivos reales.
- **Base arquitectónica** — cimiento para el diseño, desarrollo y pruebas del sistema final.

## Los 7 elementos

Nombre (identifica la funcionalidad) · Actor (quién interactúa) · **Precondición** (antes) → **Objetivo** → **Flujo principal** (pasos normales, con **flujos alternativos** como variaciones/excepciones) → **Postcondición** (después, estado final del sistema).

## ¿Qué es un actor?

Cualquier persona, organización o sistema externo que interactúa con el sistema — no necesariamente humano.

- **Actor primario** ("el iniciador"): inicia el caso de uso para lograr un objetivo directo. Ej: cliente, cajero, administrador.
- **Actor secundario** ("el soporte"): apoya el funcionamiento del sistema en segundo plano. Ej: banco, servicio de correo, sistema de autenticación.

## Notación UML

| Símbolo | Significado |
|---|---|
| Muñeco (actor) | Representa al usuario o sistema externo |
| Óvalo | Caso de uso — la funcionalidad u objetivo específico |
| Línea (asociación) | Une a un actor con un caso de uso — la interacción |
| Rectángulo | Límite del sistema — todo lo que está dentro es responsabilidad del software a desarrollar; los actores quedan fuera |

*Ejemplo — Sistema Biblioteca: actor Cliente asociado a los casos de uso Buscar Libro, Solicitar Libro, Devolver Libro, todos dentro del límite "Sistema Biblioteca".*

## Relaciones entre casos de uso

- **Asociación** — une un actor con un caso de uso. Ej: Cliente — Registrar Compra.
- **Include («include»)** — ejecución obligatoria; un caso de uso siempre necesita ejecutar otro. Ej: Registrar Venta «include» Validar Cliente.
- **Extend («extend»)** — comportamiento opcional, solo ocurre bajo ciertas condiciones. Ej: Registrar Compra «extend» Aplicar Descuento (solo si hay descuentos).
- **Generalización** — herencia; un actor hereda permisos y características de otro actor superior. Ej: Empleado → Cajero, Supervisor.

## Plantilla de especificación

| Campo | Ejemplo (CU-01: Registrar Cliente) |
|---|---|
| Código | CU-01 |
| Nombre | Registrar Cliente |
| Actor | Administrador |
| Objetivo | Registrar un nuevo cliente |
| Precondición | El usuario inició sesión |
| Postcondición | Cliente registrado correctamente |
| Flujo principal | Selecciona "Nuevo Cliente" → ingresa datos → presiona Guardar → sistema valida → sistema almacena → sistema confirma |
| Flujos alternativos | A1: el RUT ya existe → sistema informa que el cliente ya está registrado. A2: campos vacíos → sistema solicita completar información |

### Ejemplo completo: Registrar Venta

Actor: Vendedor · Precondición: vendedor inició sesión.
**Flujo principal:** selecciona nueva venta → busca cliente → agrega productos → sistema calcula total → selecciona forma de pago → sistema registra venta → actualiza inventario → emite boleta.
**Flujos alternativos:** A1 cliente no existe (permite registrar uno nuevo) · A2 producto sin stock (informa falta de existencias) · A3 pago rechazado (solicita otro medio).
**Postcondición:** la venta queda registrada y el inventario actualizado.

## Buenas prácticas vs. errores frecuentes

| Buenas prácticas | Errores frecuentes (zonas de riesgo) |
|---|---|
| Verbos en infinitivo (Registrar, Consultar, Modificar, Eliminar) | Contaminación técnica — mezclar detalles de programación (tablas, código) con el comportamiento del usuario |
| Cronología estricta en el flujo principal | Confusión de roles — confundir actores con cargos internos sin analizar su rol real |
| Límites claros (precondiciones y postcondiciones sin ambigüedad) | Omitir alternativas — diseñar solo el "camino feliz", la mayor causa de bugs |
| Cobertura de excepciones — documentar todos los flujos alternativos | Ambigüedad de alcance — casos de uso demasiado amplios o sin condiciones claras |
| Validación continua con el cliente final | Redundancia — duplicar funcionalidades idénticas en distintos casos de uso |

## Conceptos relacionados

- [[Requerimiento]] · [[Historia de Usuario]] · [[Toma de Requerimientos]]
- [[Mockup]] — el equivalente visual/estático de un caso de uso.
