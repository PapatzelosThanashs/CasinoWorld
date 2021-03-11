<?php
 
function custom_theme_assets() {
	wp_enqueue_style( 'style', get_stylesheet_directory_uri().'/css/style.css');
}

 
add_action( 'wp_enqueue_scripts', 'custom_theme_assets' );
register_nav_menus( [ 'primary' => __( 'Primary Menu' ) ,'mobile-menu'=>'Mobile-menu'] );

/*enable widget area*/
function initialize_widgets() {
	register_sidebar( [
		'name' => 'Right Sidebar',
		'id'   => 'rightsidebar'
	] );

	 /*enable second widget area */
	 register_sidebar( [
		'name' => 'Bottom Sidebar',

		'id'   => 'bottomsidebar'
	] );
	
}

add_action( 'widgets_init', 'initialize_widgets' );






/* import custom-widget.php */
require_once('custom-widget.php');

/* burger menu enqueue js code */
function burger_menu() {
     
    wp_enqueue_script( 'open_burger-menu', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array( 'jquery' ) );

  
}
add_action( 'wp_enqueue_scripts', 'burger_menu' );
