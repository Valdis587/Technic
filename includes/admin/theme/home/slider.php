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
		'title'            => esc_html__( 'Слайдер', 'your-textdomain-here' ),
		'id'               => 'slider-home',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'          => 'slider-home-slides',
				'type'        => 'slides',
                'subtitle'    => esc_html__( 'Размер 1920х480', 'your-textdomain-here' ),
				'title'       => esc_html__( 'Слайдер', 'your-textdomain-here' ),
				'placeholder' => array(
					'title'       => esc_html__( 'Заголовок', 'your-textdomain-here' ),
					'description' => esc_html__( 'Заголовок 2', 'your-textdomain-here' ),
				),
			),
        ),
        )
    );