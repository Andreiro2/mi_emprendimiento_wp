<?php
/**
 * archive.php — listado de entradas de una categoría, etiqueta o fecha.
 */
get_header();
?>

<section class="seccion">
	<div class="contenedor">
		<h1><?php the_archive_title(); ?></h1>
		<?php the_archive_description(); ?>

		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<article class="entrada">
					<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<p class="entrada-meta"><?php echo esc_html( get_the_date() ); ?></p>
					<?php the_excerpt(); ?>
				</article>
			<?php endwhile; ?>

			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p>No hay entradas en esta categoría.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
