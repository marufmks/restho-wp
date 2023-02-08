<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit(); // exit if access directly
}
function egnsCustomStyling() {
    $custom_css = "";  
    $egns_theme_options = get_option( 'egns_theme_options' );


    /**************************
     * Primary Color Start
     *************************/
    $primary_color = $egns_theme_options['primary_color'] ?? '';
    $primary_color_two = $egns_theme_options['primary_color_two'] ?? '';
    $primary_color_three = $egns_theme_options['primary_color_three'] ?? '';
    $primary_dark_color_one = $egns_theme_options['primary_dark_color_one'] ?? '';
    $primary_dark_color_two = $egns_theme_options['primary_dark_color_two'] ?? '';
    $primary_dark_color_three = $egns_theme_options['primary_dark_color_three'] ?? '';

    if ( !empty( $primary_color ) ) {
        $custom_css .="
            :root{
                --primary-color1: $primary_color; 
            }
        ";   
    }

    if ( !empty( $primary_color_two ) ) {
        $custom_css .="
            :root{
                --primary-color2: $primary_color_two; 
            }
        ";   
    }

    if ( !empty( $primary_color_three ) ) {
        $custom_css .="
            :root{
                --primary-color3: $primary_color_three; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_one ) ) {
        $custom_css .="
            :root{
                --dark: $primary_dark_color_one; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_two ) ) {
        $custom_css .="
            :root{
                --dark2: $primary_dark_color_two; 
            }
        ";   
    }

    if ( !empty( $primary_dark_color_three ) ) {
        $custom_css .="
            :root{
                --dark3: $primary_dark_color_three; 
            }
        ";   
    }



    /**************************
     * Header Style Start 
     *************************/

    // Header One 

    $header_one_background_color = $egns_theme_options['header_one_background_color'] ?? '';
    $header_one_menu_text_color = $egns_theme_options['header_one_menu_text_color'] ?? '';
    $header_one_menu_hover_text_color = $egns_theme_options['header_one_menu_hover_text_color'] ?? '';

    $header_one_button_text_color = $egns_theme_options['header_one_button_text_color'] ?? '';
    $header_one_hover_button_text_color = $egns_theme_options['header_one_hover_button_text_color'] ?? '';
    $header_one_button_background_color = $egns_theme_options['header_one_button_background_color'] ?? '';
    $header_one_button_hover_background_color = $egns_theme_options['header_one_button_hover_background_color'] ?? '';
    $header_one_right_side_contact_color = $egns_theme_options['header_one_right_side_contact_color'] ?? '';
 
    if ( !empty( $header_one_background_color ) ) {
        $custom_css .="
            header.style-1{
                background-color: $header_one_background_color; 
            }
        ";   
    }

    if ( !empty( $header_one_menu_text_color ) ) {
        $custom_css .="
            header.style-1 .main-nav ul li a,header.style-1 .main-nav ul li ul.sub-menu > li a, header.style-1 .main-nav ul li.menu-item-has-children > i,header.style-1 .main-nav ul li ul.sub-menu > li i {
                color: $header_one_menu_text_color;
            }
        ";
    }

    if ( !empty( $header_one_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-1 .main-nav ul li a:hover,header.style-1 .main-nav ul li ul.sub-menu > li a:hover {
                color: $header_one_menu_hover_text_color;
            }
        ";
    }

    if ( !empty( $header_one_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-1 .current-menu-item > a {
                color: $header_one_menu_hover_text_color;
            }
        ";
    }

    if ( !empty( $header_one_button_text_color ) ) {
        $custom_css .="
            header.style-1 .nav-right .btn--primary {
                color: $header_one_button_text_color;
            }
        ";
    }

    if ( !empty( $header_one_hover_button_text_color ) ) {
        $custom_css .="
            header.style-1 .nav-right .btn--primary:hover {
                color: $header_one_hover_button_text_color;
            }
        ";
    }

    if ( !empty( $header_one_button_background_color ) ) {
        $custom_css .="
            header.style-1 .nav-right .btn--primary {
                background: $header_one_button_background_color;
            }
        ";
    }
    if ( !empty( $header_one_button_hover_background_color ) ) {
        $custom_css .="
            header.style-1 .nav-right .btn--primary::after {
                background: $header_one_button_hover_background_color;
            }
        ";
    }

    if ( !empty( $header_one_right_side_contact_color ) ) {
        $custom_css .="
            header.style-1 .phone-call .number span,header.style-1 .phone-call .number h5 {
                color: $header_one_right_side_contact_color;
            }
            header.style-1 .phone-call .icon svg {
                fill: $header_one_right_side_contact_color;
            }
        ";
    }



    // Header Two

    $header_two_background_color = $egns_theme_options['header_two_background_color'] ?? '';
    $header_two_menu_text_color = $egns_theme_options['header_two_menu_text_color'] ?? '';
    $header_two_menu_hover_text_color = $egns_theme_options['header_two_menu_hover_text_color'] ?? '';

    $header_two_button_text_color = $egns_theme_options['header_two_button_text_color'] ?? '';
    $header_two_hover_button_text_color = $egns_theme_options['header_two_hover_button_text_color'] ?? '';
    $header_two_button_background_color = $egns_theme_options['header_two_button_background_color'] ?? '';
    $header_two_button_hover_background_color = $egns_theme_options['header_two_button_hover_background_color'] ?? '';
    $header_two_right_side_contact_color = $egns_theme_options['header_two_right_side_contact_color'] ?? '';

    if ( !empty( $header_two_background_color ) ) {
        $custom_css .="
            header.style-2{
                background-color: $header_two_background_color; 
            }
        ";   
    }
    if ( !empty( $header_two_menu_text_color ) ) {
        $custom_css .="
            header.style-2 .main-nav ul li a,header.style-2 .main-nav ul li ul.sub-menu > li a, header.style-2 .main-nav ul li.menu-item-has-children > i,header.style-2 .main-nav ul li ul.sub-menu > li i {
                color: $header_two_menu_text_color;
            }
        ";
    }
    
    if ( !empty( $header_two_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-2 .main-nav ul li a:hover,header.style-2 .main-nav ul li ul.sub-menu > li a:hover {
                color: $header_two_menu_hover_text_color;
            }
        ";
    }
    if ( !empty( $header_two_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-2 .current-menu-item > a {
                color: $header_two_menu_hover_text_color;
            }
        ";
    }
    if ( !empty( $header_two_button_text_color ) ) {
        $custom_css .="
            header.style-2 .nav-right .btn--primary2 {
                color: $header_two_button_text_color;
            }
        ";
    }

    if ( !empty( $header_two_hover_button_text_color ) ) {
        $custom_css .="
            header.style-2 .nav-right .btn--primary2:hover {
                color: $header_two_hover_button_text_color;
            }
        ";
    }

    if ( !empty( $header_two_button_background_color ) ) {
        $custom_css .="
            header.style-2 .nav-right .btn--primary2 {
                background: $header_two_button_background_color;
            }
        ";
    }

    if ( !empty( $header_two_button_hover_background_color ) ) {
        $custom_css .="
            header.style-2 .nav-right .btn--primary2::after {
                background: $header_two_button_hover_background_color;
            }
        ";
    }

    if ( !empty( $header_two_right_side_contact_color ) ) {
        $custom_css .="
            header.style-2 .phone-call .number span,header.style-2 .phone-call .number h5 {
                color: $header_two_right_side_contact_color;
            }
            header.style-2 .phone-call .icon svg {
                fill: $header_two_right_side_contact_color;
            }
        ";
    }


    // Header Three

    $header_three_background_color = $egns_theme_options['header_three_background_color'] ?? '';
    $header_three_menu_text_color = $egns_theme_options['header_three_menu_text_color'] ?? '';
    $header_three_menu_hover_text_color = $egns_theme_options['header_three_menu_hover_text_color'] ?? '';

    $header_three_button_text_color = $egns_theme_options['header_three_button_text_color'] ?? '';
    $header_three_hover_button_text_color = $egns_theme_options['header_three_hover_button_text_color'] ?? '';
    $header_three_button_background_color = $egns_theme_options['header_three_button_background_color'] ?? '';
    $header_three_button_hover_background_color = $egns_theme_options['header_three_button_hover_background_color'] ?? '';
    $header_three_right_side_contact_color = $egns_theme_options['header_three_right_side_contact_color'] ?? '';

    if ( !empty( $header_three_background_color ) ) {
        $custom_css .="
            header.style-5,header.style-5 .nav-left{
                background-color: $header_three_background_color; 
            }
        ";   
    }
    if ( !empty( $header_three_menu_text_color ) ) {
        $custom_css .="
            header.style-5 .main-nav ul li a,header.style-5 .main-nav ul li ul.sub-menu > li a, header.style-5 .main-nav ul li.menu-item-has-children > i,header.style-5 .main-nav ul li ul.sub-menu > li i {
                color: $header_three_menu_text_color;
            }
        ";
    }
    
    if ( !empty( $header_three_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-5 .main-nav ul li a:hover,header.style-5 .main-nav ul li ul.sub-menu > li a:hover {
                color: $header_three_menu_hover_text_color;
            }
        ";
    }
    if ( !empty( $header_three_menu_hover_text_color ) ) {
        $custom_css .="
            header.style-5 .current-menu-item > a {
                color: $header_three_menu_hover_text_color;
            }
        ";
    }
    if ( !empty( $header_three_button_text_color ) ) {
        $custom_css .="
            header.style-5 .nav-left .btn--primary2.sibling2 {
                color: $header_three_button_text_color;
            }
        ";
    }

    if ( !empty( $header_three_hover_button_text_color ) ) {
        $custom_css .="
            header.style-5 .nav-left .btn--primary2.sibling2:hover {
                color: $header_three_hover_button_text_color;
            }
        ";
    }

    if ( !empty( $header_three_button_background_color ) ) {
        $custom_css .="
            header.style-5 .nav-left .btn--primary2.sibling2 {
                background: $header_three_button_background_color;
            }
        ";
    }

    if ( !empty( $header_three_button_hover_background_color ) ) {
        $custom_css .="
            header.style-5 .nav-left .btn--primary2.sibling2::after {
                background: $header_three_button_hover_background_color;
            }
        ";
    }
    
    if ( !empty( $header_three_right_side_contact_color ) ) {
        $custom_css .="
            header.style-5 .phone-call .number span,header.style-5 .phone-call .number h5 {
                color: $header_three_right_side_contact_color;
            }
            header.style-5 .phone-call .icon svg {
                fill: $header_three_right_side_contact_color;
            }
        ";
    }

    // Header Topbar 

    $header_topbar_bg_color = $egns_theme_options['header_topbar_bg_color'] ?? '';
    $header_topbar_text_base_color = $egns_theme_options['header_topbar_text_base_color'] ?? '';

    if ( !empty( $header_topbar_bg_color ) ) {
        $custom_css .="
            .topbar{
                background-color: $header_topbar_bg_color;
            }
        ";
    }

    if ( !empty( $header_topbar_text_base_color ) ) {
        $custom_css .="
            .topbar, .phone-call2 .number span, .phone-call2 .number h5 a{
                color: $header_topbar_text_base_color;
            }
        ";
    }


    /**************************
     * Header Style End
     *************************/

    /************************
     * Start Breadcrumb Style
     ************************/

     
    $breadcrumb_title = $egns_theme_options['breadcrumb_title_typography'] ?? '';
    $breadcrumb_link = $egns_theme_options['breadcrumb_link_typography'] ?? '';


    // Breadcrumb Title

    $breadcrumb_title_font_size = $breadcrumb_title['font-size'] ?? '';
    $breadcrumb_title_color = $breadcrumb_title['color'] ?? '';

    if( !empty( $breadcrumb_title_font_size ) ) {
        $custom_css .="
        .breadcrumb-section .breadcrumb-title{
            font-size: $breadcrumb_title_font_size".'px'.";
        }
    ";
    }

    if( !empty( $breadcrumb_title_color ) ) {
        $custom_css .="
        .breadcrumb-section .breadcrumb-title{
            color: $breadcrumb_title_color;
        }
    ";
    }

    // Breadcrumb Link 

    $breadcrumb_link_font_size = $breadcrumb_link['font-size'] ?? '';
    $breadcrumb_link_color = $breadcrumb_link['color'] ?? '';

    if( !empty( $breadcrumb_link_font_size ) ) {
        $custom_css .="
        .breadcrumb-section .breadcrumb .breadcrumb-item,.breadcrumb-section .breadcrumb .active{
            font-size: $breadcrumb_link_font_size".'px'.";
        }
    ";
    }
    if( !empty( $breadcrumb_link_color ) ) {
        $custom_css .="
        .breadcrumb-section .breadcrumb .breadcrumb-item,.breadcrumb-section .breadcrumb .active{
            color: $breadcrumb_link_color;
        }
    ";
    }

    /*********************
     * End Breadcrumb Style
     *********************/

    $footer_widget_area_padding_top = $egns_theme_options['footer_widget_area_padding']['top'] ?? '';
    $footer_widget_area_padding_bottom = $egns_theme_options['footer_widget_area_padding']['bottom'] ?? '';
    $footer_widget_area_padding_unit = $egns_theme_options['footer_widget_area_padding']['unit'] ?? '';

    if( !empty( $footer_widget_area_padding_top ) ) {
        $custom_css .="
        .footer-section .footer-top{
            padding-top: $footer_widget_area_padding_top$footer_widget_area_padding_unit;
        }
    ";
    }
    if( !empty( $footer_widget_area_padding_bottom ) ) {
        $custom_css .="
        .footer-section .footer-top{
            padding-bottom: $footer_widget_area_padding_bottom$footer_widget_area_padding_unit;
        }
    ";
    }
    
    wp_register_style( 'egns-stylesheet', false );
    wp_enqueue_style( 'egns-stylesheet', false );
    wp_add_inline_style( 'egns-stylesheet', $custom_css, true );

}
if ( class_exists( 'CSF' )  ) {
    add_action( 'wp_enqueue_scripts', 'egnsCustomStyling' );
}