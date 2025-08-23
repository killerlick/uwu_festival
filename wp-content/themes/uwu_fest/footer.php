<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package uwu_fest
 */

?>

<footer id="colophon" class="site-footer">

	<div class="footer-site-info">
				<?php
				if (function_exists('the_custom_logo')) {
					the_custom_logo();
				}
				?>
		<div class="event-info">
			Célébration de la culture kawaii à Montréal <br>
			22-23 novembre 2025 <br>
			📍9055 St-Hubert, MTL <br>
		</div>
	</div>
	<div class="footer-site-links">
		<?php
		wp_nav_menu(array(
			'theme_location' => 'menu-2',
			'menu_id'        => 'footer-menu',
			'menu_class'     => 'menu-footer'
		));
		?>
	</div>
	<div class="footer-social-links">
		<a href="https://www.facebook.com/uwumtl" target="_blank">
			<i class="fab fa-facebook-f"></i>
		</a>
		<a href="https://www.instagram.com/uwumtl/" target="_blank">
			<i class="fab fa-instagram"></i>
		</a>
	</div>


</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>