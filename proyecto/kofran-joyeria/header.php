<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="barra-confianza">
	Plata ley 925 · 6 meses de garantía · Te ayudamos a elegir tu joya
</div>

<header class="sitio-header">
	<div class="contenedor">
		<a class="sitio-marca" href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<img class="sitio-logo" src="<?php echo esc_url( get_template_directory_uri() . '/assets/img/logo-kofran.jpg' ); ?>" alt="Logo Kofran Joyería" width="44" height="44">
			<span class="sitio-titulo">Joyas Kofran</span>
		</a>

		<nav aria-label="Menú principal">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'principal',
				'menu_class'     => 'menu-principal',
				'container'      => false,
				'fallback_cb'    => false,
			) );
			?>
		</nav>
	</div>
</header>

<main>
