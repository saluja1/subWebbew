<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">

		<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/favicon-16x16.png">
		<link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/site.webmanifest">
		<link rel="mask-icon" href="<?php echo get_template_directory_uri(); ?>/assets/favicon/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<meta name="theme-color" content="#ffffff">


		<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js" async></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" media="none">
	    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet" media="none">

		<?php wp_head(); ?>

		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5f703f4bf0e7167d00141b90/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	</head>

	<body <?php body_class(); ?>>
		<div class="circle"></div>
		<div id="scroll-bar"></div>

		<div class="nav-bar">
			<div class="toggle-menu">
				<div class="line line1"></div>
				<div class="line line2"></div>
				<div class="line line3"></div>
			</div>
			<div class="nav-list">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=> false, 'menu_class'=> 'overlay-menus', 'menu_id'=> 'overlay-menus')); ?>
				<ul class="social-icons">
					<li><a href="https://www.facebook.com/Webbew-Technology"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/Webbew-Technology"><i class="fa fa-instagram"></i></a></li>
					<li><a href="https://www.twitter.com/Webbew-Technology"><i class="fa fa-twitter"></i></a></li>
					<li><a href="https://www.linkedin.com/Webbew-Technology"><i class="fa fa-linkedin"></i></a></li>
				</ul>
			</div>
		</div>



		<div class="cover-menu">
			<div class="cover-inner">
				<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=> false, 'menu_class'=> 'overlay-menus', 'menu_id'=> 'overlay-menus')); ?>
			</div>
		</div>

		<header class="brand-header">

			<div class="cs-container">

				<div class="row align-items-center">

					<div class="col-6 col-md-4">
					<?php 
						$custom_logo_id = get_theme_mod( 'custom_logo' );
						$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
					?>
						<a class="brand-logo" href="<?php echo site_url(); ?>"> <img src="<?php echo $image[0]; ?> " alt="Webbew"> </a>
					</div>

					<div class="col-md-8 d-none d-sm-none d-md-block">

						<nav class="brand-navigation">

							<?php wp_nav_menu(array('theme_location' => 'primary', 'container'=> false, 'menu_class'=> 'brand-menus', 'menu_id'=> 'brand-menus')); ?>
						</nav>
					</div>
					<div class="col-6 d-block d-sm-none d-md-none d-lg-none text-right">

						<a class="hamburger-menu" href="#">
							<span></span>
							<span></span>
							<span></span>
						</a>
					</div>
				</div>
			</div>
		</header>