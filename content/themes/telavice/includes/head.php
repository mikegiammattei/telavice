<?php

/** Constants */
require_once(  get_template_directory() . '/includes/config.php');

/** functions for to include in the head section of the code  */
/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');


// ENQUEUE SCRIPTS
function enqueue_scripts() {

	/** Adds the theme's style sheet head */
	wp_enqueue_style( 'style', get_stylesheet_uri() );
	/** REGISTER the site's main.js **/
	wp_register_script( 'main-script', THEME_DIR_URL . '/js/main.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'main-script' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

