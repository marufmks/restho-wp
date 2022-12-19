<?php

/*-----------------------------------
    PAGE BARNER SECTION
------------------------------------*/
CSF::createSection( EGNS_META_ID,
	array(
		'title'  => esc_html__( 'Breadcrumb', 'restho' ),
        'parent' => 'page_meta_option',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Breadcrumb Options', 'restho' ),
			),
			array(
				'id'      => 'enable_breadcrumb',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Enable Breadcrumb', 'restho' ),
				'desc'    => esc_html__( 'If you want to show or hide page banner you can set here by toggle ( YES / NO ).', 'restho' ),
				'default' => true,
			),
            
		)
	)
);