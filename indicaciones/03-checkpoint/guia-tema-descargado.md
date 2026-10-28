# Guía: elegir, instalar y personalizar un tema descargado

**Para leer antes de la clase (10 minutos).** Sirve si decidiste usar un tema ya hecho, o si tu tema propio no funcionó y necesitas un plan B.

## Qué vas a lograr

Un tema descargado **activo en tu sitio de InfinityFree**, con la identidad de tu emprendimiento (colores, logo y tipografías) y tu menú, sin tocar archivos de PHP.

## Antes de elegir: dos tipos de tema

| Tipo | Se personaliza con | Cómo reconocerlo |
|---|---|---|
| **Tema clásico** | Apariencia > **Personalizar** (el Personalizador) | Tiene menú "Personalizar". |
| **Tema de bloques** (como Twenty Twenty-Five) | Apariencia > **Editor** (el Editor de sitios) | Tiene menú "Editor". |

Elige uno y úsalo hasta el final. Mezclar ambos confunde.

## Paso 1. Elegir el tema

1. En el panel: **Apariencia > Temas > Añadir nuevo**. También puedes mirar <https://wordpress.org/themes/>.
2. Usa **Vista previa** antes de instalar.
3. Busca temas **gratuitos** y de blog, de negocio o de portafolio, según tu emprendimiento.
4. Revisa en la ficha lo que informe: última actualización, instalaciones activas, valoración y versión de WordPress que requiere.
5. Evita temas "premium", los que piden una licencia o los que obligan a usar un constructor como Elementor.

**Prueba 2 o 3 temas** antes de decidir. Los temas que ya vienen con WordPress (los Twenty) son una buena primera opción. Anota en tu `decisiones.md` cuáles probaste y por qué elegiste uno.

## Paso 2. Instalarlo

**Desde el panel (lo más simple):**
1. **Apariencia > Temas > Añadir nuevo**, busca el tema y pulsa **Instalar**.
2. Pulsa **Activar**.

**Desde un archivo `.zip` (si lo descargaste):**
1. **Apariencia > Temas > Añadir nuevo > Subir tema**.
2. Elige el `.zip`, pulsa **Instalar ahora** y luego **Activar**.

Hazlo en tu sitio de **InfinityFree**. Si algo no carga, espera unos minutos: el hosting a veces responde con errores 500 o 429, y se resuelve reintentando.

## Paso 3. Personalizar con tu identidad

Trabaja con los colores y las tipografías de tu `DESIGN.md`.

**En un tema clásico (Personalizar):**
- **Identidad del sitio:** nombre, descripción y logo.
- **Colores** y **Tipografías**, si el tema los trae.
- **Menús:** crea tu menú con las páginas de tu fase 1 y asígnalo a la ubicación principal.
- **Página de inicio:** en **Ajustes de la página de inicio**, elige una página estática como portada.
- **CSS adicional:** aquí puedes pegar tus propios estilos. Es lo más seguro para hacer cambios finos, porque no se pierden si el tema se actualiza.

**En un tema de bloques (Editor):**
- **Estilos:** colores y tipografías globales.
- **Plantillas y partes:** header y footer.
- **Patrones:** bloques ya hechos para armar el home.

## Reglas con un tema descargado

- **No edites los archivos del tema.** Si algo se actualiza, se pierde tu cambio. Usa el Personalizador, el Editor o el CSS adicional.
- **Cambios en el panel:** a diferencia del tema propio, aquí sí se trabaja desde el panel. Anota en `decisiones.md` qué personalizaste, porque eso no queda en un repo.
- **Respaldo:** haz una copia con BackWPup (o la exportación del sitio) antes de cambios grandes.
- **Mantén el admin limpio:** cuando termines, **elimina los temas y plugins que no usas** (Apariencia > Temas > Detalles > Eliminar; Plugins > Plugins instalados > Eliminar). Basta con un tema activo y, si quieres, uno de respaldo.

## Si el tema propio no funcionó (pivote)

1. Elige y activa un tema descargado.
2. Reconstruye lo esencial: menú, home y las páginas del checkpoint.
3. En `decisiones.md`, sección "Cambios respecto de la Sumativa 2": qué intentaste con el tema propio, por qué no funcionó (captura o mensaje de error) y qué tema elegiste.

Pivotear **no baja tu nota** si lo documentas. Pasado el checkpoint (18 nov), cambiar de tema solo con acuerdo previo.

## Qué debes tener al terminar

- El tema activo en InfinityFree, con el logo, los colores y las tipografías de tu identidad.
- El menú con tus páginas.
- Una portada que no sea la lista de entradas, si tu prototipo tiene un home.
- Lo que personalizaste anotado en `decisiones.md`.
- Sin temas ni plugins sobrantes instalados.
