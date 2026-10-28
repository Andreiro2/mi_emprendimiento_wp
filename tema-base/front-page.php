<?php
/**
 * front-page.php — el HOME del sitio.
 * Aquí reconstruyes las secciones de tu prototipo, de arriba hacia abajo.
 * Se muestra si en Ajustes > Lectura eliges "Una página estática" como página de inicio.
 */
get_header();
?>

<!-- SECCIÓN 1: portada (imagen principal, título y botón) -->
<section class="seccion">
	<div class="contenedor">
		<h1>TODO: titular de tu sitio</h1>
		<p>TODO: una frase que explique qué ofreces y a quién.</p>
		<a class="boton" href="#">TODO: llamada a la acción</a>
	</div>
</section>

<!-- SECCIÓN 2: destacados -->
<section class="seccion seccion-destacada">
	<div class="contenedor">
		<h2>TODO: destacados</h2>
	</div>
</section>

<!-- SECCIÓN 3: últimas entradas del blog -->
<section class="seccion">
	<div class="contenedor">
		<h2>Últimas entradas</h2>
		<?php
		$ultimas = new WP_Query( array( 'posts_per_page' => 3 ) );
		if ( $ultimas->have_posts() ) :
			while ( $ultimas->have_posts() ) :
				$ultimas->the_post();
				?>
				<article class="entrada">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php the_excerpt(); ?>
				</article>
				<?php
			endwhile;
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>

<?php get_footer(); ?>
