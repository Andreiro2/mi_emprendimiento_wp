# Entrega 4 · Entrega final (30 pts)

**Entrega:** la URL de tu sitio en producción, el enlace a tu repo, y tus archivos `lighthouse.md` y `plan-de-continuidad.md`, por AVA.
**Fecha:** miércoles 25 de noviembre, hasta el término de la clase. **Peso:** 30% de la Evaluación 03 (1 punto = 1%).
**Revisión previa:** martes 24 de noviembre, en clase y sin nota. Llegas con el sitio publicado, resolvemos problemas de despliegue y pruebas el formulario con un mensaje de prueba.

## Requisito obligatorio: sitio en producción

Tu sitio tiene que estar **en producción** (por ejemplo, en InfinityFree) y abrir con su URL. **No tiene puntaje, pero es obligatorio: sin sitio en producción, la Entrega 4 no se logra** (0 puntos).

## Qué tienes que lograr

Cerrar la primera etapa de tu web, dejarla lista para migrar a un servidor profesional y **definir la segunda etapa**. Es normal que algunas funcionalidades (por ejemplo, una tienda con WooCommerce) queden fuera por tiempo o por recursos: en tu plan de continuidad decides qué sigue.

## Cómo se evalúa

| Qué se revisa | Puntos | Cómo se asignan |
|---|---|---|
| **Plan de continuidad** | 10 | Funcionalidades de la etapa 2 y por qué quedaron fuera (3) · recursos que necesitas (3) · priorización y cronograma (2) · riesgos y mitigación (2) |
| **Formulario de contacto funcionando** | 8 | Aparece en Contacto (2) · tiene nombre, correo y mensaje (2) · muestra confirmación al enviar (2) · el mensaje llega al correo configurado (2) |
| **README del proyecto:** documentación para respaldar y reinstalar | 6 | Contexto y requisitos (2) · cómo respaldar (2) · cómo reinstalar en otro servidor (2) |
| **Análisis con Lighthouse** | 6 | Informe ejecutado en tu sitio (2) · análisis de los resultados (2) · mejoras propuestas o aplicadas (2) |
| **Total** | **30** | |

## 1. Plan de continuidad (10 pts)

Es la segunda etapa de tu web. Créalo en la raíz de tu repo como `plan-de-continuidad.md`, desde la plantilla [`plantilla-plan-continuidad.md`](plantilla-plan-continuidad.md).

- **Funcionalidades de la etapa 2 y por qué quedaron fuera (3):** qué quisiste hacer y no pudiste (por ejemplo, WooCommerce, reservas, un newsletter), y la razón: tiempo, recursos, costo o conocimientos.
- **Recursos que necesitas (3):** plugins (gratis o de pago), hosting o servidor, costos y lo que tendrías que aprender.
- **Priorización y cronograma (2):** en qué orden lo harías y en cuánto tiempo.
- **Riesgos y mitigación (2):** qué puede salir mal en la etapa 2 y qué harías.

## 2. Formulario de contacto (8 pts)

El formulario se prueba enviando un **mensaje de prueba**. Debe llegar al correo que configuraste.

## 3. README del proyecto (6 pts)

Es el `README.md` de la raíz de tu repo. Otra persona debe poder seguir tus pasos para **respaldar tu sitio y reinstalarlo en cualquier servidor**. Explica el contexto de tu web, sus requisitos (WordPress, PHP, tema y plugins), cómo respaldar y cómo reinstalar.

## 4. Análisis con Lighthouse (6 pts)

Lighthouse mide el rendimiento de tu sitio. Entregas el resultado y tu análisis en `lighthouse.md`, desde la plantilla [`plantilla-lighthouse.md`](plantilla-lighthouse.md).

- **Cómo ejecutarlo:** en Chrome, abre tu sitio en producción, entra a las herramientas de desarrollador (F12) y busca la pestaña **Lighthouse**. También puedes usar [PageSpeed Insights](https://pagespeed.web.dev/). Analiza tu página de inicio en **móvil**.
- **Informe ejecutado (2):** las cuatro categorías (Rendimiento, Accesibilidad, Buenas prácticas y SEO) con su puntaje y una captura o el enlace del informe.
- **Análisis (2):** qué significan tus puntajes y qué problemas encontraste.
- **Mejoras (2):** al menos 2, propuestas o aplicadas.

> **No se evalúa que saques un puntaje alto**, sino que entiendas qué mide Lighthouse y qué harías para mejorar. El hosting gratuito tiene límites, y está bien reconocerlo.

## Reglas

- El aviso de «no seguro» y los errores 500 o 429 de InfinityFree no se descuentan.
- Puedes usar IA y tutoriales. Debes poder explicar lo que entregas.

## Guía de esta entrega

- [`buenas-practicas-seguridad.md`](buenas-practicas-seguridad.md): lista de buenas prácticas para dejar tu sitio listo.

## Antes de entregar, revisa

- [ ] Mi sitio **está en producción** y abre con su URL.
- [ ] El formulario muestra confirmación y el mensaje de prueba llegó a mi correo.
- [ ] Mi `README.md` explica el contexto de mi web, sus requisitos, cómo respaldar y cómo reinstalar en otro servidor.
- [ ] Probé mis pasos de reinstalación (o los revisé con un compañero) y funcionan.
- [ ] Mi `lighthouse.md` tiene las cuatro categorías, mi análisis y al menos 2 mejoras.
- [ ] Mi `plan-de-continuidad.md` tiene las funcionalidades de la etapa 2, los recursos, el cronograma y los riesgos.
