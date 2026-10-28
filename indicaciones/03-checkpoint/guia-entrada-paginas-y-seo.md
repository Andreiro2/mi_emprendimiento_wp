# Guía: entrada de blog, páginas y SEO

**Para leer antes de la clase.** Primero lee *Escribir para la web* (`escribir-para-la-web.md`) y mira el video de Yoast SEO (versión gratis) que te asignó el curso.

## Qué vas a lograr

- **Hito 3:** que tus entradas y tus categorías tengan el diseño de tu sitio, con buscador, categorías y entradas recientes.
- **Hito 4:** tus páginas **Inicio** y **Contacto** (y las otras que elegiste) con el mismo estilo, y tus 3 entradas con SEO básico.

## La regla de oro (igual que antes)

**Un cambio a la vez. Si funciona, commit. Si se rompe, vuelves al último commit.** Trabaja solo en Antigravity y no toques `functions.php`.

---

## Hito 3 · Entrada de blog y categorías

### Paso 1. Dale diseño a la entrada (`single.php`)

Abre `single.php`. Ahí están el título, la fecha, las categorías, la imagen destacada y el contenido. Ajusta los estilos en `style.css` (tamaño del título, ancho del texto, espacio entre párrafos). Pide a la IA un cambio por vez.

**Comprueba:** abre una entrada y revisa que se vea como tu prototipo. → **commit**.

### Paso 2. Dale diseño al listado por categoría (`archive.php`)

Haz clic en una categoría en el sitio. Debes ver el listado de sus entradas con el diseño de tu tema. Ajusta `archive.php` y `style.css`. → **commit**.

### Paso 3. Buscador, categorías y entradas recientes

Estos eran los antiguos "widgets": bloques de contenido que ayudan a navegar. Pégalos en `single.php`, **después del `</article>`**, dentro del ciclo:

```php
<aside class="lateral">
	<h2>Buscar</h2>
	<?php get_search_form(); ?>

	<h2>Categorías</h2>
	<ul>
		<?php wp_list_categories( array( 'title_li' => '' ) ); ?>
	</ul>

	<h2>Entradas recientes</h2>
	<ul>
		<?php
		$recientes = new WP_Query( array( 'posts_per_page' => 5 ) );
		while ( $recientes->have_posts() ) :
			$recientes->the_post();
			?>
			<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
		<?php endwhile; wp_reset_postdata(); ?>
	</ul>
</aside>
```

Y estilos de partida para ponerla al lado del texto en pantallas grandes:

```css
.lateral { margin-top: 2rem; }
@media (min-width: 900px) {
  .con-lateral { display: grid; grid-template-columns: 2fr 1fr; gap: 2rem; }
}
```

Si quieres dos columnas, envuelve el `<article>` y el `<aside>` en un `<div class="con-lateral">`.

**Comprueba:** en una entrada ves el buscador, la lista de categorías y las últimas entradas. → **commit** `hito 3: entrada con buscador y categorías`.

### Paso 4. Akismet (comentarios sin spam)

Las entradas aceptan comentarios, y los comentarios atraen spam.
1. **Plugins > Añadir nuevo** y busca **Akismet**. Instálalo y actívalo.
2. El plugin te guía para obtener una **clave**. Elige el plan **personal o gratuito**. Si te pide pagar, avísame.
3. Comprueba que aparezca "conectado" en los ajustes del plugin.

---

## Hito 4 · Páginas y SEO

### Paso 5. Páginas (`page.php`)

1. Crea la página **Contacto** y las otras páginas que elegiste en tu `decisiones.md` (por ejemplo, Sobre nosotros), con un texto breve. **Inicio** ya la tienes de la guía anterior.
2. Agrégalas a tu menú (**Apariencia > Menús**).
3. Ajusta `page.php` y `style.css` para que se vean como el resto de tu sitio.

El formulario de la página Contacto lo agregas con el plugin de contacto que elegiste.

**Comprueba:** Inicio, Contacto y tus otras páginas se ven bien y están en el menú. → **commit** `hito 4: páginas`.

### Paso 6. Yoast SEO

1. **Plugins > Añadir nuevo > Yoast SEO**: instala y activa. Ignora las ofertas de la versión de pago.
2. Al editar una entrada, verás el panel de Yoast **debajo del texto**. Completa:
   - **Frase clave** (tu palabra clave).
   - **Título SEO**: aparece en Google. Debe llevar la palabra clave y ser claro.
   - **Meta descripción**: una o dos frases que explican la entrada y animan a hacer clic.
   - **URL (slug)**: corta y con la palabra clave, por ejemplo `como-elegir-cafe-de-especialidad`.
3. Revisa los semáforos de **SEO** y **legibilidad**. Son una guía: no tienes que dejar todo en verde, pero sí entender por qué un punto sale en naranja o rojo.

> Los nombres exactos de los campos pueden variar según la versión del plugin.

### Paso 7. Texto alternativo en las imágenes

Cada imagen de tus entradas debe tener un **texto alternativo** que describa lo que muestra (se completa al insertarla). Sirve para accesibilidad y para el SEO.

### Paso 8. Publica tus 3 entradas

Cada una debe cumplir:
- [ ] Título claro, con la palabra clave.
- [ ] Primer párrafo que explica de qué trata.
- [ ] Subtítulos (H2) con sentido.
- [ ] Pertenece a una categoría.
- [ ] Imagen con texto alternativo.
- [ ] Un enlace a otra entrada o página de tu sitio.
- [ ] Una llamada a la acción final.
- [ ] Frase clave, título SEO, meta descripción y URL completados en Yoast.

---

## Cuando algo se rompe

| Qué ves | Qué hacer |
|---|---|
| Pantalla en blanco al pegar el código del buscador | Falta cerrar una llave o una etiqueta PHP. Vuelve al último commit y pega de nuevo el bloque completo. |
| El buscador no muestra resultados | Revisa que tengas entradas publicadas con ese texto. |
| La lista de categorías sale vacía | Solo aparecen categorías que tienen al menos una entrada publicada. |
| Yoast no aparece al editar | Comprueba que el plugin esté activo. |
| La IA cambió cosas que no pediste | `git restore archivo.php` y repite el pedido diciendo "no cambies nada más". |

## Qué debes tener al terminar

- Commits por cada paso (hitos 3 y 4).
- En tu sitio: 3 entradas con SEO, una categoría con su listado, y tus páginas Inicio y Contacto.

## Preguntas para el inicio de la clase

1. ¿Cuál es tu palabra clave y dónde debe aparecer?
2. ¿Qué archivo controla cómo se ve una entrada?
3. ¿Qué diferencia hay entre una entrada y una página?
