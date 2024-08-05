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
		'title'            => esc_html__( 'Счетчики', 'your-textdomain-here' ),
		'id'               => 'foo-scripts',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'google',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Google', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'yandex',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Yandex', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
        )
    );