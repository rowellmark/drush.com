<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta id="viewport-tag" name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<?php if ( has_action( 'aios_seotools_gtm_body' ) ) { do_action('aios_seotools_gtm_body'); } ?>
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Mobile Header") ) : ?><?php endif ?>

	<div id="main-wrapper">


    <?php do_action('aios_landing_page_header'); ?>
    <?php do_action('aios_neighborhoods_header'); ?>


	<header class="header fixed w-100">
		<div class="header-container flex justify-between items-center">


			<div class="header-left">
				
				<div class="logo w-100">
					<a href="<?= do_shortcode('[blogurl]')?>" class="site-name block w-100">
						<img src="<?= do_shortcode('[ai_client_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
					</a>
				</div>

			</div><!-- end of header left -->

			<div class="header-right flex items-center">
				<nav class="navigation">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'nav', 'theme_location' => 'primary-menu', 'menu_class' => 'flex items-center' ) ); ?>
				</nav><!-- end of navigation -->
				<div class="expanded-menu-bttn">
					<span></span>
					<span></span>
					<span></span>
					<i>menu</i>
				</div><!-- end expanded button -->
			</div><!-- end of header right -->

		</div>
	</header>

	<header class="expandedMenuWrapper fixed h-100 w-100">
		<div class="expandedMenuContainer absolute h-100">
			<div class="expandedMenuClose absolute">
				<i class="ai-font-close-c"></i>
				<span>CLOSE</span>
			</div>
			<div class="expandedMenuHolder relative">

				<div class="expandedMenuLogo">
					<a href="<?= do_shortcode('[blogurl]')?>" class="site-name block w-100">
						<img src="<?= do_shortcode('[ai_client_ip_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
					</a>
				</div><!-- end of logo -->
				<nav class="expandedMenuNav">
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_id' => 'expandedNav', 'theme_location' => 'secondary-menu') ); ?>
				</nav><!-- end of navigation -->
				<div class="expandedMenuContactInfo">
					<ul class="flex flex-wrap-wrap justify-between">
						<li>
							<i class="ai-font-location-c"></i>
							<span><?= do_shortcode('[ai_client_address]')?></span>
						</li>
						<li>
							<i class="ai-font-phone"></i>
							<span><?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?></span>
						</li>
						<li>
							<i class="ai-font-clock"></i>
							<span>Mon - Fri 8:30 AM to 5 PM <br>
								Sat - 9 AM to 12 PM</span>
						</li>

						<li>
							<i class="ai-font-envelope-filled-a"></i>
							<span><?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></span>
						</li>

					</ul>
				</div><!-- end of contact info -->
			</div><!-- end of menu holder -->
		</div><!-- end of expanded menu container -->
	</header>

	<main>
		<h2 class="aios-starter-theme-hide-title">Main Content</h2>

		<!-- ip banner goes here -->
    <?php
    if ( ! is_home() && !is_page_template( 'template-homepage.php' ) && is_custom_field_banner( get_queried_object() ) && is_active_sidebar('aios-inner-pages-banner')) {
      dynamic_sidebar('aios-inner-pages-banner');
    }
    ?>
		<!-- ip banner goes here -->


		<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>

		<div id="inner-page-wrapper">
			<div class="container">

		<?php endif ?>
