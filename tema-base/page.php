<?php
/**
 * page.php — una página (Sobre nosotros, Contacto, etc.).
 */
get_header();
?>

<section class="seccion">
	<div class="contenedor">
		<?php while ( have_posts() ) : the_post(); ?>
			<article>
				<h1><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
