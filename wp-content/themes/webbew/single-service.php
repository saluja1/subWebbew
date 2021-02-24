<?php

get_header();


$service_icon = get_field('icon_class', $post->ID, false);
$service_intro = get_field('service_intro', $post->ID, false);
$services_we_offer = get_field('services_we_offer', $post->ID, false);

?>

	<main id="site-content" role="main">

		<section class="section-banner" id="particle">

			<div class="banner-inner">

				<h1 class="banner-heading"><?php echo the_title(); ?> </strong>
	            </h1>
			</div>
		</section>
		<section class="portfolio-slider">
			<div class="container">
				<div class="row">
					<div class="col-md-12">		
						<div class="portfolio-items">
							<div class="portfolio-item">
								<img alt="Webbew" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-slide-2.jpg">
							</div>
							<div class="portfolio-item">
								<img alt="Webbew" src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-slide-1.jpg">
							</div>
						</div>
					</div>
				</div>
			</div>

		</section>


		<section class="agency-grow">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="Ctable">
							<div class="Vmiddle">
								<?php echo $service_icon; ?>
							</div>
						</div>
					</div>

					<div class="col-md-8">
						<div class="heading-content">
							<?php echo $service_intro; ?>	
						</div>
					</div>
				</div>
			</div>
		</section>


		<section class="our-service-section">
			<div class="container">
				<?php echo $services_we_offer; ?>
			</div>
		</section>

		<section class="expertiseSection">
			<div class="container">
				<div class="heading-content">
					<h2 class="section-title">Our Expertise <i class="fa fa-cogs" style="font-size: 48px;"></i></h2>
				</div>
				<div class="block-lists">
					<div class="single-block">
						<div class="row">
							<div class="col-md-2">
								<div class="Ctable">
									<div class="Vmiddle">
										<i class="fa fa-fighter-jet" style="font-size:100px"></i>
									</div>
								</div>
							</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-9">
								<div class="block-content">
									<h5>Providing Speed &amp; Performance</h5>
									<p>All the websites that we develop are super-fast and highly optimized. We ensure all the best practices are followed throughout the custom development process, which improves overall user engagement and conversion.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="single-block">
						<div class="row">
							<div class="col-md-2">
								<div class="Ctable">
									<div class="Vmiddle">
										<i class="fa fa-rocket" style="font-size:100px"></i>
									</div>
								</div>
							</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-9">
								<div class="block-content">
									<h5>SEO-Smart Web Solutions</h5>
									<p>Optimized for search engines, our basic SEO implementation includes heading tags, meta tags, image optimization, Alt text, etc., followed by the techniques that allow smoother implementation. This kickstarts marketing without any additional efforts.</p>
								</div>
							</div>


						</div>
					</div>

					<div class="single-block">
						<div class="row">
							<div class="col-md-2">
								<div class="Ctable">
									<div class="Vmiddle">
										<i class="fa fa-paper-plane" style="font-size:100px"></i>
									</div>
								</div>
							</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-9">
								<div class="block-content">
									<h5>Simple, Clean &amp; Functional Websites</h5>
									<p>We use intelligent frameworks. Our coding practices are well commented with universally accepted naming conventions which translate to easy use worldwide. That’s the first thing you’d expect from a trustworthy Website Development Company.</p>
								</div>
							</div>


						</div>
					</div>

					<div class="single-block">
						<div class="row">
							<div class="col-md-2">
								<div class="Ctable">
									<div class="Vmiddle">
										<i class="fa fa-bicycle" style="font-size:100px"></i>
									</div>
								</div>
							</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-9">
								<div class="block-content">
									<h5>Low-Maintenance</h5>
									<p>We follow industry best practices for our website development services, removing any hardcoded gaps or unethical customisations. This ensures that our sites are easy to run and maintain.</p>
								</div>
							</div>

						</div>
					</div>

					<div class="single-block">
						<div class="row">
							<div class="col-md-2 .col-md-offset-1">
								<div class="Ctable">
									<div class="Vmiddle">
										<i class="fas fa-truck-pickup" style="font-size: 100px;"></i>
									</div>
								</div>
							</div>
							<div class="col-md-1">
							</div>
							<div class="col-md-9">
								<div class="block-content">
									<h5>Seamlessly Upgradable &amp; Secure</h5>
									<p>Our websites are easily upgradable without any disruption in their previous functionality. We use the highest security techniques to ensure that the site is safe from any bot attacks. We follow correct ﬁle permissions, spam protection, form validations, conﬁguration settings, etc., to ensure that the website remains safe and secured.</p>
								</div>
							</div>

						</div>
					</div>

				</div>
				<div class="callToAction text-center">
					<a class="btn btn-cta callToActionBtn" href="<?php echo get_site_url(); ?>/contact/">Lets talk about your idea</a>
				</div>
			</div>

		</section>

	</main>

<?php get_footer(); ?>