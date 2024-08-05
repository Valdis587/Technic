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
		'title'            => esc_html__( 'Услуги', 'your-textdomain-here' ),
		'id'               => 'serv-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'serv-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Услуги', 'your-textdomain-here' ),
				'default'  => 'Услуги',
			),
            array(
				'id'       => 'serv-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
            array(
				'id'       => 'serv-select',
				'type'     => 'select',
				'title'    => esc_html__( 'Выберите вариант', 'your-textdomain-here' ),
				// Must provide key => value pairs for select options.
				'options'  => array(
					'1' => 'Сетка',
					'2' => 'Слайдер',
				),
				'default'  => '1',
			),

        ),
)
);