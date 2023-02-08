<?php

$header_three_background_color = $egns_theme_options['header_three_formate_color']['header_three_background_color'] ?? '';
    $header_three_menu_text_color = $egns_theme_options['header_three_formate_color']['header_three_menu_text_color'] ?? '';
    $header_three_menu_hover_text_color = $egns_theme_options['header_three_formate_color']['header_three_menu_hover_text_color'] ?? '';
    $header_three_sub_menu_text_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_text_color'] ?? '';
    $header_three_sub_menu_hover_text_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_hover_text_color'] ?? '';
    $header_three_sub_menu_background_color = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_background_color'] ?? '';


    if (!empty($header_three_background_color)) {
        $custom_css .= "
        header.style-3 {
                background: $header_three_background_color; 
            }
        ";
    }

    if (!empty($header_three_menu_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu ul > li a,header.style-3 .main-menu ul > li.menu-item-has-children::after {
                color: $header_three_menu_text_color;
            }
        ";
    }

    if (!empty($header_three_menu_hover_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu ul > li a:hover {
                color: $header_three_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_three_sub_menu_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu ul > li ul.sub-menu > li a,header.style-3 .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_three_sub_menu_text_color;
            }
        ";
    }
    if (!empty($header_three_sub_menu_hover_text_color)) {
        $custom_css .= "
        header.style-3 .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_three_sub_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_three_sub_menu_background_color)) {
        $custom_css .= "
        header.style-3 .main-menu ul > li ul.sub-menu {
                background: $header_three_sub_menu_background_color;
            }
        ";
    }

    /**************************
     * RIght Side Contact Style 
     *************************/
    $header_three_right_side_contact_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_color'] ?? '';
    $header_three_right_side_contact_number_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_color'] ?? '';
    $header_three_right_side_contact_number_hover_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_hover_color'] ?? '';
    $header_three_right_side_contact_icon_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_color'] ?? '';
    $header_three_right_side_contact_icon_hover_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_color'] ?? '';
    $header_three_right_side_contact_icon_hover_bg_color = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_bg_color'] ?? '';

    if (!empty($header_three_right_side_contact_color)) {
        $custom_css .= "
        header.style-3 .nav-right .hotline .hotline-info span{
                color: $header_three_right_side_contact_color; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_number_color)) {
        $custom_css .= "
        header.style-3 .nav-right .hotline .hotline-info h6 a{
                color: $header_three_right_side_contact_number_color; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_number_hover_color)) {
        $custom_css .= "
        header.style-3 .nav-right .hotline .hotline-info h6 a:hover{
                color: $header_three_right_side_contact_number_hover_color; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_color)) {
        $custom_css .= "
        header.style-3 .nav-right .hotline .hotline-icon svg,header.style-3 .nav-right .hotline .hotline-icon{
                fill: $header_three_right_side_contact_icon_color; 
                border-color: $header_three_right_side_contact_icon_hover_bg_color;
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_color)) {
        $custom_css .= "
        header.style-3 .hotline:hover .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_hover_color !important; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_bg_color)) {
        $custom_css .= "
        header.style-3 .hotline:hover .hotline-icon,header.style-3 .nav-right .hotline .hotline-icon{
                background-color: $header_three_right_side_contact_icon_hover_bg_color;
                border-color: $header_three_right_side_contact_icon_hover_bg_color;
            }
        ";
    }

    /**************************
     * RIght Side  button 
     *************************/
    $header_three_button_text_color = $egns_theme_options['header_three_formate_color']['header_three_button_text_color'] ?? '';
    $header_three_hover_button_text_color = $egns_theme_options['header_three_formate_color']['header_three_hover_button_text_color'] ?? '';
    $header_three_button_background_color = $egns_theme_options['header_three_formate_color']['header_three_button_background_color'] ?? '';
    $header_three_button_hover_background_color = $egns_theme_options['header_three_formate_color']['header_three_button_hover_background_color'] ?? '';

    if (!empty($header_three_button_text_color)) {
        $custom_css .= "
        .primary-btn6{
                color: $header_three_button_text_color; 
            }
        ";
    }
    if (!empty($header_three_hover_button_text_color)) {
        $custom_css .= "
        .primary-btn6:hover{
                color: $header_three_hover_button_text_color; 
            }
        ";
    }
    if (!empty($header_three_button_background_color)) {
        $custom_css .= "
        .primary-btn6{
            background-color: $header_three_button_background_color; 
            }
        ";
    }
    if (!empty($header_three_button_hover_background_color)) {
        $custom_css .= "
        .primary-btn6:before{
            background-color: $header_three_button_hover_background_color; 
            }
        ";
    }

    //header three Sticky
    $header_three_background_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_background_color_sticky'] ?? '';
    $header_three_menu_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_menu_text_color_sticky'] ?? '';
    $header_three_menu_hover_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_menu_hover_text_color_sticky'] ?? '';
    $header_three_sub_menu_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_text_color_sticky'] ?? '';
    $header_three_sub_menu_hover_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_hover_text_color_sticky'] ?? '';
    $header_three_sub_menu_background_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_background_color_sticky'] ?? '';


    if (!empty($header_three_background_color_sticky)) {
        $custom_css .= "
            header.style-3.sticky{
                background-color: $header_three_background_color_sticky; 
            }
        ";
    }

    if (!empty($header_three_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .main-menu ul > li a,header.style-3.sticky .main-menu ul > li.menu-item-has-children::after {
                color: $header_three_menu_text_color_sticky;
            }
        ";
    }

    if (!empty($header_three_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .main-menu ul > li a:hover {
                color: $header_three_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_three_sub_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .main-menu ul > li ul.sub-menu > li a,header.style-3.sticky .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_three_sub_menu_text_color_sticky;
            }
        ";
    }
    if (!empty($header_three_sub_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_three_sub_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_three_sub_menu_background_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .main-menu ul > li ul.sub-menu {
                background: $header_three_sub_menu_background_color_sticky;
            }
        ";
    }

    /**************************
     * RIght Side Contact Style 
     *************************/
    $header_three_right_side_contact_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_color_sticky'] ?? '';
    $header_three_right_side_contact_number_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_color_sticky'] ?? '';
    $header_three_right_side_contact_number_hover_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_hover_color_sticky'] ?? '';
    $header_three_right_side_contact_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_color_sticky'] ?? '';
    $header_three_right_side_contact_icon_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_color_sticky'] ?? '';
    $header_three_right_side_contact_icon_hover_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_color_sticky'] ?? '';
    $header_three_right_side_contact_icon_hover_bg_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_bg_color_sticky'] ?? '';

    if (!empty($header_three_right_side_contact_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .nav-right .hotline .hotline-info span{
                color: $header_three_right_side_contact_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_number_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .nav-right .hotline .hotline-info h6 a{
                color: $header_three_right_side_contact_number_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_number_hover_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .nav-right .hotline .hotline-info h6 a:hover{
                color: $header_three_right_side_contact_number_hover_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .nav-right .hotline .hotline-icon svg,header.style-3.sticky .nav-right .hotline .hotline-icon{
                fill: $header_three_right_side_contact_icon_color_sticky;
                border-color: $header_three_right_side_contact_icon_hover_bg_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .hotline:hover .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_hover_color_sticky !important; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_bg_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .hotline:hover .hotline-icon,header.style-3.sticky .nav-right .hotline .hotline-icon{
                background-color: $header_three_right_side_contact_icon_hover_bg_color_sticky;
                border-color: $header_three_right_side_contact_icon_hover_bg_color_sticky;
            }
        ";
    }

    /**************************
     * RIght Side  button 
     *************************/
    $header_three_button_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_button_text_color_sticky'] ?? '';
    $header_three_hover_button_text_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_hover_button_text_color_sticky'] ?? '';
    $header_three_button_background_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_button_background_color_sticky'] ?? '';
    $header_three_button_hover_background_color_sticky = $egns_theme_options['header_three_formate_color']['header_three_button_hover_background_color_sticky'] ?? '';

    if (!empty($header_three_button_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .primary-btn6{
                color: $header_three_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_hover_button_text_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .primary-btn6:hover{
                color: $header_three_hover_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_button_background_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .primary-btn6{
            background-color: $header_three_button_background_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_button_hover_background_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .primary-btn6:before{
            background-color: $header_three_button_hover_background_color_sticky; 
            }
        ";
    }

    /**************************
     * Mobile menu
     *************************/
    //header three mobile
    $header_three_background_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_background_color_mobile'] ?? '';
    $header_three_menu_text_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_menu_text_color_mobile'] ?? '';
    $header_three_menu_hover_text_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_menu_hover_text_color_mobile'] ?? '';
    $header_three_sub_menu_text_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_text_color_mobile'] ?? '';
    $header_three_sub_menu_hover_text_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_hover_text_color_mobile'] ?? '';
    $header_three_sub_menu_background_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_sub_menu_background_color_mobile'] ?? '';


    if (!empty($header_three_background_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu{
                 background: $header_three_background_color_mobile; 
             }
         ";
    }

    if (!empty($header_three_menu_text_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu ul > li a,header.style-3 .main-menu ul > li i {
                 color: $header_three_menu_text_color_mobile;
             }
         ";
    }

    if (!empty($header_three_menu_hover_text_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu ul > li a:hover {
                 color: $header_three_menu_hover_text_color_mobile;
             }
         ";
    }
    if (!empty($header_three_sub_menu_text_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu ul > li ul.sub-menu > li a,header.style-3.main-menu ul > li ul.sub-menu > li .dropdown-icon {
                 color: $header_three_sub_menu_text_color_mobile;
             }
         ";
    }
    if (!empty($header_three_sub_menu_hover_text_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu ul > li ul.sub-menu > li a:hover {
                 color: $header_three_sub_menu_hover_text_color_mobile;
             }
         ";
    }
    if (!empty($header_three_sub_menu_background_color_mobile)) {
        $custom_css .= "
         header.style-3 .main-menu ul > li ul.sub-menu {
                 background: $header_three_sub_menu_background_color_mobile;
             }
         ";
    }

    /**************************
     * RIght Side Contact Style 
     *************************/
    $header_three_right_side_contact_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_color_mobile'] ?? '';
    $header_three_right_side_contact_number_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_color_mobile'] ?? '';
    $header_three_right_side_contact_number_hover_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_number_hover_color_mobile'] ?? '';
    $header_three_right_side_contact_icon_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_color_mobile'] ?? '';
    $header_three_right_side_contact_icon_hover_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_color_mobile'] ?? '';
    $header_three_right_side_contact_icon_hover_bg_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_icon_hover_bg_color_mobile'] ?? '';

    if (!empty($header_three_right_side_contact_color_mobile)) {
        $custom_css .= "
         header.style-3 .hotline .hotline-info span{
                 color: $header_three_right_side_contact_color_mobile; 
             }
         ";
    }
    if (!empty($header_three_right_side_contact_number_color_mobile)) {
        $custom_css .= "
        header.style-3 .hotline .hotline-info h6 a{
                color: $header_three_right_side_contact_number_color_mobile; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_number_hover_color_mobile)) {
        $custom_css .= "
        header.style-3 .hotline .hotline-info h6 a:hover{
                color: $header_three_right_side_contact_number_hover_color_mobile; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_color_mobile)) {
        $custom_css .= "
         header.style-3 .hotline .hotline-icon svg,header.style-3.nav-right .hotline .hotline-icon{
                 fill: $header_three_right_side_contact_icon_color_mobile; 
                 border-color: $header_three_right_side_contact_icon_hover_bg_color_mobile;
             }
         ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_color_mobile)) {
        $custom_css .= "
         header.style-3 .hotline:hover .hotline-icon svg{
                 fill: $header_three_right_side_contact_icon_hover_color_mobile !important; 
             }
         ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_bg_color_mobile)) {
        $custom_css .= "
         header.style-3 .hotline:hover .hotline-icon,header.style-3.nav-right .hotline .hotline-icon{
                 background-color: $header_three_right_side_contact_icon_hover_bg_color_mobile;
                 border-color: $header_three_right_side_contact_icon_hover_bg_color_mobile;
             }
         ";
    }

