<?php 

	/*-------------------------------------------------------
		  ** General Options
	--------------------------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'title'  => esc_html__( 'General', 'restho' ),
		'id'     => 'general_options',
		'icon'   => 'fa fa-wrench',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Preloader Options', 'restho' ) . '</h3>'
			),
			array(
				'id'      => 'preloader_enable',
				'title'   => esc_html__( 'Preloader', 'restho' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable preloader', 'restho' ), $allowed_html ),
				'default' => true,
			),
			array(
				'id'                    => 'preloader_img',
				'type'                  => 'media',
				'title'                 => esc_html__( 'Preloader Image', 'restho' ),
				'desc'                  => esc_html__( 'Set the Preloader image', 'restho' ),
				'dependency'            => array( 'preloader_enable', '==', 'true' ),
				'default'				=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/preloader/logo-icon.svg' ),
					'id'          => 'mail_icon',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/preloader/logo-icon.svg' ),
					'alt'         => esc_attr( 'logo-icons' ),
					'title'       => esc_html( 'logo Title' ),
				),
            ),
			array(
				'id'      => 'scroll_top_enable',
				'title'   => esc_html__( 'Scroll Top', 'restho' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable scroll to top', 'restho' ), $allowed_html ),
				'default' => true,
			),
		)
	) );


 ?>