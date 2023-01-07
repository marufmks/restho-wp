<?php 
	/*-----------------------------------
		Logo Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'header_options', 
		'title'  => esc_html__( 'Logo', 'restho' ),
		'id'     => 'theme_header_logo_options',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Upload Logo', 'restho' ) . '</h3>'
			),
			array(
				'id'      => 'favicons',
				'title'   => esc_html__( 'Upload Favicon', 'restho' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Header Favicons</mark> for header', 'restho' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/favicons.svg' ),
					'id'          => 'favicons',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/favicons.svg' ),
					'alt'         => esc_attr('Favicons'),
					'title'       => esc_html('Favicons'),
				),
			),
			array(
				'id'      => 'header_logo',
				'title'   => esc_html__( 'Upload  Logo', 'restho' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Header One Logo</mark> for header', 'restho' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'id'          => 'logo',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
			),
			array(
				'id'      => 'header_sticky_logo',
				'title'   => esc_html__( 'Upload Sticky Logo', 'restho' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Header Two Logo</mark> for header', 'restho' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'id'          => 'logo',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
			),


			array(
				'id'      => 'header_logo_mobile',
				'title'   => esc_html__( 'Upload Mobile Logo', 'restho' ),
				'type'    => 'media',
				'desc'    => wp_kses( __( 'you can upload <mark>Mobile Logo</mark> for header', 'restho' ), $allowed_html ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'id'          => 'logo',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
			),
		),

	) );

 ?>