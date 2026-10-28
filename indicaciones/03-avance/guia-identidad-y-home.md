# Guía: identidad visual y home de tu tema

**Para leer antes de la clase (10 minutos).** En clase vas a hacer lo que aquí se describe.

## Qué vas a lograr

- **Hito 1:** que tu tema tenga los colores y las tipografías de tu prototipo, con su header y su footer.
- **Hito 2:** que tu home (`front-page.php`) se parezca a tu prototipo.

## Qué necesitas tener a mano

- Tu tema base activo y funcionando, en la carpeta `proyecto/mi-tema/`.
- Tu repo `mi-emprendimiento`, con tu `DESIGN.md` (colores, tipografías, espaciados) y las pantallas de tu prototipo en Stitch, sobre todo el home.
- Antigravity abierto con la carpeta de tu tema.

## La regla de oro

**Un cambio a la vez. Si funciona, commit. Si se rompe, vuelves al último commit.**

No le pidas a la IA "hazme todo el home". Pídele una cosa pequeña, pruébala, guárdala y sigue con la siguiente.

---

## Hito 1 · Colores, tipografías, header y footer

### Paso 1. Pasa tu DESIGN.md a las variables de `style.css`

Abre `style.css` y busca la sección `VARIABLES`. Reemplaza los valores por los de tu guía de estilo:

```css
:root {
  --color-fondo: #ffffff;
  --color-texto: #1f2933;
  --color-principal: #2563eb;
  --color-secundario: #f1f5f9;
  --fuente-texto: system-ui, sans-serif;
}
```

**Comprueba:** recarga el sitio. Los colores del header, el fondo y los botones deben haber cambiado. → **commit** `hito 1: variables de color`.

### Paso 2. Tipografía

Si tu prototipo usa una fuente de Google Fonts, agrega una línea **al principio de `style.css`**, justo debajo del comentario del encabezado del tema:

```css
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');
```

Cambia `Poppins` por tu fuente y actualiza `--fuente-texto`. No toques `functions.php`.

**Comprueba:** el texto del sitio cambió de letra. → **commit**.

### Paso 3. Header

Abre `header.php`. Ahí están el nombre del sitio y el menú. Pídele a la IA cambios **pequeños**, por ejemplo:

> "Estoy editando `header.php` de un tema de WordPress. Te paso el archivo completo. Cambia el nombre del sitio por una imagen de logo que esté en `assets/img/logo.png` dentro del tema, sin tocar el menú. Responde solo con el archivo completo."

Para usar una imagen del tema, ponla en una carpeta `assets/img/` dentro de tu tema y llámala así en el HTML:

```php
<img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/logo.png" alt="Nombre de tu marca">
```

**Crea el menú:** en WordPress, **Apariencia > Menús**, crea un menú con tus páginas y asígnalo a la ubicación **"Menú principal"**. Si no lo haces, no aparece nada.

**Comprueba:** se ve el logo y el menú. → **commit**.

### Paso 4. Footer

Abre `footer.php` y reemplaza el `TODO` por lo que muestra tu prototipo (datos de contacto, enlaces, redes). → **commit**.

---

## Hito 2 · Home desde el prototipo

### Antes: que WordPress use tu `front-page.php`

1. Crea una página llamada "Inicio" y otra "Blog" (pueden estar vacías).
2. **Ajustes > Lectura > Una página estática**: elige "Inicio" como página de inicio y "Blog" como página de entradas.
3. Recarga el sitio. Debes ver las secciones de ejemplo de `front-page.php`.

Si no cambia nada, revisa que la página de inicio esté asignada y que el archivo se llame exactamente `front-page.php`.

### Arma el home sección por sección

Mira tu prototipo y haz una lista de sus secciones, de arriba hacia abajo. Por ejemplo: portada, destacados, últimas entradas, llamada a la acción. **Construye una sección por vez**, en este ciclo:

1. Pide a la IA **solo esa sección**.
2. Pega el resultado en `front-page.php`.
3. Recarga y compara con el prototipo.
4. Si funciona → commit (`hito 2: sección portada`).

Ejemplo de pedido:

> "Aquí está mi `front-page.php` y mi `style.css`. Reemplaza la sección 1 por una portada con el titular a la izquierda y una imagen a la derecha. Usa las variables de color de `style.css`. No toques las demás secciones. Responde con los dos archivos completos."

### Elementos que debe tener tu home

- [ ] Imagen principal.
- [ ] Un video incrustado (YouTube, con el código de inserción que te da el sitio).
- [ ] Una sección de destacados.
- [ ] Un botón de llamada a la acción.

### Revisa que se vea bien en el celular

Achica la ventana del navegador o abre las herramientas de desarrollo (clic derecho > *Inspeccionar*) y activa la vista de móvil. Si algo se corta o se desborda, pídele a la IA un ajuste con `@media (max-width: 700px)` en `style.css`.

---

## Cuando algo se rompe

| Qué ves | Qué hacer |
|---|---|
| Pantalla en blanco | Hay un error de PHP en el último archivo que tocaste. Vuelve al último commit. |
| El sitio se ve sin estilos | Revisa que `style.css` conserve el comentario del encabezado en la primera línea. |
| El menú no aparece | Asigna el menú a "Menú principal" en **Apariencia > Menús**. |
| Los cambios no se ven | Recarga con **Ctrl/Cmd + Shift + R** para saltarte la memoria del navegador. |
| La IA cambió cosas que no pediste | Vuelve al último commit y repite el pedido diciendo "no cambies nada más". |

**Para volver al último commit** (descarta lo que no guardaste en el archivo):

```bash
git restore nombre-del-archivo.php
```

## Reglas para trabajar

- Trabaja **solo** en Antigravity. No edites archivos del tema desde el panel de WordPress.
- No modifiques `functions.php`.
- Entiende lo que te da la IA: si no sabes qué hace una parte, pregúntale y anótalo.
- Nunca pegues contraseñas ni claves en el chat de la IA.

## Qué debes tener al terminar

- Tu tema con la identidad aplicada y tu home armado, con commits por cada paso.
- Una captura del home en móvil y otra en escritorio (te sirven para tu avance).

## Preguntas para el inicio de la clase

1. ¿Dónde pones los colores y las tipografías de tu marca?
2. ¿Qué haces si la IA te devuelve un archivo y el sitio queda en blanco?
3. ¿Qué archivo es tu home y qué ajuste de WordPress lo activa?
