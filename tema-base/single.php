<?php
/**
 * single.php — una entrada de blog.
 */
get_header();
?>

<section class="seccion">
	<div class="contenedor">
		<?php while ( have_posts() ) : the_post(); ?>
			<article class="entrada">
				<h1><?php the_title(); ?></h1>
				<p class="entrada-meta">
					<?php echo esc_html( get_the_date() ); ?> ·
					<?php the_category( ', ' ); ?>
				</p>

				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>

				<?php the_content(); ?>
			</article>

			<!-- TODO: aquí puedes agregar buscador, categorías y entradas recientes -->

			<?php
			// Comentarios (aquí actúa Akismet).
			if ( comments_open() || get_comments_number() ) {
				comments_template();
			}
			?>
		<?php endwhile; ?>
	</div>
</section>

<?php get_footer(); ?>
