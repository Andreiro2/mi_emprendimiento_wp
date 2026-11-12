<?php
/**
 * index.php — plantilla de respaldo: lista de entradas.
 * WordPress la usa cuando no existe una plantilla más específica.
 */
get_header();
?>

<section class="seccion">
	<div class="contenedor">
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
			<p>No hay entradas todavía.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
