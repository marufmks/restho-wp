<?php
if (!defined('ABSPATH')) {
    exit(); // exit if access directly
}
function egnsCustomStyling()
{
    $custom_css = "";
    $egns_theme_options = get_option('egns_theme_options');


    /**************************
     * Primary Color Start
     *************************/
    $primary_color = $egns_theme_options['primary_color'] ?? '';


    if (!empty($primary_color)) {
        $custom_css .= "
            :root{
                --primary-color1: $primary_color; 
            }
        ";
    }

    /**************************
     * Primary Color end
     *************************/



    /**************************
     * topbar Style Start 
     *************************/

    // topbar  

    $topbar_sub_welcome_title_color = $egns_theme_options['topbar_sub_welcome_title_color'] ?? '';
    $topbar_welcome_title_color = $egns_theme_options['topbar_welcome_title_color'] ?? '';
    $topbar_list_title_color = $egns_theme_options['topbar_list_title_color'] ?? '';
    $topbar_list_title_hover_color = $egns_theme_options['topbar_list_title_hover_color'] ?? '';
    $topbar_icon_color = $egns_theme_options['topbar_icon_color'] ?? '';
    $topbar_bg_color = $egns_theme_options['topbar_bg_color'] ?? '';



    if (!empty($topbar_sub_welcome_title_color)) {
        $custom_css .= "
        .top-bar .open-time p span,.top-bar.three .welcome-note p span{
                color: $topbar_sub_welcome_title_color; 
            }
        ";
    }
    if (!empty($topbar_welcome_title_color)) {
        $custom_css .= "
        .top-bar .open-time p,.top-bar.three .welcome-note p{
                color: $topbar_welcome_title_color; 
            }
        ";
    }
    if (!empty($topbar_list_title_color)) {
        $custom_css .= "
        .top-bar .contact-info ul li a,.top-bar.three .contact-info ul li a{
                color: $topbar_list_title_color; 
            }
        ";
    }
    if (!empty($topbar_list_title_hover_color)) {
        $custom_css .= "
       .top-bar .contact-info ul li a:hover,.top-bar.three .contact-info ul li a:hover{
                color: $topbar_list_title_hover_color; 
            }
        ";
    }
    if (!empty($topbar_icon_color)) {
        $custom_css .= "
        .top-bar .contact-info ul li a i,.top-bar.three .contact-info ul li a i{
                color: $topbar_icon_color; 
            }
        ";
    }
    if (!empty($topbar_bg_color)) {
        $custom_css .= "
        .top-bar,.top-bar.three{
                background: $topbar_bg_color; 
            }
        ";
    }

    
    /**************************
     * Header Style Start 
     *************************/

    // Header one 

    $header_one_background_color = $egns_theme_options['header_one_formate_color']['header_one_background_color'] ?? '';
    $header_one_menu_text_color = $egns_theme_options['header_one_formate_color']['header_one_menu_text_color'] ?? '';
    $header_one_menu_hover_text_color = $egns_theme_options['header_one_formate_color']['header_one_menu_hover_text_color'] ?? '';
    $header_one_sub_menu_text_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_text_color'] ?? '';
    $header_one_sub_menu_hover_text_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_hover_text_color'] ?? '';
    $header_one_sub_menu_background_color = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_background_color'] ?? '';


    if (!empty($header_one_background_color)) {
        $custom_css .= "
        header.style-1 {
                background: $header_one_background_color; 
            }
        ";
    }

    if (!empty($header_one_menu_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu ul > li a,header.style-1 .main-menu ul > li.menu-item-has-children::after {
                color: $header_one_menu_text_color;
            }
        ";
    }

    if (!empty($header_one_menu_hover_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu ul > li a:hover {
                color: $header_one_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_one_sub_menu_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu ul > li ul.sub-menu > li a,header.style-1 .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_one_sub_menu_text_color;
            }
        ";
    }
    if (!empty($header_one_sub_menu_hover_text_color)) {
        $custom_css .= "
        header.style-1 .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_one_sub_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_one_sub_menu_background_color)) {
        $custom_css .= "
        header.style-1 .main-menu ul > li ul.sub-menu {
                background: $header_one_sub_menu_background_color;
            }
        ";
    }

    /**************************
     * RIght Side Contact Style 
     *************************/
    $header_one_right_side_contact_color = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_color'] ?? '';
    $header_one_right_side_contact_icon_color = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_color'] ?? '';
    $header_one_right_side_contact_icon_hover_color = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_color'] ?? '';
    $header_one_right_side_contact_icon_hover_bg_color = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_bg_color'] ?? '';

    if (!empty($header_one_right_side_contact_color)) {
        $custom_css .= "
        header.style-1 .nav-right .hotline .hotline-info span{
                color: $header_one_right_side_contact_color; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_color)) {
        $custom_css .= "
        header.style-1 .nav-right .hotline .hotline-icon svg{
                fill: $header_one_right_side_contact_icon_color; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_hover_color)) {
        $custom_css .= "
        header.style-1 .hotline:hover .hotline-icon svg{
                fill: $header_one_right_side_contact_icon_hover_color; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_hover_bg_color)) {
        $custom_css .= "
        header.style-1 .hotline:hover .hotline-icon,header.style-1 .nav-right .hotline .hotline-icon{
                background-color: $header_one_right_side_contact_icon_hover_bg_color;
                border-color: $header_one_right_side_contact_icon_hover_bg_color;
            }
        ";
    }

    /**************************
     * RIght Side  button 
     *************************/
    $header_one_button_text_color = $egns_theme_options['header_one_formate_color']['header_one_button_text_color'] ?? '';
    $header_one_hover_button_text_color = $egns_theme_options['header_one_formate_color']['header_one_hover_button_text_color'] ?? '';
    $header_one_button_background_color = $egns_theme_options['header_one_formate_color']['header_one_button_background_color'] ?? '';
    $header_one_button_hover_background_color = $egns_theme_options['header_one_formate_color']['header_one_button_hover_background_color'] ?? '';

    if (!empty($header_one_button_text_color)) {
        $custom_css .= "
        .primary-btn{
                color: $header_one_button_text_color; 
            }
        ";
    }
    if (!empty($header_one_hover_button_text_color)) {
        $custom_css .= "
        .primary-btn:hover{
                color: $header_one_hover_button_text_color; 
            }
        ";
    }
    if (!empty($header_one_button_background_color)) {
        $custom_css .= "
        .primary-btn{
            background-color: $header_one_button_background_color; 
            }
        ";
    }
    if (!empty($header_one_button_hover_background_color)) {
        $custom_css .= "
        .primary-btn:before{
            background-color: $header_one_button_hover_background_color; 
            }
        ";
    }

    //header One Sticky
    $header_one_background_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_background_color_sticky'] ?? '';
    $header_one_menu_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_menu_text_color_sticky'] ?? '';
    $header_one_menu_hover_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_menu_hover_text_color_sticky'] ?? '';
    $header_one_sub_menu_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_text_color_sticky'] ?? '';
    $header_one_sub_menu_hover_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_hover_text_color_sticky'] ?? '';
    $header_one_sub_menu_background_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_background_color_sticky'] ?? '';


    if (!empty($header_one_background_color_sticky)) {
        $custom_css .= "
            header.style-1.sticky{
                background-color: $header_one_background_color_sticky; 
            }
        ";
    }

    if (!empty($header_one_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .main-menu ul > li a,header.style-1.sticky .main-menu ul > li.menu-item-has-children::after {
                color: $header_one_menu_text_color_sticky;
            }
        ";
    }

    if (!empty($header_one_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .main-menu ul > li a:hover {
                color: $header_one_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_one_sub_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .main-menu ul > li ul.sub-menu > li a,header.style-1.sticky .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_one_sub_menu_text_color_sticky;
            }
        ";
    }
    if (!empty($header_one_sub_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_one_sub_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_one_sub_menu_background_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .main-menu ul > li ul.sub-menu {
                background: $header_one_sub_menu_background_color_sticky;
            }
        ";
    }

    /**************************
     * RIght Side Contact Style 
     *************************/
    $header_one_right_side_contact_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_color_sticky'] ?? '';
    $header_one_right_side_contact_icon_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_color_sticky'] ?? '';
    $header_one_right_side_contact_icon_hover_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_color_sticky'] ?? '';
    $header_one_right_side_contact_icon_hover_bg_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_bg_color_sticky'] ?? '';

    if (!empty($header_one_right_side_contact_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .nav-right .hotline .hotline-info span{
                color: $header_one_right_side_contact_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .nav-right .hotline .hotline-icon svg{
                fill: $header_one_right_side_contact_icon_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_hover_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .hotline:hover .hotline-icon svg{
                fill: $header_one_right_side_contact_icon_hover_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_right_side_contact_icon_hover_bg_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .hotline:hover .hotline-icon,header.style-1.sticky .nav-right .hotline .hotline-icon{
                background-color: $header_one_right_side_contact_icon_hover_bg_color_sticky;
                border-color: $header_one_right_side_contact_icon_hover_bg_color_sticky;
            }
        ";
    }

    /**************************
     * RIght Side  button 
     *************************/
    $header_one_button_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_button_text_color_sticky'] ?? '';
    $header_one_hover_button_text_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_hover_button_text_color_sticky'] ?? '';
    $header_one_button_background_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_button_background_color_sticky'] ?? '';
    $header_one_button_hover_background_color_sticky = $egns_theme_options['header_one_formate_color']['header_one_button_hover_background_color_sticky'] ?? '';

    if (!empty($header_one_button_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .primary-btn{
                color: $header_one_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_hover_button_text_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .primary-btn:hover{
                color: $header_one_hover_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_button_background_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .primary-btn{
            background-color: $header_one_button_background_color_sticky; 
            }
        ";
    }
    if (!empty($header_one_button_hover_background_color_sticky)) {
        $custom_css .= "
        header.style-1.sticky .primary-btn:before{
            background-color: $header_one_button_hover_background_color_sticky; 
            }
        ";
    }

     /**************************
     * Mobile menu
     *************************/
     //header One mobile
     $header_one_background_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_background_color_mobile'] ?? '';
     $header_one_menu_text_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_menu_text_color_mobile'] ?? '';
     $header_one_menu_hover_text_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_menu_hover_text_color_mobile'] ?? '';
     $header_one_sub_menu_text_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_text_color_mobile'] ?? '';
     $header_one_sub_menu_hover_text_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_hover_text_color_mobile'] ?? '';
     $header_one_sub_menu_background_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_sub_menu_background_color_mobile'] ?? '';
 
 
     if (!empty($header_one_background_color_mobile)) {
         $custom_css .= "
         header.style-1 .main-menu{
                 background: $header_one_background_color_mobile; 
             }
         ";
     }
 
     if (!empty($header_one_menu_text_color_mobile)) {
         $custom_css .= "
         header.style-1 .main-menu ul > li a,header.style-1 .main-menu ul > li i {
                 color: $header_one_menu_text_color_mobile;
             }
         ";
     }
 
     if (!empty($header_one_menu_hover_text_color_mobile)) {
         $custom_css .= "
         header.style-1 .main-menu ul > li a:hover {
                 color: $header_one_menu_hover_text_color_mobile;
             }
         ";
     }
     if (!empty($header_one_sub_menu_text_color_mobile)) {
         $custom_css .= "
         header.style-1.main-menu ul > li ul.sub-menu > li a,header.style-1.main-menu ul > li ul.sub-menu > li .dropdown-icon {
                 color: $header_one_sub_menu_text_color_mobile;
             }
         ";
     }
     if (!empty($header_one_sub_menu_hover_text_color_mobile)) {
         $custom_css .= "
         header.style-1.main-menu ul > li ul.sub-menu > li a:hover {
                 color: $header_one_sub_menu_hover_text_color_mobile;
             }
         ";
     }
     if (!empty($header_one_sub_menu_background_color_mobile)) {
         $custom_css .= "
         header.style-1.main-menu ul > li ul.sub-menu {
                 background: $header_one_sub_menu_background_color_mobile;
             }
         ";
     }
 
     /**************************
      * RIght Side Contact Style 
      *************************/
     $header_one_right_side_contact_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_color_mobile'] ?? '';
     $header_one_right_side_contact_icon_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_color_mobile'] ?? '';
     $header_one_right_side_contact_icon_hover_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_color_mobile'] ?? '';
     $header_one_right_side_contact_icon_hover_bg_color_mobile = $egns_theme_options['header_one_formate_color']['header_one_right_side_contact_icon_hover_bg_color_mobile'] ?? '';
 
     if (!empty($header_one_right_side_contact_color_mobile)) {
         $custom_css .= "
         header.style-1 .hotline .hotline-info span{
                 color: $header_one_right_side_contact_color_mobile; 
             }
         ";
     }
     if (!empty($header_one_right_side_contact_icon_color_mobile)) {
         $custom_css .= "
         header.style-1 .hotline .hotline-icon svg{
                 fill: $header_one_right_side_contact_icon_color_mobile; 
             }
         ";
     }
     if (!empty($header_one_right_side_contact_icon_hover_color_mobile)) {
         $custom_css .= "
         header.style-1.hotline:hover .hotline-icon svg{
                 fill: $header_one_right_side_contact_icon_hover_color_mobile; 
             }
         ";
     }
     if (!empty($header_one_right_side_contact_icon_hover_bg_color_mobile)) {
         $custom_css .= "
         header.style-1.hotline:hover .hotline-icon,header.style-1.nav-right .hotline .hotline-icon{
                 background-color: $header_one_right_side_contact_icon_hover_bg_color_mobile;
                 border-color: $header_one_right_side_contact_icon_hover_bg_color_mobile;
             }
         ";
     }
 
     

    /**************************
     * Header Two Style Starts
     *************************/

    $header_two_background_color = $egns_theme_options['header_two_formate_color']['header_two_background_color'] ?? '';
    $header_two_menu_text_color = $egns_theme_options['header_two_formate_color']['header_two_menu_text_color'] ?? '';
    $header_two_menu_hover_text_color = $egns_theme_options['header_two_formate_color']['header_two_menu_hover_text_color'] ?? '';
    $header_two_sub_menu_text_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_text_color'] ?? '';
    $header_two_sub_menu_hover_text_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_hover_text_color'] ?? '';
    $header_two_sub_menu_background_color = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_background_color'] ?? '';


    if (!empty($header_two_background_color)) {
        $custom_css .= "
        header.style-2 {
                background: $header_two_background_color; 
            }
        ";
    }

    if (!empty($header_two_menu_text_color)) {
        $custom_css .= "
        header.style-2 .main-menu ul > li a,header.style-2 .main-menu ul > li.menu-item-has-children::after {
                color: $header_two_menu_text_color;
            }
        ";
    }

    if (!empty($header_two_menu_hover_text_color)) {
        $custom_css .= "
        header.style-2 .main-menu ul > li a:hover {
                color: $header_two_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_two_sub_menu_text_color)) {
        $custom_css .= "
        header.style-2 .main-menu ul > li ul.sub-menu > li a,header.style-2 .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_two_sub_menu_text_color;
            }
        ";
    }
    if (!empty($header_two_sub_menu_hover_text_color)) {
        $custom_css .= "
        header.style-2 .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_two_sub_menu_hover_text_color;
            }
        ";
    }
    if (!empty($header_two_sub_menu_background_color)) {
        $custom_css .= "
        header.style-2 .main-menu ul > li ul.sub-menu {
                background: $header_two_sub_menu_background_color;
            }
        ";
    }


    /**************************
     * RIght Side  button 
     *************************/
    $header_two_button_text_color = $egns_theme_options['header_two_formate_color']['header_two_button_text_color'] ?? '';
    $header_two_hover_button_text_color = $egns_theme_options['header_two_formate_color']['header_two_hover_button_text_color'] ?? '';
    $header_two_button_background_color = $egns_theme_options['header_two_formate_color']['header_two_button_background_color'] ?? '';
    $header_two_button_hover_background_color = $egns_theme_options['header_two_formate_color']['header_two_button_hover_background_color'] ?? '';

    if (!empty($header_two_button_text_color)) {
        $custom_css .= "
        .primary-btn4{
                color: $header_two_button_text_color; 
            }
        ";
    }
    if (!empty($header_two_hover_button_text_color)) {
        $custom_css .= "
        .primary-btn4:hover{
                color: $header_two_hover_button_text_color; 
            }
        ";
    }
    if (!empty($header_two_button_background_color)) {
        $custom_css .= "
        .primary-btn4{
            background-color: $header_two_button_background_color; 
            }
        ";
    }
    if (!empty($header_two_button_hover_background_color)) {
        $custom_css .= "
        .primary-btn4:before{
            background-color: $header_two_button_hover_background_color; 
            }
        ";
    }

    //header two Sticky
    $header_two_background_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_background_color_sticky'] ?? '';
    $header_two_menu_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_menu_text_color_sticky'] ?? '';
    $header_two_menu_hover_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_menu_hover_text_color_sticky'] ?? '';
    $header_two_sub_menu_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_text_color_sticky'] ?? '';
    $header_two_sub_menu_hover_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_hover_text_color_sticky'] ?? '';
    $header_two_sub_menu_background_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_background_color_sticky'] ?? '';


    if (!empty($header_two_background_color_sticky)) {
        $custom_css .= "
            header.style-2.sticky{
                background-color: $header_two_background_color_sticky; 
            }
        ";
    }

    if (!empty($header_two_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .main-menu ul > li a,header.style-2.sticky .main-menu ul > li.menu-item-has-children::after {
                color: $header_two_menu_text_color_sticky;
            }
        ";
    }

    if (!empty($header_two_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .main-menu ul > li a:hover {
                color: $header_two_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_two_sub_menu_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .main-menu ul > li ul.sub-menu > li a,header.style-2.sticky .main-menu ul > li ul.sub-menu > li .dropdown-icon {
                color: $header_two_sub_menu_text_color_sticky;
            }
        ";
    }
    if (!empty($header_two_sub_menu_hover_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .main-menu ul > li ul.sub-menu > li a:hover {
                color: $header_two_sub_menu_hover_text_color_sticky;
            }
        ";
    }
    if (!empty($header_two_sub_menu_background_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .main-menu ul > li ul.sub-menu {
                background: $header_two_sub_menu_background_color_sticky;
            }
        ";
    }

    /**************************
     * RIght Side  button 
     *************************/
    $header_two_button_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_button_text_color_sticky'] ?? '';
    $header_two_hover_button_text_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_hover_button_text_color_sticky'] ?? '';
    $header_two_button_background_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_button_background_color_sticky'] ?? '';
    $header_two_button_hover_background_color_sticky = $egns_theme_options['header_two_formate_color']['header_two_button_hover_background_color_sticky'] ?? '';

    if (!empty($header_two_button_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .primary-btn4{
                color: $header_two_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_two_hover_button_text_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .primary-btn4:hover{
                color: $header_two_hover_button_text_color_sticky; 
            }
        ";
    }
    if (!empty($header_two_button_background_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .primary-btn4{
            background-color: $header_two_button_background_color_sticky; 
            }
        ";
    }
    if (!empty($header_two_button_hover_background_color_sticky)) {
        $custom_css .= "
        header.style-2.sticky .primary-btn4:before{
            background-color: $header_two_button_hover_background_color_sticky; 
            }
        ";
    }

     /**************************
     * Mobile menu
     *************************/
     //header two mobile
     $header_two_background_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_background_color_mobile'] ?? '';
     $header_two_menu_text_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_menu_text_color_mobile'] ?? '';
     $header_two_menu_hover_text_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_menu_hover_text_color_mobile'] ?? '';
     $header_two_sub_menu_text_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_text_color_mobile'] ?? '';
     $header_two_sub_menu_hover_text_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_hover_text_color_mobile'] ?? '';
     $header_two_sub_menu_background_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_sub_menu_background_color_mobile'] ?? '';
 
 
     if (!empty($header_two_background_color_mobile)) {
         $custom_css .= "
         header.style-2 .main-menu{
                 background: $header_two_background_color_mobile; 
             }
         ";
     }
 
     if (!empty($header_two_menu_text_color_mobile)) {
         $custom_css .= "
         header.style-2 .main-menu ul > li a,header.style-2 .main-menu ul > li i {
                 color: $header_two_menu_text_color_mobile;
             }
         ";
     }
 
     if (!empty($header_two_menu_hover_text_color_mobile)) {
         $custom_css .= "
         header.style-2 .main-menu ul > li a:hover {
                 color: $header_two_menu_hover_text_color_mobile;
             }
         ";
     }
     if (!empty($header_two_sub_menu_text_color_mobile)) {
         $custom_css .= "
         header.style-2.main-menu ul > li ul.sub-menu > li a,header.style-2.main-menu ul > li ul.sub-menu > li .dropdown-icon {
                 color: $header_two_sub_menu_text_color_mobile;
             }
         ";
     }
     if (!empty($header_two_sub_menu_hover_text_color_mobile)) {
         $custom_css .= "
         header.style-2.main-menu ul > li ul.sub-menu > li a:hover {
                 color: $header_two_sub_menu_hover_text_color_mobile;
             }
         ";
     }
     if (!empty($header_two_sub_menu_background_color_mobile)) {
         $custom_css .= "
         header.style-2.main-menu ul > li ul.sub-menu {
                 background: $header_two_sub_menu_background_color_mobile;
             }
         ";
     }
 
     /**************************
      * RIght Side Contact Style 
      *************************/
     $header_two_right_side_contact_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_color_mobile'] ?? '';
     $header_two_right_side_contact_icon_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_icon_color_mobile'] ?? '';
     $header_two_right_side_contact_icon_hover_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_icon_hover_color_mobile'] ?? '';
     $header_two_right_side_contact_icon_hover_bg_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_icon_hover_bg_color_mobile'] ?? '';
 
     if (!empty($header_two_right_side_contact_color_mobile)) {
         $custom_css .= "
         header.style-2 .hotline .hotline-info span{
                 color: $header_two_right_side_contact_color_mobile; 
             }
         ";
     }
     if (!empty($header_two_right_side_contact_icon_color_mobile)) {
         $custom_css .= "
         header.style-2 .hotline .hotline-icon svg{
                 fill: $header_two_right_side_contact_icon_color_mobile; 
             }
         ";
     }
     if (!empty($header_two_right_side_contact_icon_hover_color_mobile)) {
         $custom_css .= "
         header.style-2.hotline:hover .hotline-icon svg{
                 fill: $header_two_right_side_contact_icon_hover_color_mobile; 
             }
         ";
     }
     if (!empty($header_two_right_side_contact_icon_hover_bg_color_mobile)) {
         $custom_css .= "
         header.style-2.hotline:hover .hotline-icon,header.style-1.nav-right .hotline .hotline-icon{
                 background-color: $header_two_right_side_contact_icon_hover_bg_color_mobile;
                 border-color: $header_two_right_side_contact_icon_hover_bg_color_mobile;
             }
         ";
     }
 

    /**************************
     *Header Three Style Starts
     *************************/
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
    if (!empty($header_three_right_side_contact_icon_color)) {
        $custom_css .= "
        header.style-3 .nav-right .hotline .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_color; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_color)) {
        $custom_css .= "
        header.style-3 .hotline:hover .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_hover_color; 
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
    if (!empty($header_three_right_side_contact_icon_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .nav-right .hotline .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_color_sticky; 
            }
        ";
    }
    if (!empty($header_three_right_side_contact_icon_hover_color_sticky)) {
        $custom_css .= "
        header.style-3.sticky .hotline:hover .hotline-icon svg{
                fill: $header_three_right_side_contact_icon_hover_color_sticky; 
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
         header.style-3.main-menu ul > li ul.sub-menu > li a,header.style-3.main-menu ul > li ul.sub-menu > li .dropdown-icon {
                 color: $header_three_sub_menu_text_color_mobile;
             }
         ";
     }
     if (!empty($header_three_sub_menu_hover_text_color_mobile)) {
         $custom_css .= "
         header.style-3.main-menu ul > li ul.sub-menu > li a:hover {
                 color: $header_three_sub_menu_hover_text_color_mobile;
             }
         ";
     }
     if (!empty($header_three_sub_menu_background_color_mobile)) {
         $custom_css .= "
         header.style-3.main-menu ul > li ul.sub-menu {
                 background: $header_three_sub_menu_background_color_mobile;
             }
         ";
     }
 
     /**************************
      * RIght Side Contact Style 
      *************************/
     $header_three_right_side_contact_color_mobile = $egns_theme_options['header_three_formate_color']['header_three_right_side_contact_color_mobile'] ?? '';
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
     if (!empty($header_three_right_side_contact_icon_color_mobile)) {
         $custom_css .= "
         header.style-3 .hotline .hotline-icon svg{
                 fill: $header_three_right_side_contact_icon_color_mobile; 
             }
         ";
     }
     if (!empty($header_three_right_side_contact_icon_hover_color_mobile)) {
         $custom_css .= "
         header.style-3.hotline:hover .hotline-icon svg{
                 fill: $header_three_right_side_contact_icon_hover_color_mobile; 
             }
         ";
     }
     if (!empty($header_three_right_side_contact_icon_hover_bg_color_mobile)) {
         $custom_css .= "
         header.style-3.hotline:hover .hotline-icon,header.style-1.nav-right .hotline .hotline-icon{
                 background-color: $header_three_right_side_contact_icon_hover_bg_color_mobile;
                 border-color: $header_three_right_side_contact_icon_hover_bg_color_mobile;
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
    $breadcrumb_home_title = $egns_theme_options['breadcrumb_home_title_typography'] ?? '';
    $breadcrumb_link = $egns_theme_options['breadcrumb_link_typography'] ?? '';


    // Breadcrumb Title

    $breadcrumb_title_font_size = $breadcrumb_title['font-size'] ?? '';
    $breadcrumb_title_color = $breadcrumb_title['color'] ?? '';

    if (!empty($breadcrumb_title_font_size)) {
        $custom_css .= "
        .breadcrumb-section .breadcrumb-title{
            font-size: $breadcrumb_title_font_size" . 'px' . ";
        }
    ";
    }

    if (!empty($breadcrumb_title_color)) {
        $custom_css .= "
        .breadcrumb-section .breadcrumb-title{
            color: $breadcrumb_title_color;
        }
    ";
    }

    // Breadcrumb Link 

    $breadcrumb_link_font_size = $breadcrumb_link['font-size'] ?? '';
    $breadcrumb_link_color = $breadcrumb_link['color'] ?? '';

    if (!empty($breadcrumb_link_font_size)) {
        $custom_css .= "
        .breadcrumb-section .breadcrumb .breadcrumb-item,.breadcrumb-section .breadcrumb .active,.breadcrumb-section .breadcrumb-item + .breadcrumb-item::before{
            font-size: $breadcrumb_link_font_size" . 'px' . ";
        }
    ";
    }
    if (!empty($breadcrumb_link_color)) {
        $custom_css .= "
        .breadcrumb-section .breadcrumb .breadcrumb-item,.breadcrumb-section .breadcrumb .active,.breadcrumb-section .breadcrumb-item + .breadcrumb-item::before{
            color: $breadcrumb_link_color;
        }
    ";
    }

        // Breadcrumb Home Title

        $breadcrumb_home_title_font_size = $breadcrumb_home_title['font-size'] ?? '';
        $breadcrumb_home_title_color = $breadcrumb_home_title['color'] ?? '';
    
        if (!empty($breadcrumb_home_title_font_size)) {
            $custom_css .= "
            .breadcrumb-section nav ol li a{
                font-size: $breadcrumb_home_title_font_size" . 'px' . ";
            }
        ";
        }
    
        if (!empty($breadcrumb_home_title_color)) {
            $custom_css .= "
            .breadcrumb-section nav ol li a{
                color: $breadcrumb_home_title_color;
            }
        ";
        }
      


    /*********************
     * End Breadcrumb Style
     *********************/

    $footer_widget_area_padding_top = $egns_theme_options['footer_widget_area_padding']['top'] ?? '';
    $footer_widget_area_padding_bottom = $egns_theme_options['footer_widget_area_padding']['bottom'] ?? '';
    $footer_widget_area_padding_unit = $egns_theme_options['footer_widget_area_padding']['unit'] ?? '';

    if (!empty($footer_widget_area_padding_top)) {
        $custom_css .= "
        .footer-section .footer-top{
            padding-top: $footer_widget_area_padding_top$footer_widget_area_padding_unit;
        }
    ";
    }
    if (!empty($footer_widget_area_padding_bottom)) {
        $custom_css .= "
        .footer-section .footer-top{
            padding-bottom: $footer_widget_area_padding_bottom$footer_widget_area_padding_unit;
        }
    ";
    }

    wp_register_style('egns-stylesheet', false);
    wp_enqueue_style('egns-stylesheet', false);
    wp_add_inline_style('egns-stylesheet', $custom_css, true);
}
if (class_exists('CSF')) {
    add_action('wp_enqueue_scripts', 'egnsCustomStyling');
}
