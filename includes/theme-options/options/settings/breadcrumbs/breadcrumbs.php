<?php 

	/*-------------------------------------------------------
		  ** Breadcrumbs Options
	--------------------------------------------------------*/
	
	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'Breadcrumb', 'restho' ),
		'id'     => 'breadcrumb_options',
		'icon'   => 'fa fa-ellipsis-h',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Breadcrumb Options', 'restho' ) . '</h3>'
			),
			array(
				'id'      => 'breadcrumb_enable',
				'title'   => esc_html__( 'Breadcrumb', 'restho' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to show/hide breadcrumb', 'restho' ), $allowed_html ),
				'default' => true,
			),
			array(
				'id'      		   => 'breadcrumb_title_typography',
				'type'    		   => 'typography',
				'title'   		   => esc_html__('Title Typography','restho'),
				'default' 		   => array(
				  'unit'           => 'px',
				  'type'       	   => 'google',
				),
				'text_align' 	   => false,
				'font_family' 	   => true,
				'letter_spacing'   => false,
				'line_height'  	   => false,
				'text_transform'   => false,
				'dependency'       => array( 'breadcrumb_enable', '==', 'true' )
			),

			
			array(
				'id'      		   => 'breadcrumb_home_title_typography',
				'type'    		   => 'typography',
				'title'   		   => esc_html__('Home Link Typography','restho'),
				'default' 		   => array(
				  'unit'           => 'px',
				  'type'       	   => 'google',
				),
				'text_align' 	   => false,
				'font_family' 	   => true,
				'letter_spacing'   => false,
				'line_height'  	   => false,
				'text_transform'   => false,
				'dependency'       => array( 'breadcrumb_enable', '==', 'true' )
			),

			array(
				'id'      		   => 'breadcrumb_link_typography',
				'type'    		   => 'typography',
				'title'   		   => esc_html__('Active Link Typography','restho'),
				'default' 		   => array(
				  'unit'           => 'px',
				  'type'       	   => 'google',
				),
				'text_align' 	   => false,
				'font_family' 	   => true,
				'letter_spacing'   => false,
				'line_height'  	   => false,
				'text_transform'   => false,
				'dependency'       => array( 'breadcrumb_enable', '==', 'true' )
			),

			array(
				'id'                    => 'breadcrumb_bg',
				'type'                  => 'media',
				'title'                 => esc_html__( 'Breadcrumb Background', 'restho' ),
				'desc'                  => esc_html__( 'Set the banner background image', 'restho' ),
				'dependency'            => array( 'breadcrumb_enable', '==', 'true' ),
				'default'				=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/breadcrumb/breadcrumb-bg.jpg' ),
					'id'          => 'mail_icon',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/breadcrumb/breadcrumb-bg.jpg' ),
					'alt'         => esc_attr( 'logo-icons' ),
					'title'       => esc_html( 'logo Title' ),
				),
            ),
		)
	) );


 ?>