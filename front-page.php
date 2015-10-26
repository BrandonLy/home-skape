<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Homeskape
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<!--Slideshow-->
		<div id="slideshow"></div>

		<div id="flavor-wrap">
			<div class="flavor" id="sun">
				<img class="flavor-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/sun.png">
				<p class="flavor-text">LOWER ENERGY</p>
			</div>
			<div class="flavor" id="lock">
				<img class="flavor-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/lock.png">
				<p class="flavor-text">PRIVACY</p>
			</div>
			<div class="flavor" id="tree">
				<img class="flavor-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/tree.png">
				<p class="flavor-text">BEAUTIFUL SCENERY</p>
			</div>
		</div>

		<div id="about-wrap">
			<div id="about">
				<h2 id="about-title">ABOUT US</h2>
				<p>Homeskape is a startup company made in 1994 blah growl hop down the river in a camel girl. Homeskape is a company we are making a website for them I hope they like my filler text because nobody has any content.</p>
			</div>
			<img src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/logo.png">
		</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
