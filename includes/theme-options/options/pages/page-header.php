<?php

/*-----------------------------------
PAGE MENU SECTION
------------------------------------*/
CSF::createSection( EGNS_META_ID,
    array(
        'title'  => esc_html__( 'Header Options', 'restho' ),
        'parent' => 'page_meta_option',
        'fields' => array(
            array(
                'type'    => 'subheading',
                'content' => esc_html__( 'Menu Style', 'restho' ),
                'dependency' => array( 'custom_header_style', '==', 'false' ),
            ),
			array(
				'id'    		=> 'page_main_header_enable',
				'type'  		=> 'select',
				'title'   		=> esc_html__( 'Main Header', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Main Header </mark> for header section', 'restho' ), wp_kses_allowed_html('post') ),
				'options'     	=> array(
					'enable'  		=> esc_html( 'Enable' ),
					'disable'  	    => esc_html( 'Disable' ),
				),
			),
			array(
				'id'      		=> 'page_header_menu_style',
				'title'   		=> esc_html__( 'Select Style', 'restho' ),
				'type'    		=> 'image_select',
				'options'     		=> array(
					'header_one'  	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header1.png' ),
					'header_two' 	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header2.png' ),
					'header_three'  => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header3.png' ),
				),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Style </mark> for header section', 'restho' ), wp_kses_allowed_html('post') ),
				'default' 		=> 'header_one',
				'dependency'	=> array( 'page_main_header_enable', '==', 'enable' ),
			),
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__('Upload Logo(Header One)', 'restho') . '</h3>',
				'dependency'    => array('page_header_menu_style', '==', 'header_one'),
			),
			array(
				'id'      => 'header_one_logo',
				'title'   => esc_html__('Upload  Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark> Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_one'),
			),

			array(
                'id'      => 'header_one_sticky_logo',
                'title'   => esc_html__( 'Upload Sticky Logo', 'restho' ),
                'type'    => 'media',
                'desc'    => wp_kses( __( 'you can upload <mark>Sticky Logo</mark> for header', 'restho' ), wp_kses_allowed_html('post') ),
                'default'   => array(
                    'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'id'          => 'logo',
                    'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'alt'         => esc_attr('logo'),
                    'title'       => esc_html('Logo'),
                ),
                'dependency'    => array( 'page_header_menu_style', '==', 'header_one' ),
            ),

			array(
				'id'      => 'header_one_logo_mobile',
				'title'   => esc_html__('Upload Mobile Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark>Mobile Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_one'),
			),

			// Two
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__('Upload Logo(Header Two)', 'restho') . '</h3>',
				'dependency'    => array('page_header_menu_style', '==', 'header_two'),
			),
			array(
				'id'      => 'header_two_logo',
				'title'   => esc_html__('Upload  Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark> Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_two'),
			),

			array(
                'id'      => 'header_two_sticky_logo',
                'title'   => esc_html__( 'Upload Sticky Logo', 'restho' ),
                'type'    => 'media',
                'desc'    => wp_kses( __( 'you can upload <mark>Sticky Logo</mark> for header', 'restho' ), wp_kses_allowed_html('post') ),
                'default'   => array(
                    'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'id'          => 'logo',
                    'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'alt'         => esc_attr('logo'),
                    'title'       => esc_html('Logo'),
                ),
                'dependency'    => array( 'page_header_menu_style', '==', 'header_two' ),
            ),

			array(
				'id'      => 'header_two_logo_mobile',
				'title'   => esc_html__('Upload Mobile Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark>Mobile Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_two'),
			),
			// three
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__('Upload Logo(Header Three)', 'restho') . '</h3>',
				'dependency'    => array('page_header_menu_style', '==', 'header_three'),
			),
			array(
				'id'      => 'header_three_logo',
				'title'   => esc_html__('Upload  Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark> Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_three'),
			),

			array(
                'id'      => 'header_three_sticky_logo',
                'title'   => esc_html__( 'Upload Sticky Logo', 'restho' ),
                'type'    => 'media',
                'desc'    => wp_kses( __( 'you can upload <mark>Sticky Logo</mark> for header', 'restho' ), wp_kses_allowed_html('post') ),
                'default'   => array(
                    'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'id'          => 'logo',
                    'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg' ),
                    'alt'         => esc_attr('logo'),
                    'title'       => esc_html('Logo'),
                ),
                'dependency'    => array( 'page_header_menu_style', '==', 'header_three' ),
            ),

			array(
				'id'      => 'header_three_logo_mobile',
				'title'   => esc_html__('Upload Mobile Logo', 'restho'),
				'type'    => 'media',
				'desc'    => wp_kses(__('you can upload <mark>Mobile Logo</mark> for header', 'restho'), wp_kses_allowed_html('post')),
				'default'   => array(
					'url'         => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'id'          => 'logo',
					'thumbnail'   => esc_url(EGNS_THEME_SETTINGS_IMAGES . '/logo/logo.svg'),
					'alt'         => esc_attr('logo'),
					'title'       => esc_html('Logo'),
				),
				'dependency'    => array('page_header_menu_style', '==', 'header_three'),
			),
        ),
    )
);