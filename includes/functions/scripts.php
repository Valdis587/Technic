<?php
/**
 * Technic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Technic
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Enqueue scripts and styles.
 */
function technic_scripts() {
    wp_enqueue_style('technic-theme-style', get_template_directory_uri() . '/assets/css/style.min.css', array(), _S_VERSION,);

	wp_enqueue_style( 'technic-style', get_stylesheet_uri(), array(), _S_VERSION );

    wp_enqueue_script( 'technic-jquery', get_template_directory_uri() . '/assets/js/jQuery.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'technic-scripts', get_template_directory_uri() . '/assets/js/scripts.min.js', array(), _S_VERSION, true );

    wp_enqueue_script( 'technic-lib', get_template_directory_uri() . '/assets/js/lib.min.js', array(), _S_VERSION, true );

	wp_enqueue_script( 'zak-js', get_template_directory_uri() . '/assets/js/zak.js', array(), _S_VERSION, true );
		wp_localize_script('zak-js', 'zak', array(
			'url' => admin_url('admin-ajax.php'),
			'nonce' => wp_create_nonce('zak_nonce')
		));
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'technic_scripts' );