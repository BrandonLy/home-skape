<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Homeskape
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div id="footer-title">
			<img id="footer-logo" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/logo.png">
			<h6>HOMESKAPE</h6>
		</div>
		<nav id="footer-nav" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>
		<div class="site-info">
			<p id="created-by">Website created by <a href="">Studio C</a></p>
			<p id="copyright">copyright 2014 Homeskape</p>
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'home-skape' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'home-skape' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'home-skape' ), 'home-skape', '<a href="http://swcta-studioc.github.io" rel="designer">StudioC</a>' ); ?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
