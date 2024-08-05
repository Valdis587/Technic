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
		'title'            => esc_html__( 'Заголовки шапки', 'your-textdomain-here' ),
		'id'               => 'title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'header-titleh1',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Заголовок h1', 'your-textdomain-here' ),
				'default'  => 'Аренда спецтехники и дорожно-строительной техники в Санкт-Петербурге и Ленинградской области',
			),
            array(
				'id'       => 'header-title2',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Заголовок 2', 'your-textdomain-here' ),
				'default'  => 'Возьмите любую спецтехнику в аренду в СПБ на срок от 3-х смен и получите скидку 5%',
			),
        ),
        )
    );
