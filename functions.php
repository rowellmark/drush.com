<?php
/*
 * Register sidebars
 */
function register_ai_child_starter_theme_sidebars() {
	$items = [
		'Header: Logo',
		'Expanded Menu: Logo',
		'Expanded Menu: Contact Info',
		'Home: Popup',
		'Home: Slider',
		'Home: Quick Search',
		'Home: Floating Contact Info',
		'Home: Featured Listings',
		'Home: Services',
		'Home: Welcome',
		'Home: Featured Communities',
		'Home: Exclusive Access',
		'Home: Our Success',
		'Footer: Form',
		'Footer: Logo',
		'Footer: Contact Info',
		'Footer: Disclaimer',
		'Footer: Tagline',
	];

	foreach ($items as $item) {
		if (! empty($item)) {
			register_sidebar([
				'name' => $item,
				'id' => sanitize_title($item),
				'before_widget' => '',
				'after_widget' => '',
				'before_title' => '',
				'after_title' => ''
			]);
		}
	}
}

add_action( 'widgets_init', 'register_ai_child_starter_theme_sidebars', 11 );

/*
 * Enqueue theme styles and scripts
 */
function ai_starter_theme_enqueue_child_assets() {

	wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap');
	wp_enqueue_style('mcustomscrollbar-style', 'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.css');

	/* Enqueue my scripts */
	wp_enqueue_script('mcustomscrollbar-script', 'https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js');
	wp_enqueue_script('custom-double-tap', get_stylesheet_directory_uri(). '/js/aios-double-tap.js');
	wp_enqueue_script('aios-starter-theme-child-script', get_stylesheet_directory_uri(). '/js/scripts.js');

}

add_action( 'wp_enqueue_scripts', 'ai_starter_theme_enqueue_child_assets', 20 );

/*
 * Add custom data attributes to menu items
 */
function ai_starter_theme_add_menu_link_attributes( $atts, $item, $args ) {
	$atts['data-title'] = $item->title;
	return $atts;
}

add_filter( 'nav_menu_link_attributes', 'ai_starter_theme_add_menu_link_attributes', 10, 3 );

/*
 * Add image sizes
 */
//add_image_size('cyclone-slide', 1024, 768, true);

/*
 * Define content width
 */
if ( ! isset( $content_width ) ) {
	$content_width = 960;
}