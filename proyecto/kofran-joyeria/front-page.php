<?php
/**
 * front-page.php — el HOME de Joyas Kofran.
 * Secciones según el prototipo de Stitch: portada, beneficios, tipos de pieza,
 * texto de la página Inicio, últimas entradas y llamada a la acción.
 */
get_header();
?>

<!-- SECCIÓN 1: portada -->
<section class="seccion portada">
	<div class="contenedor">
		<div>
			<span class="etiqueta">Plata ley 925 con garantía</span>
			<h1>Plata ley 925 que no pasa de moda</h1>
			<p>Anillos, cadenas, aros, pulseras y dijes para darte un gusto o regalar bien, con 6 meses de garantía y atención cercana.</p>
			<div class="botones">
				<a class="boton" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">Pide asesoría</a>
				<a class="boton boton-secundario" href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Ideas para regalar</a>
			</div>
		</div>
		<div class="portada-imagen">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/portada-anillos.jpg' ); ?>" alt="Anillos de plata 925 Joyas Kofran en mano exhibidora" width="900" height="1200">
		</div>
	</div>
</section>

<!-- SECCIÓN 2: beneficios -->
<section class="seccion seccion-destacada">
	<div class="contenedor">
		<div class="seccion-titulo">
			<span class="etiqueta">Por qué Kofran</span>
			<h2>Comprar joyas online, con confianza</h2>
		</div>
		<div class="grilla grilla-3">
			<div class="tarjeta">
				<h3>Plata ley 925</h3>
				<p>Trabajamos solo con plata ley 925, el estándar de la plata fina.</p>
			</div>
			<div class="tarjeta">
				<h3>6 meses de garantía</h3>
				<p>Cada pieza está respaldada por 6 meses de garantía.</p>
			</div>
			<div class="tarjeta">
				<h3>Atención cercana</h3>
				<p>Te ayudamos a elegir la talla, el largo o el regalo, antes y después de tu compra.</p>
			</div>
		</div>
	</div>
</section>

<!-- SECCIÓN 3: tipos de pieza -->
<section class="seccion">
	<div class="contenedor">
		<div class="seccion-titulo">
			<span class="etiqueta">Variedad de joyas</span>
			<h2>Elige por tipo de pieza</h2>
			<p>Encuentra la joya ideal para tu día a día o para un regalo especial.</p>
		</div>
		<div class="grilla grilla-5">
			<div class="categoria">Anillos</div>
			<div class="categoria">Cadenas y collares</div>
			<div class="categoria">Aros</div>
			<div class="categoria">Pulseras</div>
			<div class="categoria">Dijes</div>
		</div>
	</div>
</section>

<!-- SECCIÓN 4: texto de la página Inicio (se edita desde WordPress) -->
<?php while ( have_posts() ) : the_post(); ?>
	<?php if ( get_the_content() ) : ?>
		<section class="seccion seccion-destacada">
			<div class="contenedor contenido-inicio">
				<?php the_content(); ?>
			</div>
		</section>
	<?php endif; ?>
<?php endwhile; ?>

<!-- SECCIÓN 5: últimas entradas del blog -->
<section class="seccion">
	<div class="contenedor">
		<div class="seccion-titulo">
			<span class="etiqueta">Aprende y cuida tus piezas</span>
			<h2>Últimas entradas del blog</h2>
		</div>
		<div class="grilla grilla-3">
			<?php
			$ultimas = new WP_Query( array( 'posts_per_page' => 3 ) );
			if ( $ultimas->have_posts() ) :
				while ( $ultimas->have_posts() ) :
					$ultimas->the_post();
					?>
					<article class="entrada-tarjeta">
						<?php if ( has_post_thumbnail() ) : ?>
							<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail( 'medium_large' ); ?></a>
						<?php endif; ?>
						<div class="entrada-tarjeta-texto">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<?php the_excerpt(); ?>
							<a class="leer-mas" href="<?php the_permalink(); ?>">Leer artículo →</a>
						</div>
					</article>
					<?php
				endwhile;
				wp_reset_postdata();
			endif;
			?>
		</div>
	</div>
</section>

<!-- SECCIÓN 6: llamada a la acción -->
<section class="seccion llamada">
	<div class="contenedor">
		<h2>¿Dudas con tu talla o con un regalo?</h2>
		<p>Escríbenos y te ayudamos a elegir la joya correcta.</p>
		<a class="boton" href="<?php echo esc_url( home_url( '/contacto/' ) ); ?>">Ir a Contacto</a>
	</div>
</section>

<?php get_footer(); ?>
