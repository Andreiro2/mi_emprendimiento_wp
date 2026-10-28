---
title: "Guía: cómo investigar plugins para tu sitio"
type: exercise
estimated_time: 20
---

# Guía: cómo investigar plugins para tu sitio

**Para leer antes de la clase (10 minutos) y usar durante la investigación.** No necesitas instalar nada: se trata de decidir con datos. Necesitas **al menos 5 plugins**: **SEO** y **contacto** son obligatorios y los otros 3 los eliges según lo que necesita tu sitio (cada uno vale 2 pts). Conviene llegar al martes 3 con algunos ya investigados; en clase se completa el resto entre todos, con ayudante.

## Qué vas a lograr

Una tabla donde cada **funcionalidad** de tu sitio tiene un **plugin** (o una razón para no usar uno), con datos que se pueden comprobar. Esa tabla es la sección 1 de tu `decisiones.md` (Sumativa 2).

## Paso 1. Parte de tus funcionalidades

Abre `docs/03-funcionalidades.md` de tu repo `mi-emprendimiento`. Cada funcionalidad es una fila de tu tabla. Ejemplos: formulario de contacto, buscador, galería de fotos, reservas, suscripción a newsletter, redes sociales, mapa, preguntas frecuentes, SEO.

Antes de buscar un plugin, pregúntate: **¿WordPress ya lo hace solo?** El buscador, las categorías, los comentarios y los menús vienen incluidos. No todo necesita un plugin.

## Paso 2. Busca el plugin en el sitio oficial

1. Entra a <https://wordpress.org/plugins/> y busca la funcionalidad en inglés o en español (por ejemplo, "contact form", "gallery").
2. Abre la **ficha** de los 2 o 3 plugins que parezcan servir.
3. Compáralos con los datos del paso 3.

También puedes buscar dentro del panel, en **Plugins > Añadir nuevo**, pero la ficha del sitio oficial muestra los mismos datos con más calma.

Cuidado con la IA y los buscadores: a veces **inventan plugins** o dan datos viejos. Todo dato que pongas en tu tabla debe estar confirmado en la ficha.

## Paso 3. Qué datos sacar de la ficha

| Dato | Dónde está en la ficha | Para qué sirve |
|---|---|---|
| **Gratis o de pago** | Descripción y pestaña de planes. Si dice "Pro", "Premium" o "Upgrade", la versión gratuita es limitada. | Tu sitio no puede depender de algo que no puedes pagar. |
| **Qué incluye la versión gratis** | Descripción y capturas | Confirmar que la funcionalidad que necesitas no es de pago. |
| **Probado hasta (WordPress)** | Columna derecha: "Probado hasta" | Si es una versión muy vieja, puede fallar. |
| **Requiere WordPress / PHP** | Columna derecha | Tu sitio debe cumplir ese mínimo. |
| **Última actualización** | Columna derecha | Si no se actualiza hace más de 2 años, es una señal de alerta. |
| **Instalaciones activas** | Columna derecha | Más instalaciones suelen significar más probado y con más ayuda. |
| **Valoración y soporte** | Estrellas y pestaña "Soporte" | Ver si los problemas se responden. |

## Paso 4. ¿Funciona con un tema propio?

La mayoría de los plugins funcionan con cualquier tema, pero conviene confirmar:

- Si el plugin agrega algo **dentro de las páginas**, normalmente se usa con un **shortcode** o un bloque que pegas en la página. Eso funciona con un tema propio.
- Si necesita que el tema tenga **ciertas zonas** (por ejemplo, un lugar para el pie de página), tu tema debe incluir `wp_head()` y `wp_footer()`. La plantilla base ya los trae.
- Si la ficha dice que **requiere un tema o un constructor específico** (Elementor, Divi), no sirve para este curso.
- Prueba en la pestaña **Soporte** o en la descripción buscando la palabra "theme" o "tema".

Si no estás seguro, anota "por probar" y vuelve a revisarlo cuando lo instales en tu sitio.

## Paso 5. Plugins del curso

Estos cuatro se ven en el curso y se evalúan en el examen. Úsalos si calzan con tus funcionalidades:

| Plugin | Para qué sirve |
|---|---|
| Contact Form 7 | Formulario de contacto |
| Yoast SEO | Título SEO, meta descripción, legibilidad |
| Akismet | Filtrar spam en los comentarios |
| BackWPup | Copia de seguridad del sitio |

## Tu tabla

Copia esta tabla en tu `decisiones.md` y llénala. Una fila por funcionalidad.

| Funcionalidad | Plugin elegido | Gratis o de pago | Qué incluye la versión gratis | Probado hasta (WP) | Requiere PHP | ¿Funciona con tema propio? | Enlace a la ficha | Observaciones |
|---|---|---|---|---|---|---|---|---|
| | | | | | | | | |
| | | | | | | | | |
| | | | | | | | | |
| | | | | | | | | |
| | | | | | | | | |

Si una funcionalidad no necesita plugin, escribe "WordPress lo incluye" o "no se implementa en la fase 1" y explica en una línea.

## Qué debes tener al terminar

- Cada funcionalidad de tu `03-funcionalidades.md` tiene una fila.
- Cada plugin tiene el enlace a su ficha de wordpress.org.
- Gratis o de pago, versión probada y compatibilidad con tema propio están completos, o dicen "por probar".
- Puedes explicar por qué elegiste ese plugin y no otro.
