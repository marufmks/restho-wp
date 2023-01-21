<?php

$footer_widget_area_padding_top = $egns_theme_options['footer_widget_area_padding']['top'] ?? '';
$footer_widget_area_padding_bottom = $egns_theme_options['footer_widget_area_padding']['bottom'] ?? '';
$footer_widget_area_padding_unit = $egns_theme_options['footer_widget_area_padding']['unit'] ?? '';
$footer_copyright_text_color = $egns_theme_options['footer_copyright_text_color'] ?? '';
$footer_copyright_link_hover_color = $egns_theme_options['footer_copyright_link_hover_color'] ?? '';


if (!empty($footer_widget_area_padding_top)) {
    $custom_css .= "
        footer .footer-top{
            padding-top: $footer_widget_area_padding_top$footer_widget_area_padding_unit;
        }
    ";
}
if (!empty($footer_widget_area_padding_bottom)) {
    $custom_css .= "
        footer .footer-top{
            padding-bottom: $footer_widget_area_padding_bottom$footer_widget_area_padding_unit;
        }
    ";
}

if (!empty($footer_copyright_text_color)) {
    $custom_css .= "
        footer .footer-btm .copyright-area p,footer .footer-btm .privacy-policy p a{
                color: $footer_copyright_text_color;
            }
        ";
}
if (!empty($footer_copyright_link_hover_color)) {
    $custom_css .= "
        footer .footer-btm .privacy-policy p a:hover{
                color: $footer_copyright_link_hover_color;
            }
        ";
}
