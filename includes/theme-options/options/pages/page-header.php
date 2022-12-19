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
				'id'    		=> 'page_header_topbar_enable',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Header Topbar', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Topbar </mark> for header section', 'restho' ), wp_kses_allowed_html('post') ),
				'default' 		=> 1
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
					'default'  		=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/default.png' ),
					'header_one'  	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header1.png' ),
					'header_two' 	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header2.png' ),
					'header_three'  => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header3.png' ),
				),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Style </mark> for header section', 'restho' ), wp_kses_allowed_html('post') ),
				'default' 		=> 'default',
				'dependency'	=> array( 'page_main_header_enable', '==', 'enable' ),
			),
        ),
    )
);