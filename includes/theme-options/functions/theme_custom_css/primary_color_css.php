<?php

$primary_color = $egns_theme_options['primary_color'] ?? '';


if (!empty($primary_color)) {
    $custom_css .= "
        :root{
            --primary-color1: $primary_color; 
        }
    ";
}