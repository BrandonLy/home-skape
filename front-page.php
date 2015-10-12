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

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
