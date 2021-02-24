<?php
/**
 * Template Name: Services
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Webbew
 * @since Webbew 1.0
 */

get_header();

$args = array(
	'numberposts' => -1,
	'order' => 'ASC',
	'orderby' => 'menu_order',
	'post_type'   => 'service'
);

$services = get_posts($args);
?>

<main id="site-content" role="main">
	<section class="section-banner" id="particle">

		<div class="banner-inner">
			<h1 class="banner-heading">Services</h1>
		</div>
	</section>

	<section class="servicesSection pt50">
		<div class="services">
			<div class="container">
				<div class="row text-center">
					<div class="col-12">
						<h2 class="section-title">Our services</h2>
						<p class="section-subtitle">WEBBEW offers IT services to enhance not just project but we rather believe in creating a digital experience.</p>
					</div>
				</div>

				<div class="row">

				<?php

					for ($i = 0; $i < count($services); $i++) {

						$readmore = '<a class="readmore" href="'.get_permalink($services[$i]->ID).'"><span>Explore More</span></a>';
						$position = strpos($services[$i]->post_content, ' ', 90);
						$excerpt = substr($services[$i]->post_content, 0, $position);

						$service_icon = get_field('icon_class', $services[$i]->ID, false);

						echo '<div class="col-md-6 col-lg-4 mb-3">
								<div class="box p-5">
									'.$service_icon.'
									<h4>'.$services[$i]->post_title.'</h4>
									<p>'.$excerpt.'</p>
									'.$readmore.'
								</div>	
							</div>';
					}
				?>					
				</div>
			</div>
		</div>		
	</section>




	<section class="activity-wrapper">

		<div class="cs-container activity-inner text-center">

			<div class="row">
				<div class="col-12">
					<h2 class="section-title">Facts</h2>
					<br>
				</div>
			</div>

			<div class="row">

				<div class="col-md-4">

					<div class="activity-data">

						<span class="activity-icon color-1 d-flex align-items-center justify-content-center factsIcon">
							<i class="fa fa-users"></i>
						</span>

						<div class="activity-details">
							<h3>Expert Team</h3>

							<p>10+</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="activity-data">

						<span class="activity-icon color-2 d-flex align-items-center justify-content-center factsIcon">
							<i class="fa fa-tasks"></i>
						</span>

						<div class="activity-details">
							<h3>Projects Delivered</h3>

							<p>20+</p>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="activity-data">

						<span class="activity-icon color-3 d-flex align-items-center justify-content-center factsIcon">
							<i class="fa fa-clock"></i>
						</span>

						<div class="activity-details">
							<h3>Hours</h3>

							<p>2800+</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="faqSection">
		<div class="container">
			<div class="row text-center">
				<div class="col-12">
					<h2 class="section-title">Frequently Asked Questions</h2>
				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<ul class="acc">
						<li>
							<button class="acc_ctrl"><h5>What contracts and agreements do you sign?</h5></button>
							<div class="acc_panel">
							<p>We sign NDA before initial discussions, and final contracts are drawn out in details. We are normally bound by the legal framework of our client's country, and are a registered organization in India.</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>How do we keep ourselves informed about progress?</h5></button>
							<div class="acc_panel">
							<p>We will send you regular project status reports. We use a combination of pre-determined update schedules (normally email) and ad-hoc meetings (usually tele-conferences, or live chat).</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>What is expected from us during the course of the development?</h5></button>
							<div class="acc_panel">
							<p>It depends on the situation. We will ask you to provide some information if necessary.</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>Can I define and enforce our coding standards on your developers?</h5></button>
							<div class="acc_panel">
							<p>Yes. Our developers can follow your coding standards in your favor.</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>Is testing incorporated as a component within your pricing structure?</h5></button>
							<div class="acc_panel">
							<p>Of course, testing is in our pricing structure and we have testing engineers focused on it.</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>Would you replace my developer if I am not satisfied with the performance?</h5></button>
							<div class="acc_panel">
							<p>Yes. We will certainly replace your developer if we see that there really is a shortcoming on the developer’s end.</p>
							</div>
						</li>
						<li>
							<button class="acc_ctrl"><h5>If I hire a developer, does that mean I have that person dedicated only for me?</h5></button>
							<div class="acc_panel">
							<p>Yes. The developer you hire, like all other regular employees, will work full-time (8 hours a day, 5 days a week) dedicating it only to you.</p>
							</div>
						</li>
					</ul>					
					<div class="callToAction text-center">
						<a class="btn btn-cta callToActionBtn" href="<?php echo get_site_url(); ?>/contact/">Lets talk about your idea</a>				
					</div>

				</div>
			</div>

		</div>
	</section>

</main>

<?php get_footer(); ?>