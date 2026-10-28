---
title: "Guía: construir tu tema propio paso a paso"
type: exercise
estimated_time: 25
---

# Guía: construir tu tema propio paso a paso

**Para leer antes de la clase (10 minutos).** Sirve si decidiste construir tu propio tema a partir de la plantilla base. Complementa a la guía de identidad y home (`guia-identidad-y-home.md`) y a la de entrada, páginas y SEO (`guia-entrada-paginas-y-seo.md`).

## Qué vas a lograr

Un tema propio, pequeño, que se ve como tu emprendimiento y está **activo en tu sitio de InfinityFree**. No lo construyes desde cero: partes de una plantilla que ya funciona.

## La regla de oro

**Un cambio a la vez. Si funciona, commit. Si se rompe, vuelves al último commit.**

## Qué necesitas

- Tu fork de este repo, con `tema-base/` copiado a **`proyecto/mi-tema/`** (no edites `tema-base/`).
- Antigravity con la carpeta del tema abierta.
- Tu `DESIGN.md` y tu prototipo de Stitch.
- Un sitio local (Local WP) para probar y tu sitio de InfinityFree para publicar.

## Dónde guardar todo

- Tu tema va en **`proyecto/mi-tema/`**, copiado desde `tema-base/`.
- Cuando tu tema propio ya funcione, crea también **`proyecto/documentacion/`** y mueve ahí tus `.md` (`decisiones.md`, `plan-de-continuidad.md` y `lighthouse.md`) con `git mv`.
- Si al final no logras tu tema propio y pasas a uno descargado, tus `.md` se quedan directamente en `proyecto/`.

## Los archivos de tu tema

| Archivo | Qué hace | ¿Lo cambias? |
|---|---|---|
| `style.css` | Nombre del tema y todos los estilos | Sí |
| `functions.php` | Menú, imagen destacada y carga del CSS | **No** |
| `header.php` | Cabecera y menú | Sí |
| `footer.php` | Pie de página | Sí |
| `front-page.php` | El home | Sí |
| `index.php` | Lista de entradas (respaldo) | Poco |
| `single.php` | Una entrada de blog | Sí |
| `archive.php` | Entradas de una categoría | Sí |
| `page.php` | Una página (Sobre, Contacto) | Sí |

No agregues archivos nuevos sin acordarlo.

## Los pasos, en orden

Cada paso deja el sitio funcionando. Haz un commit al terminar cada uno.

### Paso 0. Instalar y activar
1. Cambia el nombre del tema en el encabezado de `style.css` (nombre y autor).
2. Comprime la carpeta en `.zip` y súbela en **Apariencia > Temas > Añadir nuevo > Subir tema**. Actívala.
3. **Ajustes > Lectura > Una página estática** y elige tu página de inicio.
4. Crea tu menú en **Apariencia > Menús** y asígnalo a "Menú principal".
- **Commit:** `paso 0: tema activo`.

### Paso 1. Identidad visual
- Colores y tipografías del `DESIGN.md` en `style.css` (sección `VARIABLES`).
- Header (logo y menú) y footer (datos de tu prototipo).
- **Commit:** `paso 1: identidad, header y footer`.

### Paso 2. Home
- `front-page.php`: portada, destacados y llamada a la acción, una sección por vez.
- **Commit** por cada sección.

### Paso 3. Entradas y categorías
- `single.php` y `archive.php` con el diseño de tu sitio.
- **Commit:** `paso 3: entradas y categorías`.

### Paso 4. Páginas
- `page.php`, con el mismo estilo, para tus páginas (Sobre, Contacto, etc.).
- **Commit:** `paso 4: páginas`.

### Paso 5. Publicar
- Genera el `.zip` solo con el tema (con `git archive`, que respeta `.gitattributes`) y súbelo a InfinityFree.
- Revisa el sitio y corrige. **Commit** por cada corrección.

## Cómo pedirle a la IA

Cada pedido lleva:
- Tu `DESIGN.md` (colores, tipografías, espaciados).
- El archivo que vas a cambiar, **completo**.
- **Una sola cosa**: "en `front-page.php`, reemplaza la sección 1 por una portada con imagen a la derecha".
- "Responde con el archivo completo y no cambies nada más."

Si hay un error, pega el mensaje exacto y el archivo, y pide solo la corrección.

## Reglas

- Trabajas solo en Antigravity. **No edites plantillas desde el panel de WordPress**: lo que se guarda ahí vive en la base de datos y puede pisar tus archivos.
- No modifiques `functions.php`.
- Sé capaz de explicar cada archivo en una línea.
- Activa `WP_DEBUG` en tu sitio local para ver los errores de PHP.
- Pantalla en blanco: es un error de PHP. Revisa el último archivo que tocaste o vuelve al último commit.

## ¿Sigo con mi tema o paso a uno descargado?

Señales de que conviene cambiar:
- Llevas dos sesiones sin avanzar en lo mismo.
- No logras volver a un estado que funciona.
- Estás a una semana del avance y el tema no está activo en InfinityFree.

Antes de decidir, vuelve al último commit que funcionaba y prueba una vez más con un pedido más pequeño. Si sigue sin resultar, pasa a un tema descargado (guía `guia-tema-descargado.md`) y documenta el cambio en `decisiones.md`. **Pivotear no baja tu nota** si lo documentas, pero después del avance (18 nov) solo con acuerdo previo.

## Qué debes tener al terminar

- El tema activo en InfinityFree, con tu identidad visual.
- Un repo con commits pequeños y mensajes claros, repartidos en varios días.
- Tus páginas y entradas mostradas con el diseño del tema.
- Si cambiaste de rumbo, la explicación en `decisiones.md`.
