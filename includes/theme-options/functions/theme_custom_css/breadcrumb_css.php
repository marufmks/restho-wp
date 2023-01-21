<?php

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
