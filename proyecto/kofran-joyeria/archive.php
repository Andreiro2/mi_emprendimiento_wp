<?php
/**
 * archive.php — listado de entradas de una categoría, etiqueta o fecha.
 */
get_header();
?>

<header class="cabecera-pagina">
	<div class="contenedor">
		<span class="etiqueta">Blog</span>
		<h1><?php echo esc_html( wp_strip_all_tags( get_the_archive_title() ) ); ?></h1>
		<?php the_archive_description( '<div class="entrada-meta">', '</div>' ); ?>
	</div>
</header>

<section class="seccion">
	<div class="contenedor">
		<?php if ( have_posts() ) : ?>
			<div class="grilla grilla-3">
				<?php while ( have_posts() ) : the_post(); ?>
					<article class="entrada-tarjeta">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<div class="entrada-tarjeta-texto">
							<p class="entrada-meta"><?php echo esc_html( get_the_date() ); ?></p>
							<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
							<?php the_excerpt(); ?>
							<a class="leer-mas" href="<?php the_permalink(); ?>">Leer artículo →</a>
						</div>
					</article>
				<?php endwhile; ?>
			</div>

			<?php the_posts_pagination(); ?>
		<?php else : ?>
			<p>No hay entradas en esta categoría.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
