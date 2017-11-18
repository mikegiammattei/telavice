<?php

/** functions for to include in the head section of the code  */

define("THEME_DIR", get_template_directory_uri());

/*--- REMOVE GENERATOR META TAG ---*/
remove_action('wp_head', 'wp_generator');


// ENQUEUE SCRIPTS
function enqueue_scripts() {


	/** REGISTER the site's main.js **/
	wp_register_script( 'main-script', THEME_DIR . '/js/main.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'main-script' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

