<?php

/*-----------------------------------
    PAGE FOOTER SECTION
------------------------------------*/
CSF::createSection( EGNS_META_ID,
	array(
		'title'  => esc_html__( 'Page Footer', 'restho' ),
        'parent' => 'page_meta_option',
		'fields' => array(
			
			array(
				'type'    => 'subheading',
				'content' => esc_html__( 'Page Footer Options', 'restho' ),
			),
		    array(
				'id'      => 'footer_widget_enable',
				'type'    => 'switcher',
				'title'   => esc_html__( 'Footer Widget Area', 'restho' ),
				'desc'    => esc_html__( 'If you want to show the footer widget area you can set here by ( YES / NO ).', 'restho' ),
				'default' => true,
		    ),
			array(
				'id'         => 'footer_copyright_enable',
				'type'       => 'switcher',
				'title'      => esc_html__( 'Footer Copyright Area', 'restho' ),
				'desc'       => esc_html__( 'If you need custom style in page footer copyright area you can style here.', 'restho' ),
				'default'    => false,
			),

		)
	)
);