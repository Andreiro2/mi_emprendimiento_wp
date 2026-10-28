# Mi Tema Base

Tema de WordPress **en blanco** para partir. Funciona tal como está: al activarlo, el sitio se ve (feo, pero funciona). Tú lo vas completando de a poco.

## Archivos

| Archivo | Qué hace | ¿Lo cambias? |
|---|---|---|
| `style.css` | Nombre del tema y todos los estilos | Sí: variables, header, footer y secciones |
| `functions.php` | Activa menú, imagen destacada y carga el CSS | **No**, salvo que se te indique |
| `header.php` | Cabecera y menú, se repite en todas las páginas | Sí |
| `footer.php` | Pie de página | Sí |
| `front-page.php` | **El home** | Sí: reconstruye tu prototipo |
| `index.php` | Lista de entradas (respaldo) | Poco |
| `single.php` | Una entrada de blog | Sí |
| `archive.php` | Entradas de una categoría | Sí |
| `page.php` | Una página (Sobre, Contacto) | Sí |
| `assets/img/` | Carpeta para tus imágenes (logo, fotos) | Sí |

## Cómo usarlo

1. Copia la carpeta `tema-base/` a `proyecto/mi-tema/`, cámbiale el nombre y edita el encabezado de `style.css` (nombre del tema y autor).
2. Ponla en `wp-content/themes/` de tu sitio en Local WP, o comprímela en `.zip` y súbela en **Apariencia > Temas > Añadir nuevo > Subir tema**.
3. Activa el tema.
4. Para que `front-page.php` sea tu home: **Ajustes > Lectura > Una página estática** y elige una página como inicio.
5. Crea el menú en **Apariencia > Menús** y asígnalo a "Menú principal".

## Reglas

- Se trabaja solo en tus archivos (con Antigravity). No edites plantillas desde el panel de WordPress.
- Un cambio a la vez. Si funciona, haces commit. Si se rompe, vuelves al commit anterior.
- Si ves una pantalla en blanco, es un error de PHP: revisa el último archivo que tocaste.

> Pendiente de probar en Local WP antes de entregarlo a los estudiantes (no se ha probado con WordPress real).
