<?php
/**
 * Theme Options
 * @Packange restho
 * @since 1.0.0
 */
// exit if access directly
if ( ! defined( 'ABSPATH' ) ) {
	exit(); 
}
// Control core classes for avoid errors
if ( class_exists( 'CSF' ) ) {

	$allowed_html = wp_kses_allowed_html( 'strip' );
	$prefix       = 'egns';
	$allowed_html = '';
	// Create options
	CSF::createOptions( $prefix . '_theme_options', array(
		'menu_title'         => esc_html__( 'Restho Options', 'restho' ),
		'menu_slug'  		 => 'egns-theme-option',
		'footer_credit'      => '',
		'menu_icon'          => 'dashicons-image-filter',
		'show_footer'        => false,
		'enqueue_webfont'    => false,
		'show_search'        => true,
		'show_reset_all'     => true,
		'show_reset_section' => true,
		'show_all_options'   => true,
        'menu_position'      => 60,
		'theme'              => 'dark',
		'framework_title'    => sprintf( ('Restho <small> - Version 1.0.0 BY </small><small><a  href="https://themeforest.net/user/egenslab" target="_blank">Egenslab</a></small>' )),
	) );



	/*-------------------------------
	THEME OPTION SETTINGS
---------------------------------*/
require_once EGNS_THEME_SETTINGS . '/general/general.php';
require_once EGNS_THEME_SETTINGS . '/header/header.php';
require_once EGNS_THEME_SETTINGS . '/breadcrumbs/breadcrumbs.php';
require_once EGNS_THEME_SETTINGS . '/blog/blog.php';
require_once EGNS_THEME_SETTINGS . '/woocommerce/woocommerce.php';
require_once EGNS_THEME_SETTINGS . '/404/page.php';
require_once EGNS_THEME_SETTINGS . '/footer/footer.php';
require_once EGNS_THEME_SETTINGS . '/color/color.php';
require_once EGNS_THEME_SETTINGS . '/custom-scripts/custom_scripts.php';
require_once EGNS_THEME_SETTINGS . '/backup/backup.php';


}
