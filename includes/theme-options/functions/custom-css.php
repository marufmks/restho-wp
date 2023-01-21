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
    include_once('theme_custom_css/primary_color_css.php');

    /**************************
     * Primary Color end
     *************************/



    /**************************
     * topbar Style Start 
     *************************/

    include_once('theme_custom_css/topbar_css.php');


    /**************************
     * Header Style Start 
     *************************/

    /**************************
     * Header One Style Starts
     *************************/
    include_once('theme_custom_css/header_one_css.php');


    /**************************
     * Header Two Style Starts
     *************************/
    include_once('theme_custom_css/header_two_css.php');
    


    /**************************
     *Header Three Style Starts
     *************************/
    include_once('theme_custom_css/header_three_css.php');

    /**************************
     * Header Style End
     *************************/

    /************************
     * Start Breadcrumb Style
     ************************/

     include_once('theme_custom_css/breadcrumb_css.php');

    /*********************
     * End Breadcrumb Style
     *********************/

      /*********************
     * Footer Style
     *********************/
    include_once('theme_custom_css/footer_css.php');
    


    wp_register_style('egns-stylesheet', false);
    wp_enqueue_style('egns-stylesheet', false);
    wp_add_inline_style('egns-stylesheet', $custom_css, true);
}
if (class_exists('CSF')) {
    add_action('wp_enqueue_scripts', 'egnsCustomStyling');
}
