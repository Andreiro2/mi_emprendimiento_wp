<?php
/**
 * index.php — lista de entradas (la usa la página Blog) y plantilla de respaldo.
 */
get_header();
?>

<header class="cabecera-pagina">
	<div class="contenedor">
		<span class="etiqueta">Aprende y cuida tus piezas</span>
		<h1><?php echo is_home() && get_option( 'page_for_posts' ) ? esc_html( get_the_title( get_option( 'page_for_posts' ) ) ) : 'Blog'; ?></h1>
		<p class="entrada-meta">Consejos para cuidar tu plata, elegir bien tu talla y encontrar el regalo perfecto.</p>
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
			<p>No hay entradas todavía.</p>
		<?php endif; ?>
	</div>
</section>

<?php get_footer(); ?>
