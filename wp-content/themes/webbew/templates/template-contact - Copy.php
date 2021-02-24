<?php
/**
 * Template Name: Contact
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webbew
 * @since Webbew 1.0
 */

get_header();

?>

<main id="site-content" role="main">

	<section class="section-banner">

		<div class="banner-inner">
			<h1 class="banner-heading">Contact</h1>
		</div>
	</section>

	<section class="contact-wrapper">

		<div class="cs-container contact-inner">

			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-6">
					<?php echo do_shortcode('[contact-form-7 id="16" title="Contact"]'); ?>
				</div>
				<div class="col-md-3">
				</div>

			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>