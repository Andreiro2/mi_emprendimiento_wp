# Decisiones de mi sitio

**Emprendimiento:** Joyas Kofran — joyas de plata 925 auténtica
**Fecha:** 4 de noviembre de 2026 · **Última corrección:** 17 de noviembre de 2026 (checkpoint)

## 1. Plugins (10 pts)

Datos revisados en la ficha oficial de cada plugin en wordpress.org el 3 de noviembre de 2026. Las funcionalidades salen de `docs/03-funcionalidades.md` de mi repo [mi-emprendimiento](https://github.com/Andreiro2/mi-emprendimiento).

| # | Funcionalidad | Plugin | Gratis o de pago | Qué incluye la versión gratis | Probado hasta (WP) | Requiere PHP | ¿Funciona con tema propio? | Enlace a la ficha |
|---|---|---|---|---|---|---|---|---|
| 1 | SEO (obligatorio): que Camila llegue desde Google a los artículos del blog | Yoast SEO | Gratis, con versión Premium de pago | Análisis de contenido, título SEO y meta descripción, schema, mapa del sitio XML y URL canónicas | 7.1.3 | 7.4 o superior | Sí: trabaja desde el panel y escribe en `wp_head()`, que la plantilla base trae | [wordpress-seo](https://wordpress.org/plugins/wordpress-seo/) |
| 2 | Contacto (obligatorio): dejar sus datos para recibir asesoría o novedades (captación de leads) | Contact Form 7 | Gratis (código abierto, sin versión de pago) | Formularios ilimitados que se insertan con un bloque o un shortcode | 7.1.4 | 8.3 o superior (y WordPress 7.1 o superior) | Sí: el formulario se pega en la página Contacto con su bloque o shortcode | [contact-form-7](https://wordpress.org/plugins/contact-form-7/) |
| 3 | Consultar por WhatsApp sobre una pieza sin tener que explicar cuál estaba viendo | Joinchat | Gratis, con Joinchat Premium y Joinchat AI de pago | Botón flotante de WhatsApp que abre la app en el celular y WhatsApp Web o un QR en el computador | 7.1.3 | 7.0 o superior | Sí: el botón se agrega con `wp_footer()`, que la plantilla base trae | [creame-whatsapp-me](https://wordpress.org/plugins/creame-whatsapp-me/) |
| 4 | Compartir un artículo en WhatsApp y redes sociales | AddToAny Share Buttons | Gratis | Botones para compartir en WhatsApp, Facebook, Pinterest y muchas redes más; antes o después del contenido, barra flotante, shortcode o widget | 7.0.8 | 5.6 o superior | Sí: se agrega solo al contenido de las entradas o con shortcode | [add-to-any](https://wordpress.org/plugins/add-to-any/) |
| 5 | Respaldar el sitio para poder reinstalarlo en otro servidor (objetivo del proyecto) | BackWPup | Gratis, con BackWPup Pro de pago | Respaldo completo de base de datos y archivos, programado de cada hora a cada mes, varios destinos y restauración desde un respaldo subido a mano | 7.1.4 | 7.4 o superior | Sí: no depende del tema, respalda los archivos y la base de datos | [backwpup](https://wordpress.org/plugins/backwpup/) |

**Descartado:** Akismet (filtro de spam). Es gratis solo para blogs personales; un sitio comercial como Joyas Kofran necesita una suscripción de pago. Los comentarios del blog quedaron como funcionalidad «Futuro».

## 2. Páginas de la fase 1 (5 pts)

| # | Página | Por qué la elijo (una línea) |
|---|---|---|
| 1 | Inicio (obligatoria) | Es la landing: presenta la marca, la plata 925 auténtica y lleva a la tienda, al blog y a WhatsApp. |
| 2 | Contacto (obligatoria) | Responde a la funcionalidad imprescindible de captar datos para asesoría y novedades. |
| 3 | Blog | Es la puerta de entrada desde Google del flujo de contenido y ya tiene 3 entradas publicadas. |
| 4 | Garantía y autenticidad | Responde a la funcionalidad imprescindible de verificar que la pieza es plata 925 auténtica. |
| 5 | Preguntas frecuentes | Reúne en un lugar las dudas de Camila sobre despacho, cambios, tallas y cuidado de la plata. |

**Páginas que dejo para después:** Tienda, categorías de productos, ficha de producto y carrito (la tienda queda fuera de la fase 1), Guía de tallas, Despacho y cambios, Términos y condiciones, Política de privacidad y 404.

## 3. Plan del tema (5 pts)

- **Nombre del tema:** `kofran-joyeria`
- **Custom o descargado:** Custom, a partir de `tema-base/`, para reconstruir mi prototipo de Stitch con mi paleta (azul #1F4E79, plata #C9CDD3 y fondo #FAF8F5) y mis fuentes del `DESIGN.md` (Cormorant Garamond e Inter). Está en `proyecto/kofran-joyeria/` y activo en InfinityFree desde el 17 de noviembre.
- **Carta Gantt** del desarrollo del sitio (5 al 25 de noviembre):

| Etapa | Desde | Hasta | Notas |
|---|---|---|---|
| Identidad visual | 5 nov | 12 nov | Copio `tema-base/` a `proyecto/kofran-joyeria/`, cargo logo, colores y fuentes en `style.css`, header y footer |
| Home | 12 nov | 12 nov | `front-page.php` según el prototipo de Stitch |
| Páginas | 12 nov | 21 nov | Contacto (lista el 17 nov); faltan Garantía y autenticidad, y Preguntas frecuentes |
| Plugins | 17 nov | 23 nov | Contact Form 7 listo el 17 nov; faltan Yoast SEO, Joinchat, AddToAny y BackWPup |
| **Checkpoint (18 nov)** | 18 nov | 18 nov | Corrijo este documento |
| Ajustes y formulario | 19 nov | 24 nov | Pruebo el formulario, el SEO de cada página, el celular y hago un respaldo con BackWPup |
| **Entrega final (25 nov)** | 25 nov | 25 nov | |

```mermaid
gantt
    dateFormat YYYY-MM-DD
    title Plan del sitio Joyas Kofran
    section Tema kofran-joyeria
    Identidad visual :2026-11-05, 8d
    Home             :2026-11-12, 1d
    section Contenido
    Páginas          :2026-11-12, 10d
    Plugins          :2026-11-17, 7d
    Checkpoint       :milestone, 2026-11-18, 0d
    Ajustes y formulario :2026-11-19, 6d
    Entrega final    :milestone, 2026-11-25, 0d
```

## 4. Plan B (5 pts)

| Riesgo | Qué hago | Cuándo se activa (fecha o señal) |
|---|---|---|
| Mi tema `kofran-joyeria` no funciona o se rompe (pantalla en blanco) | Vuelvo al último commit que funcionaba; si no resulta, paso al tema descargado Twenty Twenty-Five, que ya tengo activo en InfinityFree | Si el home no está listo el miércoles 11 de noviembre. **Revisado el 12 nov:** el home no estaba listo, pero lo terminé y probé ese día, así que no activé el plan B (ver cambios) |
| Contact Form 7 no se puede instalar: pide WordPress 7.1 y mi sitio tiene WordPress 7.0.2 (el PHP 8.4 de InfinityFree sí cumple) | Hago un respaldo con BackWPup, actualizo WordPress a 7.1 y reviso que el sitio siga funcionando; si falla, restauro el respaldo y uso otro plugin de formulario gratis, verificando antes su ficha | Al instalarlo, a más tardar el 17 de noviembre. **Resuelto:** actualicé WordPress a 7.1.4 el 3 nov e instalé Contact Form 7 6.2.5 el 17 nov |
| El correo del formulario no llega (InfinityFree limita el envío de correos) | Muestro el mensaje de confirmación del formulario y dejo el botón de WhatsApp (Joinchat) como contacto principal | Si un mensaje de prueba no llega antes del 18 de noviembre |
| InfinityFree da error 500 o 429 | Espero unos minutos y reintento; mientras, sigo trabajando en mi sitio de Local WP | Si dura más de 1 hora |
| Pierdo el sitio o un cambio lo rompe | Restauro el último respaldo de BackWPup | Antes de cada cambio grande hago un respaldo |

## Cambios respecto de la Sumativa 2 (solo en el checkpoint del 18 nov)

| Qué cambié | Qué había antes | Por qué | Evidencia (captura o commit) |
|---|---|---|---|
| Corregí las fuentes del tema a Cormorant Garamond e Inter | Decía Playfair Display y Plus Jakarta Sans | Era un error: mi `DESIGN.md` y mi prototipo de Stitch usan Cormorant Garamond e Inter | Commit `2e928f5` (paso 1) |
| El tema propio empezó el 12 nov en vez del 5 nov y no activé el plan B | El plan B decía pasar a Twenty Twenty-Five si el home no estaba listo el 11 nov | El 12 nov hice el tema completo desde `tema-base/` y lo probé en un WordPress local sin errores, así que ya no había riesgo de no llegar | Commits `044da24` a `4dc86dc` (pasos 0 a 5) |
| Probé los temas descargados Silverstorm y Zino (con Colibri Page Builder) y no los usé | Plan: solo tema propio | Quería comparar; Silverstorm traía contenido de demostración (texto en latín, botones en inglés) y mi tema ya tenía mi identidad. Quedan instalados pero inactivos | Captura de la vista previa de ambos temas, 17 nov |
| Actualicé WordPress de 7.0.2 a 7.1.4 | WordPress 7.0.2 | Contact Form 7 pide WordPress 7.1 o superior (riesgo 2 del plan B) | Salud del sitio: WordPress 7.1.4, PHP 8.4.27 |
| Activé `kofran-joyeria` y armé el menú Inicio · Nosotros · Blog · Contacto | Twenty Twenty-Five con menú Inicio · Nosotros · Blog | Checkpoint: tema elegido activo con mi identidad y Contacto en el menú | Sitio en producción, 17 nov; commit del paso 6 |
| Creé la página Contacto con Contact Form 7 (nombre, correo, teléfono o WhatsApp, motivo y mensaje) | No había página Contacto | Funcionalidad imprescindible de captar datos para asesoría; el motivo de consulta ayuda a responder mejor | https://joyaskofran.infinityfree.me/contacto/ |
| Saqué el logo del texto de la página Inicio | El logo estaba dentro del contenido de Inicio | Con mi tema el logo ya aparece en el header y quedaba repetido | Página Inicio, 17 nov |
| Reemplacé «6 meses de garantía» por «Plata 925 auténtica» en el tema, las páginas y la entrada de regalos | El sitio ofrecía 6 meses de garantía | Decidí destacar la autenticidad de la plata en vez de un plazo de garantía | Commit del 17 nov; páginas Inicio, Nosotros y la entrada de regalos |
| Moví Yoast SEO, Joinchat, AddToAny y BackWPup al 19–23 nov | La carta Gantt decía 14–17 nov | El tema se atrasó una semana; primero dejé listos el tema y Contacto, que pide el checkpoint | Carta Gantt actualizada en este documento |

**Decisión:** Continúo con mi propuesta: tema propio `kofran-joyeria`. Ya está activo en InfinityFree con mi identidad (logo, colores y fuentes del `DESIGN.md`), tiene Inicio, Nosotros, Blog y Contacto en el menú, y las 3 entradas se ven con su foto. Para la entrega final me quedan las páginas Garantía y autenticidad, y Preguntas frecuentes, y los 4 plugins que faltan.
