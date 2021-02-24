<?php
/**
 * Template Name: About
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
			<h1 class="banner-heading">About</h1>
		</div>
	</section>

	<section class="about-wrapper">

		<div class="cs-container about-inner">

			<div class="row justify-content-center">

				<div class="col-lg-6">

					<div class="about-content">
						<?php echo $post->post_content; ?>
					</div>
				</div>

				<div class="col-lg-6 col-md-8">
					<img src="//webbew.in/wp-content/uploads/2020/09/about.jpg" />
				</div>
			</div>
		</div>
	</section>

	<section class="activity-wrapper">

		<div class="cs-container activity-inner text-center">

			<div class="row">

				<div class="col-12">

					<h2 class="section-title">Facts</h2>
					<p class="section-subtitle">Lorem ipsum dolor sit amet.</p>
				</div>
			</div>

			<div class="row">

				<div class="col-md-4">

					<div class="activity-data">

						<span class="activity-icon color-1 d-flex align-items-center justify-content-center">
							<i class="fa fa-envelope"></i>
						</span>

						<div class="activity-details">
							<h3>Emails</h3>

							<p>150</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="activity-data">

						<span class="activity-icon color-2 d-flex align-items-center justify-content-center">
							<i class="fa fa-leaf"></i>
						</span>

						<div class="activity-details">
							<h3>Leaves</h3>

							<p>3</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="activity-data">

						<span class="activity-icon color-3 d-flex align-items-center justify-content-center">
							<i class="fa fa-coffee"></i>
						</span>

						<div class="activity-details">
							<h3>Coffees</h3>

							<p>800</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="testimonials-wrapper">

		<div class="cs-container testimonials-inner">

			<div class="row text-center">

				<div class="col-12">
					<h2 class="section-title">Testimonials</h2>
					<p class="section-subtitle">See what our clients say about us.</p>
				</div>
			</div>

			<div class="row">

				<div class="col-12">

					<div class="testimonials-items">

						<div class="testimonials-item">

							<div class="user-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/sharad-saxena.jpg');">
								<span class="user-quote d-flex justify-content-center align-items-center">
									<i class="fas fa-quote-left"></i>
								</span>
							</div>

							<div class="user-text">
								<p class="user-content">We would like to express our satisfaction on the cooperation regarding the development of our website. We are satisfied with the solution given to us and with the communication flow through the project. We look forward to working with them in future projects.</p>

								<p class="user-name">Sharad Saxena</p>
								<p class="user-position">Founder, Visutra</p>
							</div>
						</div>

						<div class="testimonials-item">

							<div class="user-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/sumit-kumar.jpg');">
								<span class="user-quote d-flex justify-content-center align-items-center">
									<i class="fas fa-quote-left"></i>
								</span>
							</div>

							<div class="user-text">
								<p class="user-content">Just wanted to let you know that our client is very happy with the work. I know that the deadlines were very strict, but thanks to your managing capabilities, everything went smooth! Keep up the good work and I'm looking forward to a long partnership!</p>

								<p class="user-name">Sumit Kumar</p>
								<p class="user-position">Project Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?>