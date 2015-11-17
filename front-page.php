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

		<style>
			#primary-menu li:nth-child(1) a {
				color: #2C97D3;
			}
		</style>

		<!--Slideshow-->
		<div id="slideshow-wrap">
		<input type="radio" id="slideshow-button1" class="slideshow-button" name="slideshow-control" checked="checked" />
		<input type="radio" id="slideshow-button2"class="slideshow-button" name="slideshow-control" />
		<input type="radio" id="slideshow-button3" class="slideshow-button" name="slideshow-control" />
			<div id="slideshow">
				<div class="slideshow-slide">
					<p class="slideshow-info">GET THE EXPERIENCE IN YOUR HOME</p>
					<a id="slideshow-shop-button" href="<?php echo get_site_url() ?>/wp-content/themes/home-skape/shop.php">
						<p>SHOP</p>
					</a>
					<img class="slideshow-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/slide1.JPG" />
				</div>
				<div class="slideshow-slide">
					<img class="slideshow-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/slide2.JPG" />
				</div>
				<div class="slideshow-slide">
					<img class="slideshow-img" src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/slide3.JPG" />
				</div>
			</div>
		</div>

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
				<p>Homeskape is a startup company made in 1994 and this is a lot of content that we need to talk to the content team about. They still need to do this, so this is what we've got until they get it done.</p>
			</div>
			<img src="<?php echo get_site_url() ?>/wp-content/themes/home-skape/img/logo.png">
		</div>

		

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
