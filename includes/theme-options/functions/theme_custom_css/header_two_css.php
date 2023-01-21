<?php
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
     header.style-2 .main-menu ul > li ul.sub-menu > li a,header.style-2.main-menu ul > li ul.sub-menu > li .dropdown-icon {
             color: $header_two_sub_menu_text_color_mobile;
         }
     ";
}
if (!empty($header_two_sub_menu_hover_text_color_mobile)) {
    $custom_css .= "
     header.style-2 .main-menu ul > li ul.sub-menu > li a:hover {
             color: $header_two_sub_menu_hover_text_color_mobile;
         }
     ";
}
if (!empty($header_two_sub_menu_background_color_mobile)) {
    $custom_css .= "
     header.style-2 .main-menu ul > li ul.sub-menu {
             background: $header_two_sub_menu_background_color_mobile;
         }
     ";
}

/**************************
 * RIght Side Contact Style 
 *************************/
$header_two_right_side_contact_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_color_mobile'] ?? '';
$header_two_right_side_contact_number_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_number_color_mobile'] ?? '';
$header_two_right_side_contact_number_hover_color_mobile = $egns_theme_options['header_two_formate_color']['header_two_right_side_contact_number_hover_color_mobile'] ?? '';
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
if (!empty($header_two_right_side_contact_number_color_mobile)) {
    $custom_css .= "
    header.style-2 .hotline .hotline-info h6 a{
            color: $header_two_right_side_contact_number_color_mobile; 
        }
    ";
}
if (!empty($header_two_right_side_contact_number_hover_color_mobile)) {
    $custom_css .= "
    header.style-2 .hotline .hotline-info h6 a:hover{
            color: $header_two_right_side_contact_number_hover_color_mobile; 
        }
    ";
}
if (!empty($header_two_right_side_contact_icon_color_mobile)) {
    $custom_css .= "
     header.style-2 .hotline .hotline-icon svg,header.style-2.nav-right .hotline .hotline-icon{
             fill: $header_two_right_side_contact_icon_color_mobile;
             border-color: $header_two_right_side_contact_icon_hover_bg_color_mobile; 
         }
     ";
}
if (!empty($header_two_right_side_contact_icon_hover_color_mobile)) {
    $custom_css .= "
     header.style-2 .hotline:hover .hotline-icon svg{
             fill: $header_two_right_side_contact_icon_hover_color_mobile !important; 
         }
     ";
}
if (!empty($header_two_right_side_contact_icon_hover_bg_color_mobile)) {
    $custom_css .= "
     header.style-2 .hotline:hover .hotline-icon,header.style-2.nav-right .hotline .hotline-icon{
             background-color: $header_two_right_side_contact_icon_hover_bg_color_mobile;
             border-color: $header_two_right_side_contact_icon_hover_bg_color_mobile;
         }
     ";
}