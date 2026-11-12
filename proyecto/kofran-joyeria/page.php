<?php
/**
 * page.php — una página (Nosotros, Contacto, Garantía y autenticidad, Preguntas frecuentes).
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<header class="cabecera-pagina">
		<div class="contenedor">
			<span class="etiqueta">Joyas Kofran</span>
			<h1><?php the_title(); ?></h1>
		</div>
	</header>

	<article class="lectura">
		<?php the_content(); ?>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
