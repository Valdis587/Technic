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
		'title'            => esc_html__( 'Заголовки и тексты', 'your-textdomain-here' ),
		'id'               => 'foo-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'foo-title1',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок 1', 'your-textdomain-here' ),
				'default'  => 'Контакты',
			),
            array(
				'id'       => 'foo-title2',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок 2', 'your-textdomain-here' ),
				'default'  => 'Страницы',
			),
            array(
				'id'       => 'foo-title3',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок 3', 'your-textdomain-here' ),
				'default'  => 'Услуги',
			),
			array(
				'id'       => 'foo-text',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Текст', 'your-textdomain-here' ),
				'default'  => '',
			),
			array(
				'id'       => 'foo-copy',
				'type'     => 'text',
				'title'    => esc_html__( 'Авторские права', 'your-textdomain-here' ),
				'default'  => '© 2024',
			),
        ),
        )
    );