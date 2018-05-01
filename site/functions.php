<?php
/**************************************************************
				Theme settings
**************************************************************/
require "theme_setting.php";
/**************************************************************
				Hooks Setup
**************************************************************/
add_action( 'after_setup_theme', 'icon_hairstudio_setup' );
/***************************************************************
			Include Jquery and override wordpress jQuery
***************************************************************/
// include custom jQuery
function shapeSpace_include_custom_jquery() {
	wp_deregister_script('jquery');
	wp_enqueue_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'shapeSpace_include_custom_jquery');
// Set Excerpt length
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
/**************************************************************
				ICON HAIRSTUDIO Setup
**************************************************************/
function icon_hairstudio_setup() {
	// Add Featured Image Support
	add_theme_support('post-thumbnails');
	add_image_size('home-thumb', 715, 449);
	add_theme_support('html5',array('search-form'));
	
	wp_enqueue_style( 'main', get_template_directory_uri() . '/dist/css/style.css', null, '1.0', 'all' );
	// Make sure to not write http/https in googlefont link, security protocall for SSL will not work otherwise
	wp_enqueue_style('googlefonts', '//fonts.googleapis.com/css?family=Roboto:400,500,500i,700,700i');
	// Loads Javascript
	wp_enqueue_script('main', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
	// Enables use of navigation menu.
	register_nav_menu( 'mainmenu', 'Website main navigation' );
	register_nav_menu( 'footer', 'Website footer navigation' );
	// Custom Logo
	add_theme_support('custom-logo', array(
		'width'		=> 600,
		'height'	=> 85,
		'flex-width'	=> true,
		'flex-height'	=> true
		) );	
}
function SearchFilter($query) {
	// If 's' request variable is set but empty
	if (isset($_GET['s']) && empty($_GET['s']) && $query->is_main_query()){
	   $query->is_search = true;
	   $query->is_home = false;
	}
	return $query;
 }
 add_filter('pre_get_posts','SearchFilter');
?>