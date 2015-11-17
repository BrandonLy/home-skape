<?php
/*
 * Template Name: Contact Page
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<style>
			#primary-menu li:nth-child(3) a {
				color: #2C97D3;
			}
		</style>

<div class="contact-wrap">
	<h1 class="page-title">CONTACT US</h1>
		<div class="assetwrap">
			<div class="call-asset">
				<img src="<?php echo get_site_url(); ?>/wp-content/themes/home-skape/img/asset5.png">
					<p>CALL US</p> <!--Phone Number-->
					<p>702.555.5555</p>
			</div>
			<div class="email-asset">
			<img src="<?php echo get_site_url(); ?>/wp-content/themes/home-skape/img/asset6.png">
				<p>EMAIL US</p> <!--Email-->
				<p>Home@gmail.com</p>
			</div>
		</div>
</div>
<div class="section-wrap">
	<h1 class="section-title">FIND US</h1>
</div>
<div class="map-wrap">
	<!--Map Address-->
	<div class="map-locations">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3226.2832713763532!2d-115.24871468531497!3d36.03779198011268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c8c87af578d6b3%3A0xa6bb42c80b094cb4!2sSouthwest+Career+and+Technical+Academy!5e0!3m2!1sen!2sus!4v1445369223445" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<div class="addy">
		<h4>Happy St.</h4>
		<h4>Las Vegas, NV</h4>
		<h4>89119</h4>
		<h4>United States</h4>
	</div>
</div>
<?php get_footer(); ?>
