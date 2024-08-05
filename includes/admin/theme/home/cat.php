<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;

Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'Категории', 'your-textdomain-here' ),
		'id'               => 'cat-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'cat-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Категории', 'your-textdomain-here' ),
				'default'  => 'Категории',
			),
            array(
				'id'       => 'cat-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);