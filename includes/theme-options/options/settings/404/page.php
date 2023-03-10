<?php 


	/*-------------------------------------------------------
		   ** 404 page options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'     => '404_page',
		'title'  => esc_html__( '404 Page', 'restho' ),
		'icon'   => 'fa fa-exclamation-triangle',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( '404 Page Options', 'restho' ) . '</h3>',
			),
			array(
				'id'         => '404_title',
				'title'      => esc_html__( 'Title', 'restho' ),
				'type'       => 'text',
				'info'       => wp_kses( __( 'you can change <mark>title</mark> of 404 page', 'restho' ), $allowed_html ),
				'default'	 => esc_html__( 'Ooops!', 'restho' )
			),
			array(
				'id'      => '404_image_bg',
				'type'    => 'media',
				'title'   => esc_html__( '404 Background Image', 'restho' ),
				'library' => 'image',
				'default'				=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/error-page-bg.png' ),
					'id'          => '404_image',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/error-page-bg.png' ),
					'alt'         => esc_attr( '404 BG image' ),
					'title'       => esc_html( '404 BG image' ),
				),
			),
			array(
				'id'      => '404_image',
				'type'    => 'media',
				'title'   => esc_html__( '404 Image', 'restho' ),
				'library' => 'image',
				'default'				=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/404.png' ),
					'id'          => '404_image',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/error/404.png' ),
					'alt'         => esc_attr( '404 image' ),
					'title'       => esc_html( '404 image' ),
				),
			),
			array(
				'id'         => '404_description',
				'title'      => esc_html__( 'Description', 'restho' ),
				'type'       => 'textarea',
				'info'       => wp_kses( __( 'you can change <mark>sub title</mark> of 404 page', 'restho' ), $allowed_html ),
				'default'	 => esc_html__( "The page does not found , something went wrong. Go to Homepage", 'restho' )
			),
			array(
				'id'         => '404_button_text',
				'title'      => esc_html__( 'Button Text', 'restho' ),
				'type'       => 'text',
				'info'       => wp_kses( __( 'you can change <mark>button text</mark> of 404 page', 'restho' ), $allowed_html ),
				'default'	 => esc_html__( 'Home Page', 'restho' )
			),
		
		)
	) );
 ?>