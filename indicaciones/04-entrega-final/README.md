# Entrega 4 · Entrega final (30 pts)

**Entrega:** la URL de tu sitio en producción, el enlace a tu repo, y tus archivos `lighthouse.md` y `plan-de-continuidad.md` (en `proyecto/`), por AVA.
**Fecha:** miércoles 25 de noviembre, hasta el término de la clase. **Peso:** 30% de la Evaluación 03 (1 punto = 1%).
**Revisión previa:** martes 24 de noviembre, en clase y sin nota. Llegas con el sitio publicado, resolvemos problemas de despliegue y pruebas el formulario con un mensaje de prueba.

## Requisito obligatorio: sitio en producción

Tu sitio tiene que estar **en producción** (por ejemplo, en InfinityFree) y abrir con su URL. **Sin sitio en producción, la Entrega 4 no se logra** (0 puntos).

## Qué tienes que lograr

Cerrar la primera etapa de tu web, dejarla lista para migrar a un servidor profesional y **definir la segunda etapa**. Es normal que algunas funcionalidades (por ejemplo, una tienda con WooCommerce) queden fuera por tiempo o por recursos: en tu plan de continuidad decides qué sigue.

## Cómo se evalúa

| Qué se revisa | Puntos | Cómo se asignan |
|---|---|---|
| **Sitio funcionando, con el tema bien instalado** | 10 | Tema instalado y activo (4) · el sitio abre sin errores (3) · se ve tu identidad y se ve bien en celular (3) |
| **Plan de continuidad** | 8 | Funcionalidades de la etapa 2 y por qué quedaron fuera (3) · recursos que necesitas (2) · priorización y cronograma (2) · riesgos y mitigación (1) |
| **Formulario de contacto funcionando** | 6 | Aparece en Contacto con nombre, correo y mensaje (2) · muestra confirmación al enviar (2) · el mensaje llega al correo configurado (2) |
| **README del proyecto:** documentación para respaldar y reinstalar | 3 | Contexto y requisitos (1) · cómo respaldar (1) · cómo reinstalar en otro servidor (1) |
| **Análisis con Lighthouse** | 3 | Informe ejecutado en tu sitio (1) · análisis de los resultados (1) · al menos 2 mejoras propuestas o aplicadas (1) |
| **Total** | **30** | |

## 1. Sitio funcionando, con el tema bien instalado (10 pts)

Tu tema (propio o descargado) está **instalado y activo** en el sitio en producción, el sitio abre sin errores y se ve tu identidad visual, también en celular.

## 2. Plan de continuidad (8 pts)

Es la segunda etapa de tu web. Créalo en la carpeta `proyecto/` de tu repo como `plan-de-continuidad.md`, desde la plantilla [`plantilla-plan-continuidad.md`](plantilla-plan-continuidad.md). Es la parte más importante después del sitio.

- **Funcionalidades de la etapa 2 y por qué quedaron fuera (3):** qué quisiste hacer y no pudiste (por ejemplo, WooCommerce, reservas, un newsletter), y la razón: tiempo, recursos, costo o conocimientos.
- **Recursos que necesitas (2):** plugins (gratis o de pago), hosting o servidor, costos y lo que tendrías que aprender.
- **Priorización y cronograma (2):** en qué orden lo harías y en cuánto tiempo.
- **Riesgos y mitigación (1):** qué puede salir mal en la etapa 2 y qué harías.

## 3. Formulario de contacto (6 pts)

El formulario se prueba enviando un **mensaje de prueba**. Debe llegar al correo que configuraste.

## 4. README del proyecto (3 pts)

Es el `README.md` de la raíz de tu repo (el único archivo tuyo que no va en `proyecto/`). Otra persona debe poder seguir tus pasos para **respaldar tu sitio y reinstalarlo en cualquier servidor**. Explica el contexto de tu web, sus requisitos (WordPress, PHP, tema y plugins), cómo respaldar y cómo reinstalar.

## 5. Análisis con Lighthouse (3 pts)

Lighthouse mide el rendimiento de tu sitio. Entregas el resultado y tu análisis en `proyecto/lighthouse.md`, desde la plantilla [`plantilla-lighthouse.md`](plantilla-lighthouse.md).

- **Cómo ejecutarlo:** en Chrome, abre tu sitio en producción, entra a las herramientas de desarrollador (F12) y busca la pestaña **Lighthouse**. También puedes usar [PageSpeed Insights](https://pagespeed.web.dev/). Analiza tu página de inicio en **móvil**.
- **Informe ejecutado (1):** las cuatro categorías (Rendimiento, Accesibilidad, Buenas prácticas y SEO) con su puntaje y una captura o el enlace del informe.
- **Análisis (1):** qué significan tus puntajes y qué problemas encontraste.
- **Mejoras (1):** al menos 2, propuestas o aplicadas.

> **No se evalúa que saques un puntaje alto**, sino que entiendas qué mide Lighthouse y qué harías para mejorar. El hosting gratuito tiene límites, y está bien reconocerlo.

## Reglas

- El aviso de «no seguro» y los errores 500 o 429 de InfinityFree no se descuentan.
- Puedes usar IA y tutoriales. Debes poder explicar lo que entregas.

## Guía de esta entrega

- [`buenas-practicas-seguridad.md`](buenas-practicas-seguridad.md): lista de buenas prácticas para dejar tu sitio listo.

## Antes de entregar, revisa

- [ ] Mi sitio **está en producción**, abre con su URL y mi tema está instalado y activo.
- [ ] El formulario muestra confirmación y el mensaje de prueba llegó a mi correo.
- [ ] Mi `README.md` explica el contexto de mi web, sus requisitos, cómo respaldar y cómo reinstalar en otro servidor.
- [ ] Probé mis pasos de reinstalación (o los revisé con un compañero) y funcionan.
- [ ] Mi `lighthouse.md` tiene las cuatro categorías, mi análisis y al menos 2 mejoras.
- [ ] Mi `plan-de-continuidad.md` tiene las funcionalidades de la etapa 2, los recursos, el cronograma y los riesgos.
