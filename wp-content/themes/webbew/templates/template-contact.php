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

	<section class="section-banner" id="particle">

		<div class="banner-inner">
			<h1 class="banner-heading">Contact</h1>
		</div>
	</section>

    <section class="contactUs" id="contactUs">
		<div class="contactUs-form">
			<div class="banner-content">
				<p>GET IN TOUCH</p>
				<p>We work with ideas that inspire, engage and excite. Ideas that challenge convention and shape the trends. Through our awe-inspiring personal touch, we aim to make users fall in love with your brand.</p>
				<p>Let's talk about what we can develop together.</p>

			</div>
			<?php echo do_shortcode('[contact-form-7 id="16" title="Contact"]'); ?>
		</div>
    </section>

    <section class="contactUsSocial" id="contactUsSocial">
		<div class="banner-content text-center">
			<h2>Choose your medium to contact</h2>
		</div>
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5>Lets have a cup of coffee</h5>					
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="social-icons">					
						<li>
							<address>
								<h5>6, RD City Center, Hisar, Haryana</h5>
								<span>Pincode: 125001</span>
							</address>					
	                    </li>
					</ul>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5>Contact us on social media</h5>					
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="social-icons">
						<li><a href="https://www.facebook.com/Webbew-Technology"><i class="fa fa-facebook"></i></a></li>
						<li><a href="https://www.twitter.com/Webbew-Technology"><i class="fa fa-twitter"></i></a></li>
						<li><a href="https://www.linkedin.com/Webbew-Technology"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="https://www.instagram.com/Webbew-Technology"><i class="fa fa-instagram"></i></a></li>
					</ul>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5>Lets have a call</h5>					
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="social-icons">
						<li><a href="tel:9996847294"><i class="fa fa-phone"></i> 9996847294</a></li>
						<li><a href="tel:8930087838"><i class="fa fa-phone"></i> 8930087838</a></li>
					</ul>					
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<h5>Write a mail to us</h5>					
				</div>

				<div class="col-lg-6 col-md-6 col-sm-12">
					<ul class="social-icons">
						<li><a href="mailto:info@webbew.in"><i class="fa fa-envelope"></i> info@webbew.in</a></li>
						<li><a href="mailto:support@webbew.in"><i class="fa fa-envelope"></i> support@webbew.in</a></li>
					</ul>					
				</div>
			</div>

		</div>			
	</section>

</main>

<?php get_footer(); ?>