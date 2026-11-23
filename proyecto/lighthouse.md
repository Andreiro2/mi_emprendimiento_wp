# Análisis de rendimiento con Lighthouse

**Sitio analizado:** https://joyaskofran.infinityfree.me/ (página de inicio en producción)
**Herramienta:** PageSpeed Insights (usa Lighthouse)
**Dispositivo:** móvil
**Fecha del análisis:** 23 de noviembre de 2026

## 1. Resultados (1 pt)

Hice dos análisis: uno antes y otro después de aplicar dos mejoras.

| Categoría | Antes de las mejoras | Después de las mejoras |
|---|---|---|
| Rendimiento | 90 | 93 |
| Accesibilidad | 100 | 100 |
| Buenas prácticas | 100 | 100 |
| SEO | 92 | 100 |

| Métrica (móvil) | Antes | Después |
|---|---|---|
| First Contentful Paint | 2,0 s | 2,0 s |
| Largest Contentful Paint | 3,2 s | 2,9 s |
| Total Blocking Time | 0 ms | 0 ms |
| Cumulative Layout Shift | 0 | 0 |
| Speed Index | 3,7 s | 2,4 s |

**Evidencia:**

- Informe después de las mejoras: https://pagespeed.web.dev/analysis/https-joyaskofran-infinityfree-me/tdlklpns2flkfqostcipbr?form_factor=mobile
- Captura antes: [`img/lighthouse-movil-antes.jpg`](img/lighthouse-movil-antes.jpg)
- Captura después: [`img/lighthouse-movil-despues.jpg`](img/lighthouse-movil-despues.jpg)

## 2. Análisis (1 pt)

- **Qué significan mis puntajes:**
  - **Rendimiento** mide qué tan rápido se ve y se puede usar la página en un celular con una conexión lenta simulada. Mi 93 es bueno, pero el contenido principal (la foto de la portada) tarda 2,9 s en aparecer.
  - **Accesibilidad** revisa que personas con discapacidad puedan usar el sitio: contraste de colores, textos alternativos en las imágenes, etiquetas en el formulario y un orden lógico de títulos. Saqué 100.
  - **Buenas prácticas** revisa seguridad y calidad técnica: HTTPS, que no haya errores en la consola y que las imágenes tengan la proporción correcta. Saqué 100.
  - **SEO** revisa lo básico para que Google entienda la página: título, meta descripción, idioma, enlaces rastreables y que se vea bien en el celular. Pasé de 92 a 100.
- **Mi mejor categoría y por qué:** Accesibilidad y Buenas prácticas, con 100. El tema propio usa HTML simple, textos alternativos en todas las imágenes, etiquetas en los campos del formulario y colores con buen contraste (azul #1F4E79 sobre crema).
- **Mi categoría más débil y por qué:** Rendimiento. Influyen mi código y también el hosting gratuito: el servidor de InfinityFree responde más lento que un hosting pagado, y eso se nota en el First Contentful Paint (2,0 s), que no cambió con mis mejoras.
- **Problemas que encontré en el informe:**
  - **Faltaba la meta descripción** de la página de inicio, por eso el SEO estaba en 92.
  - **Imágenes más pesadas de lo necesario:** la foto de portada en JPG pesaba 95 KB. Las fotos de las entradas también se pueden comprimir más (ahorro estimado de 41 KB).
  - **Recursos que bloquean el renderizado (ahorro estimado de 1,5 s):** la hoja de estilos del tema, la de Contact Form 7 y las fuentes de Google Fonts, que se cargan con `@import`. El navegador tiene que descargarlas antes de mostrar la página.
  - **Contact Form 7 carga su CSS y su JavaScript en todas las páginas**, aunque el formulario solo está en Contacto.

## 3. Mejoras (1 pt)

| Mejora | Qué problema resuelve | ¿Aplicada o propuesta? | Resultado (si la aplicaste) |
|---|---|---|---|
| Escribí la meta descripción del Inicio con Yoast SEO | El documento no tenía meta descripción; Google no tenía un resumen de la página | Aplicada (23 nov) | SEO de 92 a 100 |
| Convertí la foto de portada a WebP de 640 px y la cargué con `<picture>` y `fetchpriority="high"` | Imagen de portada pesada (95 KB en JPG) que retrasaba el LCP | Aplicada (23 nov, commit «paso 7») | La imagen bajó de 95 KB a 26 KB; Rendimiento de 90 a 93, LCP de 3,2 s a 2,9 s y Speed Index de 3,7 s a 2,4 s |
| Cargar Google Fonts con `<link rel="preconnect">` y `<link>` en `header.php` en vez de `@import` en `style.css` | Fuentes que bloquean el renderizado | Propuesta | — |
| Cargar el CSS y el JavaScript de Contact Form 7 solo en la página Contacto | Archivos que se descargan en todas las páginas sin usarse | Propuesta | — |
| Comprimir las fotos de las entradas (WebP) antes de subirlas | 41 KB de imágenes que se pueden ahorrar en el listado del blog | Propuesta | — |
| Pasar a un hosting pagado con mejor tiempo de respuesta | El servidor gratuito responde lento (FCP de 2,0 s) | Propuesta (etapa 2, ver [`plan-de-continuidad.md`](plan-de-continuidad.md)) | — |

> El hosting gratuito tiene límites: los puntajes pueden cambiar entre un análisis y otro según la carga del servidor de InfinityFree.
