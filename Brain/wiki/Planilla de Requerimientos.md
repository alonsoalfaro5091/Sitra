---
tags: [ejemplo, ingenieria-de-requerimientos]
source: "[[4-EJEMPLO-Planilla de Requerimientos.xlsx]]"
---

# Planilla de Requerimientos

Ejemplo de planilla para documentar [[Requerimiento|requerimientos]] de forma tabular — el resultado de la fase "Documentación" de la [[Toma de Requerimientos]].

## Columnas

| Columna | Instrucciones |
|---|---|
| R-N° | Código de identificación de mayor nivel (001, 002, 003...) |
| Nombre del Requerimiento | Descripción corta del requerimiento |
| Tipo Requerimiento | Funcional o No Funcional (ver [[Requerimiento]]) |
| Actores Relacionados | Actor que como usuario se relaciona al requerimiento (ver [[Caso de Uso]]) |
| Descripción | Qué comprende el requisito, según su tipo (negocio, interesados, funcional, no funcional, proyecto, producto) |
| Estado | Solicitado, aprobado, asignado, completado, cancelado, diferido, aceptado, entre otros |
| Criterio de Aceptación | Lista de condiciones específicas que deben cumplirse para dar por satisfecho el requisito |

## Caso de ejemplo: sistema de hostal

Actores: **Administrador**, **Recepcionista**, **Cliente VIP**.

| R-N° | Requerimiento | Actor | Criterio de aceptación (resumen) |
|---|---|---|---|
| R.1 | Autentificar usuario al iniciar sesión | Todos los actores | Autenticación por RUT y clave alfanumérica |
| R.2 | Crear cuentas de usuario | Administrador | El administrador crea cuentas para recepcionistas y clientes VIP según sus atributos |
| R.3 | Consultar habitaciones disponibles | Cliente VIP | — |
| R.4 | Registrar ingreso y salida del pasajero | Recepcionista | — |
| R.5 | Reservar habitación (vía web) | Cliente VIP | — |
| R.6 | Liberar habitación al registrar la salida | Recepcionista o Administrador | El sistema libera automáticamente la habitación ocupada |
| R.7 | Calcular monto de pago al registrar la salida | Recepcionista o Administrador | El sistema calcula el monto automáticamente |

Este ejemplo es funcionalmente equivalente al caso de la clínica de horas médicas usado en [[Toma de Requerimientos]] y [[Mockup]] — mismo patrón de actores (rol administrativo / operativo / cliente) aplicado a un dominio distinto (hostal en vez de clínica).

## Otro ejemplo: proyecto ArcaBlend

Ver [[ArcaBlend (Proyecto Ejemplo)]] — planilla real de un proyecto de arcade educativo, con las columnas parcialmente completadas (a diferencia de este ejemplo del hostal), útil como recordatorio de que las plantillas rara vez se llenan al 100% en la práctica.
