<?php 

/*-----------------------------------------
	CONTROL CORE CLASSES FOR AVOID ERRORS
------------------------------------------*/
if( class_exists( 'CSF' ) ) {

	/*-----------------------------------
	    PAGE METABOX SECTION
	------------------------------------*/
	CSF::createMetabox( EGNS_META_ID,
		array(
			'title'           => esc_html__( 'Page Settings', 'restho' ),
			'post_type'       => ['post', 'page', 'egens-case-study', 'egens-attorneys', 'egens-practice-area'],
			'context'         => 'normal',
			'priority'        => 'high',
			'show_restore'    => true,
			'enqueue_webfont' => true,
			'async_webfont'   => false,
			'output_css'      => true,
			'theme'           => 'dark',
			'id'              =>'page_meta_option',
		)
	);

	
	/*-----------------------------------
		REQUIRE META FILES
	------------------------------------*/

	require_once EGNS_INC . '/theme-options/options/pages/page-header.php';
	require_once EGNS_INC . '/theme-options/options/pages/page-breadcrumb.php';
	require_once EGNS_INC . '/theme-options/options/pages/page-footer.php';
	require_once EGNS_INC . '/theme-options/options/pages/page-css.php';

}