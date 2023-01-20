<?php 
	/*-------------------------------------------------------
		   ** Footer  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'Footer', 'restho' ),
		'id'     => 'footer_options',
		'icon'   => 'fa fa-copyright',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Footer Options', 'restho' ) . '</h3>'
			),

			array(
				'id'      => 'footer_widget_area_background',
				'title'   => esc_html__( 'Footer Background Image', 'restho' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'Set footer bottom background Image.', 'restho' ), $allowed_html ),
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
                'title'       => esc_html__( 'Footer Widget Area Space', 'restho' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'restho' ),
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
				'content' => '<h3>' . esc_html__( 'Footer Copyright Area', 'restho' ) . '</h3>'
			),

			array(
				'id'    => 'copyright_text',
				'title' => esc_html__( 'Copyright Area Text', 'restho' ),
				'type'  => 'textarea',
				'default' => wp_kses( ( '@Copyright by <a rel="nofollow" href="https://www.egenslab.com/">Egens Lab</a>-2023, All Right Reserved.' ), $allowed_html ),
				'desc'  => wp_kses( __( 'use  <mark>{copy}</mark> for copyright symbol, use <mark>{year}</mark> for current year, ', 'restho' ), $allowed_html ),
			),
			 array(
                'id'          => 'copyright_area_spacing',
                'type'        => 'spacing',
                'title'       => esc_html__( 'Footer Copyright Area Space', 'restho' ),
                'desc'        => esc_html__( 'Set the space ( top / bottom ) in footer bottom.', 'restho' ),
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
				'content' => '<h3>' . esc_html__( 'Footer Important Link', 'restho' ) . '</h3>'
			),
			array(
				'id'    		=> 'copyright_privacy_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Privacy Text', 'restho'),
				'desc'    		=> wp_kses(__('you can set <mark>Mobile Footer privacy Text </mark> for copyright section', 'restho'), $allowed_html),
				'default' 		=> esc_html__('Privacy & Policy', 'restho'),
			),
			array(
				'id'    => 'copyright_privacy_link',
				'type'  => 'link',
				'desc'  => wp_kses(__('you can set <mark>Mobile Footer privacy link </mark> for copyright section', 'restho'), $allowed_html),
				'title' => 'Privacy Link',
				'default' 		=> '#',
			  ),
			array(
				'id'    		=> 'copyright_conditions_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__('Conditions Text', 'restho'),
				'desc'    		=> wp_kses(__('you can set <mark>Mobile Footer conditions Text </mark> for copyright section', 'restho'), $allowed_html),
				'default' 		=> esc_html__('Terms and Conditions', 'restho'),
			),

			array(
				'id'    => 'copyright_conditions_link',
				'type'  => 'link',
				'desc'  => wp_kses(__('you can set <mark>Mobile Footer Conditions link </mark> for copyright section', 'restho'), $allowed_html),
				'title' => 'Privacy Link',
				'default' 		=> '#',
			  ),

			  //footer color options
			  array(
				'type'    	=> 'subheading',
				'content' 	=> '<h3>' . esc_html__( 'Color Options', 'restho' ) . '</h3>'
			),

			array(
				'id'    	=> 'footer_title_area_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Footer Text Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Text Title Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_description_area_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Footer Description Text Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Description Text Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Text Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_social_link_color_hover',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Menu Hover Text Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Copyright Link Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_text_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Text Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
			array(
				'id'    	=> 'footer_copyright_link_color',
				'type'  	=> 'color',
				'title'   	=> esc_html__( 'Copyright Link Color', 'restho' ),
				'desc'    	=> wp_kses( __( 'you can select <mark>Footer Bottom Nav Color </mark> for footer section', 'restho' ), $allowed_html ),
			),
		)
	) );
	
 ?>