<?php
/**
 * Functions
 */

//Require included files
require_once STYLESHEETPATH . '/includes/mbc-theme-class.php';
require_once STYLESHEETPATH . '/includes/post-types.php';
require_once STYLESHEETPATH . '/includes/mbc-hooks.php';
require_once STYLESHEETPATH . '/includes/sidebar-hooks.php';
require_once STYLESHEETPATH . '/includes/diy-single-hooks.php';
require_once STYLESHEETPATH . '/includes/header-hero-image-hooks.php';

/**
 * Load theme styles and scripts
 *
 * @add_action wp_enqueue_scripts
 *
 * @return void
 */
function muw_scripts() {

global $wp_scripts;
	wp_enqueue_style      ( 'muw_bootstrap_css', get_template_directory_uri() . '/css/bootstrap.css' );
	wp_enqueue_style      ( 'muw_main_css',      get_template_directory_uri() . '/css/app.css' );
	wp_register_script    ( 'html5_shiv',    'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js', '', '', false );
	wp_register_script    ( 'respond_js',    'https://oss.maxcdn.com/respond/1.4.2/respond.min.js', '', '', false );
	$wp_scripts->add_data ( 'html5_shiv',    'conditional', 'lt IE 9' );
	$wp_scripts->add_data ( 'respond_js',    'conditional', 'lt IE 9' );
	wp_enqueue_script     ( 'bottstrap_js',  get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '', true );
	wp_enqueue_script     ( 'app_min_js',  get_template_directory_uri() . '/js/app.min.js', array('jquery'), '', true );
	wp_enqueue_script     ( 'app_js',  get_template_directory_uri() . '/js/app.js', array('jquery'), '', true );
}

add_action( 'wp_enqueue_scripts', 'muw_scripts' );

add_filter( 'show_admin_bar', '__return_false' );

add_theme_support( 'post-thumbnails' );

/**
 * add menus
 */
add_theme_support( 'menus' );

function register_theme_menus() {
	register_nav_menus(
		array(
			'header-menu'   => __( 'Header Menu' ),
			'footer-menu'   => __( 'Footer Menu' )
		)
	);
}
add_action( 'init', 'register_theme_menus' );

/**
 * Add an acf options page
 */

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

/**
 * add widgets
 */

function create_widget( $name, $id, $description ) {

register_sidebar(array(
	'name' => __( $name ),   
	'id' => $id, 
	'description'   => __( $description ),
	'before_widget' => '<div class="widget">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3>',
	'after_title'   => '</h3>'
));
}

create_widget( 'Front Page Left', 'front-left', 'Displays on the left of the homepage' );
create_widget( 'Front Page Center', 'front-center', 'Displays in the center of the homepage' );
create_widget( 'Front Page Right', 'front-right', 'Displays on the right of the homepage' );
create_widget( 'Contact Page Right', 'contact-right', 'Displays on the side of contact page with a sidebar.' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {

register_sidebar( array(
	'name'          => 'Home right sidebar',
	'id'            => 'home_right_1',
	'before_widget' => '<div>',
	'after_widget'  => '</div>',
	'before_title'  => '<h2 class="rounded">',
	'after_title'   => '</h2>',
) );
}

add_action( 'widgets_init', 'arphabet_widgets_init' );

add_theme_support( 'post-thumbnails' );

/**
 * Add Options Page ACF 
 */

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Navigation Settings',
		'menu_title'	=> 'Navigation',
		'parent_slug'	=> 'theme-general-settings',
	));

	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Chassis Settings',
		'menu_title'	=> 'Chassis',
		'parent_slug'	=> 'theme-general-settings',
	));

}

/* 
 * google map
 */
function my_acf_google_map_api( $api ){
	$api['key'] = 'AIzaSyCB8_4ty30wN5v3CrH5XEN_QFyDVmWKDnM';
	return $api;
}

add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function my_acf_init() {
	acf_update_setting('google_api_key', 'xxx');
}

add_action('acf/init', 'my_acf_init');

?>







