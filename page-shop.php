<?php
/*
 * Template Name: Shop Page
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<style>
			#primary-menu li:nth-child(4) a {
				color: #2C97D3;
			}
		</style>

			<div id="shop-wrapper">
				<h2>FIND THE RIGHT <i>SCENERY</i></h2>
				<?php $loop = new WP_Query( array( 'post_type' => 'product' ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>

				<?php $image = get_field("product_image"); ?>
				<?php $width = get_field("product_width"); ?>
				<?php $height = get_field("product_height"); ?>
				<?php $price = get_field("product_price"); ?>

					<div class="shop-item-wrapper">
						<img src="<?php echo $image; ?>" class="shop-item-image" />
						<h4 class="shop-item-name"><?php echo get_the_title(); ?></h4>
						<p class="shop-item-info"><?php echo $width; ?> x <?php echo $height; ?></p>
						<p class="shop-item-info">$<?php echo $price; ?></p>
						<a class="shop-item-button" href="#">ADD TO CART</a>
					</div>

				<?php endwhile; wp_reset_query(); ?>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>