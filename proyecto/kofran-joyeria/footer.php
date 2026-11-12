</main>

<footer class="sitio-footer">
	<div class="contenedor">
		<div>
			<h3>Joyas Kofran</h3>
			<p>Joyas de plata ley 925 con 6 meses de garantía, desde Valparaíso. Te acompañamos para que elijas la joya que más te guste o el regalo perfecto.</p>
		</div>

		<div>
			<h3>Navega</h3>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'principal',
				'container'      => false,
				'fallback_cb'    => false,
				'depth'          => 1,
			) );
			?>
		</div>

		<div>
			<h3>Síguenos</h3>
			<ul>
				<li><a href="https://www.instagram.com/joyaskofran/" target="_blank" rel="noopener">Instagram @joyaskofran</a></li>
			</ul>
		</div>

		<p class="footer-legal">&copy; <?php echo esc_html( date( 'Y' ) ); ?> Joyas Kofran · Plata ley 925</p>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
