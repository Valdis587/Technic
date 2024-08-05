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
		'title'            => esc_html__( 'Наша техника', 'your-textdomain-here' ),
		'id'               => 'tehnika-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'tehnika-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Наша техника', 'your-textdomain-here' ),
				'default'  => 'Наша техника',
			),
            array(
				'id'       => 'tehnika-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
        ),
)
);