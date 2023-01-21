<?php  

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