# Kofran Joyería · tema propio

Tema clásico de WordPress para [Joyas Kofran](https://joyaskofran.infinityfree.me/), hecho a partir de `tema-base/`.

- **Colores y tipografías:** del `DESIGN.md` del Parcial 02 (azul #1F4E79, plata #C9CDD3, fondo #FAF8F5; Cormorant Garamond e Inter).
- **Imágenes del tema:** `assets/img/logo-kofran.jpg` (header) y `assets/img/portada-anillos.jpg` (portada del home).

| Archivo | Qué hace |
|---|---|
| `style.css` | Nombre del tema, variables de color y tipografía, y todos los estilos |
| `functions.php` | Menú, imagen destacada y carga del CSS (sin cambios respecto de `tema-base/`) |
| `header.php` | Barra de confianza, logo y menú principal |
| `footer.php` | Descripción de la marca, menú e Instagram |
| `front-page.php` | Home: portada, beneficios, tipos de pieza, texto de Inicio, últimas entradas y llamada a Contacto |
| `index.php` | Página Blog: entradas en tarjetas |
| `single.php` | Una entrada, con imagen destacada y enlace de vuelta al blog |
| `archive.php` | Entradas de una categoría |
| `page.php` | Páginas como Nosotros y Contacto |

## Instalar

1. Comprimir la carpeta `kofran-joyeria/` en un `.zip`.
2. **Apariencia > Temas > Añadir nuevo > Subir tema**, instalar y activar.
3. **Ajustes > Lectura > Una página estática**: Portada = Inicio, Entradas = Blog.
4. **Apariencia > Menús**: crear el menú y asignarlo a «Menú principal».

Probado con WordPress 7.1.4 y PHP 8.4 (InfinityFree).
