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
		'title'            => esc_html__( 'Преимущества', 'your-textdomain-here' ),
		'id'               => 'feutered-title',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'feutered-title-home',
				'type'     => 'text',
				'title'    => esc_html__( 'Преимущества', 'your-textdomain-here' ),
				'default'  => 'Преимущества',
			),
            array(
				'id'       => 'feutered-desc-home',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'default'  => '',
			),
			array(
				'id'          => 'repeater-feutered',
				'type'        => 'repeater',
				'title'       => esc_html__( 'Преимущества', 'your-textdomain-here' ),
				'full_width'  => true,
				'item_name'   => '',
				'sortable'    => true,
				'active'      => false,
				'collapsible' => false,
				'fields'      => array(
					array(
						'id'          => 'title_feutered',
						'type'        => 'text',
						'title'       => esc_html__( 'Заголовок', 'your-domain-here' ),
						'placeholder' => esc_html__( 'Заголовок', 'your-textdomain-here' ),
					),
					array(
						'id'          => 'textarea_feutered',
						'type'        => 'textarea',
						'placeholder' => esc_html__( 'Описание', 'your-textdomain-here' ),
						'default'     => 'Text Field here',
						'title'       => esc_html__( 'Описание', 'your-domain-here' ),
					),
					array(
						'id'       => 'feutered-img',
						'type'     => 'media',
						'title'    => esc_html__( 'Картинка', 'your-textdomain-here' ),
						'url'      => false,
						'preview'  => true,
					),

				),
			),
	

        ),
        )
    );