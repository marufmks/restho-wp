<?php
	/*-----------------------------------
		Header Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'header_options',
		'title'  => esc_html__( 'Header Options', 'restho' ),
		'id'     => 'theme_header_options',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Header Options', 'restho' ) . '</h3>'
			),
			array(
				'id'      => 'header_menu_style',
				'title'   => esc_html__( 'Select Style', 'restho' ),
				'type'    => 'image_select',
				'options'     		=> array(
					'default'       => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/default.png' ),
					'header_one'  	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header1.png' ),
					'header_two' 	=> esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header2.png' ),
					'header_three'  => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/header/header3.png' ),
				  ),
				'desc'    => wp_kses( __( 'you can select <mark>Header Style </mark> for header section', 'restho' ), $allowed_html ),
				'default' => 'default',
			),
			array(
				'id'    		=> 'header_one_right_side_button',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Right Side Button', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header One Right Side Button </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'default' 		=> 1
			),
			
			array(
				'id'    		=> 'header_two_right_side_button',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Right Side Button', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Two Right Side Button </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_three_right_side_button',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Right Side Button', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Three Right Side Button </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
				'default' 		=> 1
			),

			array(
				'id'    		=> 'header_one_right_side_contact',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Right Side Contact', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header One Right Side Contact </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'default' 		=> 1
			),
			
			array(
				'id'    		=> 'header_three_right_side_contact',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Right Side Contact', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Three Right Side Contact </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_one_mobile_menu_contact',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Mobile Menu Contact', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header One Mobile Menu Contact </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_two_mobile_menu_contact',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Mobile Menu Contact', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Two Mobile Menu Contact </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
				'default' 		=> 1
			),
						
			array(
				'id'    		=> 'header_three_mobile_menu_contact',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Mobile Menu Contact', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header Two Mobile Menu Contact </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_one_menu_sidebar',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Menu Sidebar', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header One Menu Sidebar </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_two_menu_sidebar',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Menu Sidebar', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header two Menu Sidebar </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
				'default' 		=> 1
			),
			array(
				'id'    		=> 'header_three_menu_sidebar',
				'type'  		=> 'switcher',
				'title'   		=> esc_html__( 'Menu Sidebar', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can enable/disable <mark>Header three Menu Sidebar </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
				'default' 		=> 1
			),
			// Header One Style Start 
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Header Style', 'restho' ) . '</h4>',
			),
			// Menu Color Start
			// Header One Style 
			array(
				'id'    		=> 'header_one_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
			),
			array(
				'id'    		=> 'header_one_menu_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
			),
			array(
				'id'    		=> 'header_one_menu_hover_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_one' ),
			),
			// Header Two Style 
			array(
				'id'    		=> 'header_two_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
			),
			array(
				'id'    		=> 'header_two_menu_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
			),
			array(
				'id'    		=> 'header_two_menu_hover_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_two' ),
			),
			// Header Three Style 
			array(
				'id'    		=> 'header_three_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
			),
			array(
				'id'    		=> 'header_three_menu_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
			),
			array(
				'id'    		=> 'header_three_menu_hover_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Menu Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can select <mark>Header Menu Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'	=> array( 'header_menu_style', '==', 'header_three' ),
			),
			// Menu Color End
			// Start Button Area 
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Button', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Button', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Button', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Header One 
			array(
				'id'    		=> 'header_one_contact_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Contact Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Contact Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( "Call Now", 'restho' ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_contact', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_one_contact_value',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Contact Value', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Contact Value </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( "+998-8776345", 'restho' ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_contact', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_one_button_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( "Connect Now", 'restho' ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_one_button_url',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button URL', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button URL </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> '#',
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			// Header Two 
			array(
				'id'    		=> 'header_two_button_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( "Find Reservation", 'restho' ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_two_button_url',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button URL', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button URL </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> '#',
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			// Header Three 
			array(
				'id'    		=> 'header_three_button_text',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( "Free Consultation", 'restho' ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			array(
				'id'    		=> 'header_three_button_url',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Button URL', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button URL </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> '#',
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Button Text color
			array(
				'id'    		=> 'header_one_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_two_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_three_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Three Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Button Hover Text color
			array(
				'id'    		=> 'header_one_hover_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_two_hover_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_three_hover_button_text_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Text Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Three Button Text Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Button Background color
			array(
				'id'    		=> 'header_one_button_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_two_button_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_three_button_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Three Button Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Button Background Color
			array(
				'id'    		=> 'header_one_button_hover_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Button Hover Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_two_button_hover_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Button Hover Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_three_button_hover_background_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Button Hover Background Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Three Button Hover Background Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
			// Mobile Menu Contact 
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Mobile Menu Contact', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_one_mobile_menu_contact', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_one_mobile_menu_contact_text',
				'type' 		 	=> 'text',
				'title'  		=> esc_html__( 'Contact Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( 'Call Now', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_one_mobile_menu_contact', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_one_mobile_menu_contact_phone',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Contact Phone', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Phone </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( '+998-8776345', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_one_mobile_menu_contact', '==|==', 'header_one|1' ),
			),
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Mobile Menu Contact', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_two_mobile_menu_contact', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_two_mobile_menu_contact_text',
				'type' 		 	=> 'text',
				'title'  		=> esc_html__( 'Contact Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( 'Call Now', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_two_mobile_menu_contact', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_two_mobile_menu_contact_phone',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Contact Phone', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Phone </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( '+998-8776345', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_two_mobile_menu_contact', '==|==', 'header_two|1' ),
			),
			array(
				'type'    		=> 'subheading',
				'content' 		=> '<h4>' . esc_html__( 'Right Side & Mobile Menu Contact', 'restho' ) . '</h4>',
				'dependency'    => array( 'header_menu_style|header_three_right_side_contact', '==|==', 'header_three|1' ),
			),
			array(
				'id'    		=> 'header_three_right_side_contact_text',
				'type' 		 	=> 'text',
				'title'  		=> esc_html__( 'Contact Text', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Text </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( 'Call Now', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_contact', '==|==', 'header_three|1' ),
			),
			array(
				'id'    		=> 'header_three_right_side_contact_phone',
				'type'  		=> 'text',
				'title'   		=> esc_html__( 'Contact Phone', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Mobile Contact Phone </mark> for header section', 'restho' ), $allowed_html ),
				'default' 		=> esc_html__( '+998-8776345', 'restho' ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_contact', '==|==', 'header_three|1' ),
			),
			array(
				'id'    		=> 'header_one_right_side_contact_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Contact Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header One Right Side & Mobile Contact Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_one_right_side_button', '==|==', 'header_one|1' ),
			),
			array(
				'id'    		=> 'header_two_right_side_contact_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Contact Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Two Right Side & Mobile Contact Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_two_right_side_button', '==|==', 'header_two|1' ),
			),
			array(
				'id'    		=> 'header_three_right_side_contact_color',
				'type'  		=> 'color',
				'title'   		=> esc_html__( 'Contact Color', 'restho' ),
				'desc'    		=> wp_kses( __( 'you can set <mark>Header Three Right Side & Mobile Contact Color </mark> for header section', 'restho' ), $allowed_html ),
				'dependency'    => array( 'header_menu_style|header_three_right_side_button', '==|==', 'header_three|1' ),
			),
		),
		
	) );

