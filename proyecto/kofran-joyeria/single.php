<?php
/**
 * single.php — una entrada de blog.
 */
get_header();
?>

<?php while ( have_posts() ) : the_post(); ?>
	<header class="cabecera-pagina">
		<div class="contenedor">
			<span class="etiqueta"><?php echo esc_html( wp_strip_all_tags( get_the_category_list( ', ' ) ) ); ?></span>
			<h1><?php the_title(); ?></h1>
			<p class="entrada-meta"><?php echo esc_html( get_the_date() ); ?></p>
		</div>
	</header>

	<article class="lectura">
		<?php if ( has_post_thumbnail() ) : ?>
			<div class="imagen-destacada"><?php the_post_thumbnail( 'large' ); ?></div>
		<?php endif; ?>

		<?php the_content(); ?>

		<a class="volver" href="<?php echo esc_url( get_permalink( get_option( 'page_for_posts' ) ) ); ?>">← Volver al blog</a>

		<?php // Comentarios: quedan para una fase posterior (funcionalidad «Futuro»). ?>
	</article>
<?php endwhile; ?>

<?php get_footer(); ?>
