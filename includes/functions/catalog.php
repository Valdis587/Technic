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

function custom_post_type_catalog() {

	$labels = array(
		'name'                  => 'Каталог',
		'singular_name'         => 'Каталог',
		'menu_name'             => 'Каталог',
		'add_new_item'          => 'Добавить новую',
		'add_new'               => 'Добавить новую',
		'new_item'              => 'Новая',
		'edit_item'             => 'Редактировать',
		'update_item'           => 'Обновить',
		'view_item'             => 'Просмотр',
		'view_items'            => 'Посмотреть все',
	);
	$rewrite = array(
		'slug'                  => 'katalog',
		'with_front'            => true,
		'pages'                 => true,
		'feeds'                 => true,
	);
	$args = array(
		'label'                 => 'Каталог',
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail'),
		'hierarchical'          => true,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-id-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'show_in_rest'			=> true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		//'taxonomy'            => 'category',
		'query_var'             => 'katalog',
		'rewrite'               => $rewrite,
		
	);
	register_post_type( 'katalog', $args );

	$labels = array(
		'name'                  => 'Категория',
		'singular_name'         => 'Категория',
		'menu_name'             => 'Категория',
		'all_items'             => 'Категория',
	);
	
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'publicly_queryable' => true, // query_var, чтобы запрос на термин работал...
		'capabilities'      => array(),
	);
	
	register_taxonomy( 'kategory', array( 'katalog' ), $args );


	$labels = array(
		'name'                  => 'Марка',
		'singular_name'         => 'Марка',
		'menu_name'             => 'Марка',
		'all_items'             => 'Марка',
	);
	
	$args = array(
		'labels'            => $labels,
		'public'            => true,
		'show_in_nav_menus' => true,
		'show_admin_column' => true,
		'hierarchical'      => true,
		'show_tagcloud'     => true,
		'show_ui'           => true,
		'query_var'         => true,
		'rewrite'           => true,
		'publicly_queryable' => true, // query_var, чтобы запрос на термин работал...
		'capabilities'      => array(),
	);
	
	register_taxonomy( 'model', array( 'katalog' ), $args );

}



add_action('init', 'custom_post_type_catalog', 0);


add_action( 'admin_init', 'kama_wp_term_image' );

function kama_wp_term_image(){

	// Укажем для какой таксономии нужна возможность устанавливать картинки.
	// Можно не указывать, тогда возможность будет автоматом добавлена для всех публичных таксономий.

	\Kama\WP_Term_Image::init( [
		'taxonomies' => [ 'kategory' ],
	] );
}

add_action( 'admin_init', 'kama_wp_term_image_model' );

function kama_wp_term_image_model(){

	// Укажем для какой таксономии нужна возможность устанавливать картинки.
	// Можно не указывать, тогда возможность будет автоматом добавлена для всех публичных таксономий.

	\Kama\WP_Term_Image::init( [
		'taxonomies' => [ 'model' ],
	] );
}