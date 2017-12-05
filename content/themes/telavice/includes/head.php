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

	/** REGISTER the site's jquery.js **/
	wp_register_script( 'updated-jquery', THEME_DIR_URL . '/assets/js/jquery.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'updated-jquery' );

	/** REGISTER the site's bootstrap uti.js **/
	wp_register_script( 'util-script', THEME_DIR_URL . '/assets/js/util.js', array( 'jquery' ), '1', true );
	wp_enqueue_script( 'util-script' );

	/** REGISTER the site's collapse.js **/
	wp_register_script( 'collapse-script', THEME_DIR_URL . '/assets/js/collapse.js', array( 'jquery','util-script' ), '1', true );
	wp_enqueue_script( 'collapse-script' );

	;/** REGISTER the site's main.js **/
	wp_register_script( 'main-script', THEME_DIR_URL . '/assets/js/main.js', array( 'updated-jquery' ), '1', true );
	wp_enqueue_script( 'main-script' );

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );

