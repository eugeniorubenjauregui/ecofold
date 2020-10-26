<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package EcoFold
 */

?>

<footer id="colophon" class="site-footer">
	<div class="site-info">
		<h2>Contacto</h2>
		<div class="logo"><img src="<?php bloginfo('template_directory'); ?>/img/SVG/logo-ecofold.svg" alt="Ecofold" width="140" /></div>
		<div class="info">
			<ul>
				<li><a href="mailto:info@ecofold.com" target="_blank">info@ecofold.com</a></li>
				<li>Buenos Aires, Argentina</li>
				<li><a href="tel:54 9 1158726353" target="_blank">+54 9 1158726353 / +54 91121656035</a></li>
			</ul>
			<div>&copy; <?= date('Y') ?> Estudio Penta | Avenida Del Libertador 1000 Vicente López, B1638 BEV, Provincia de Buenos Aires | Argentina</div>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script>
	AOS.init({
		once: true, // whether animation should happen only once - while scrolling down
	});
</script>
</body>

</html>