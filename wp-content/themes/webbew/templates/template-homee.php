<?php
/**
 * Template Name: Homee
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

			<h1 class="banner-heading">We love to <strong class="typewrite" data-period="4000" data-type='["Explore.", "Capture.", "Develop."]'></strong>
            </h1>

			<p class="banner-description">Young minds reshaping the future of Ecommerce Technology.</p>
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


    <section class="section" id="about2">
        <div class="container">
            <div class="row">
                <div class="left-text col-lg-5 col-md-12 col-sm-12">
                    <div class="left-heading">
                        <h5>About Webbew</h5>
                    </div>
                    <p>With a motive to empower this technology-driven world WEBBEW is all set to commence its digital transformation journey.</p>
                    <ul>
                        <li>
                            <div class="text">
                                <h6>Who we are</h6>
                                <p>Our team consists of passionate design and expert development professionals with a combined experience of more than 30 years.</p>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                <h6>What we do</h6>
                                <p>WEBBEW is here to accelerate your innovations and therefore contributing to global development.</p>
                            </div>
                        </li>
                        <li>
                            <div class="text">
                                <h6>Our Mission</h6>
                                <p>WEBBEW strives to open the doors of endless opportunities for everyone.</a></p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="right-image col-lg-7 col-md-12 col-sm-12 mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                    <img alt="Webbew" src="<?php echo get_template_directory_uri(); ?>/assets/images/about.png" class="rounded img-fluid d-block mx-auto">
                </div>
            </div>
        </div>
    </section>

	<section class="servicesSection">
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

	<section class="workProcess" id="work-process">
        <div class="workProcess-content">
            <div class="container">
                <div class="row">
                    <div class="offset-lg-3 col-lg-6">
                        <div class="info">
                            <h1>Our Work Process</h1>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-handshake" style="font-size: 48px;"></i>
                            <strong>Meet</strong>
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-tasks" style="font-size: 48px;"></i>
                            <strong>Plan</strong>
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-file-code" style="font-size: 48px;"></i>
                            <strong>Design & Development</strong>
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-check" style="font-size: 48px;"></i>
                            <strong>Testing</strong>
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-rocket" style="font-size: 48px;"></i>
                            <strong>Launch</strong>
                        </span>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-6 col-6">
                        <span class="workProcess-box">
						    <i class="fas fa-ad" style="font-size: 48px;"></i>
                            <strong>Digital Mraketing</strong>
                        </span>
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


	<section class="section" id="discussProject">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12">
					<div class="Ctable">
						<div class="Vmiddle">
							<i class="fas fa-comment-dots" style="font-size:100px"></i>
						</div>
					</div>
                </div>
                <div class="col-md-6 col-sm-12">
	                <div class="leftContent">                	
		                <div class="leftContentInner">                	
		                    <div class="left-heading">
		                        <h2 class="section-title">Let’s discuss about your project</h2>
		                    </div>
		                    <div class="left-text">
		                        <p>We are always glad to talk about your project with you, whether by phone or email. We're sure you'll agree that preparation is an essential first step for any project. Answering the questions below before we begin will help us anticipate your needs and prepare to help you better. If you prefer to discuss these questions together on the phone or via email, we can do that.<br>
		                        None of the questions are required, but we encourage you to share as much as possible about the project so we can provide you with the most accurate project plan and estimate.</p>
		                    </div>
						</div>
	                </div>
                </div>
            </div>
        </div>
        <br> <br>
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-1 order-md-2">
					<div class="Ctable">
						<div class="Vmiddle">
							<i class="fas fa-hands-helping" style="font-size:100px"></i>
						</div>
					</div>
                </div>
                <div class="col-md-6 order-2 order-md-1">
	                <div class="leftContent">                	
		                <div class="leftContentInner">                	
		                    <div class="left-heading">
		                        <h2 class="section-title">We can help you to grow your business</h2>
		                    </div>
		                    <div class="left-text">
		                        <p>Interested in starting a new project with Webbew Technologies? We’d love to discuss it with you. Please provide us with some background using the form below, and we will follow up with you right away. If you have a general inquiry you can submit that through our general <a href="<?php echo get_site_url(); ?>/contact/"> <span style="color: #000000; text-decoration: underline; text-transform: capitalize; font-style: italic;">contact</span></a> page. Let’s begin!</p>
		                    </div>
		                </div>
		            </div>        
                </div>

            </div>
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

</main>

<?php get_footer(); ?>