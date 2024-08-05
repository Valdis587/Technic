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
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function technic_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар новости', 'technic' ),
			'id'            => 'sidebar-news',
			'description'   => esc_html__( 'Add widgets here.', 'technic' ),
			'before_widget' => '<section id="%1$s" class="sidebar__widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="sidebar__title-wrapp"><h3 class="sidebar__title"><span>',
			'after_title'   => '</span></h3></div>',
		)
	);
}
add_action( 'widgets_init', 'technic_widgets_init' );


function technic_widgets_init_catalog() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Сайдбар каталог', 'technic' ),
			'id'            => 'sidebar-catalog',
			'description'   => esc_html__( 'Add widgets here.', 'technic' ),
			'before_widget' => '<section id="%1$s" class="sidebar__widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<div class="sidebar__title-wrapp"><h3 class="sidebar__title"><span>',
			'after_title'   => '</span></h3></div>',
		)
	);
}
add_action( 'widgets_init', 'technic_widgets_init_catalog' );