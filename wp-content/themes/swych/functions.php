<?php
add_filter('show_admin_bar', '__return_false');

add_action('after_setup_theme', 'mytheme_setup');
function mytheme_setup() {
    add_theme_support('custom-logo');
	add_theme_support( 'post-thumbnails' );
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );
function add_theme_scripts() {
	wp_enqueue_style( 'load-fa', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' );
	wp_enqueue_script( 'flip', 'https://cdn.rawgit.com/nnattawat/flip/master/dist/jquery.flip.min.js', array ( 'jquery' ), time(), true );
  	wp_enqueue_style( 'style', get_stylesheet_uri() );
  	wp_enqueue_script( 'script', get_template_directory_uri().'/js/script.js', array ( 'jquery' ), 1.1, true);

}


function register_my_menus() {
  register_nav_menus(
    array(
      'header_menu' => __( 'Header Menu' ),
      'product_menu' => __( 'Product Menu' ),
			'company_menu' => __( 'Company Menu' ),
			'legal_menu' => __( 'Legal Menu' ),
			'learn_more_menu' => __( 'Learn More Menu' ),
    )
  );
}
add_action( 'init', 'register_my_menus' );


define('ACF_EARLY_ACCESS', '5');