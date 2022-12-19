<?php 
	/*-------------------------------------------------------
		   ** Footer  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'Footer', 'corelaw' ),
		'id'     => 'footer_options',
		'icon'   => 'fa fa-copyright',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Options', 'corelaw' ) . '</h3>'
			),

			array(
				'id'      => 'footer_widget_area_background',
				'title'   => esc_html__( 'Footer Background Image', 'corelaw' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'Set footer bottom background Image.', 'corelaw' ), $allowed_html ),
				'default' => array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/footer/footer1-bg.png' ),
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/footer/footer1-bg.png' ),
					'alt'         => esc_attr( 'Footer Image' ),
					'title'       => esc_html( 'Footer Image' ),
				),
			),

            array(
                'id'          => 'footer_widget_area_padding',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Widget Area Space', 'corelaw' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'corelaw' ),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','px','em','%','cm','pt' ),
                'output_mode' => 'padding',
                'output'      => '.footer-bottom',
                'default'     => array(
                    'top'       => '',
                    'bottom'    => '',
                    'unit'      => 'px',
                ),
            ),
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Copyright Area', 'corelaw' ) . '</h3>'
			),

			array(
				'id'    => 'copyright_text',
				'title' => esc_html__( 'Copyright Area Text', 'corelaw' ),
				'type'  => 'textarea',
				'default' => wp_kses( ( 'Copyright 2022 <a href="#">Corelaw</a> | Design By <a rel="nofollow" href="https://www.egenslab.com/">Egens Lab</a>' ), $allowed_html ),
				'desc'  => wp_kses( __( 'use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'corelaw' ), $allowed_html ),
			),
			 array(
                'id'          => 'copyright_area_spacing',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Copyright Area Space', 'corelaw' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'corelaw' ),
                'left'        => false,
                'right'       => false,
                'units'       => array( 'px','px','em','%','cm','pt' ),
                'default'     => array(
                    'top'       => '',
                    'bottom'    => '',
                    'unit'      => 'px',
                ),
            ),

			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Important Link', 'corelaw' ) . '</h3>'
			),
			array(
				'id'        => 'footer_menu_list',
				'type'      => 'repeater',
				'fields'    => array(
			  
				array(
					'id'    => 'footer_menu_name',
					'type'  => 'text',
					'title' => esc_html('Text'),
				),
				array(
					'id'       => 'footer_menu_link',
					'type'     => 'link',
					'title'    => esc_html('Link'),
					'default'  => array(
						'url'    => '#',
						'text'   => esc_html('Menu Link'),
						'target' => '_blank'
					),
				),
				),
				'default'   => array(
					array(
						'footer_menu_name' => esc_html('Privacy Policy'),
						'footer_menu_link' => array(
							'url'   => '#',
							'text'  => esc_html('Privacy Policy'),
							'target' => '_blank'
						),
					),
					array(
						'footer_menu_name' => esc_html('Terms of Use'),
						'footer_menu_link' => array(
							'url'   => '#',
							'text'  => esc_html('Terms of Use'),
							'target' => '_blank'
						)
					),
				)
			  ),
		)
	) );
	
 ?>