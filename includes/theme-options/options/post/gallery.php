<?php

/*------------------------
	Meta Id For Gallery
-------------------------*/
$gallery_prefix = 'egns_gallery';

/*-----------------------------------
    Post Format For Gallery Metabox Section.
------------------------------------*/
CSF::createMetabox( $gallery_prefix,
	array(
		'title'           => esc_html__( 'Post Settings', 'restho' ),
		'post_type'       => 'post',
		'data_type'       => 'unserialize',
		'context'         => 'normal',
		'priority'        => 'high',
		'post_formats'    => 'gallery',
		'show_restore'    => true,
		'output_css'      => true,
		'theme'           => 'dark',
	)
);

/*-----------------------------------
    Post Formet For Gallery
------------------------------------*/
CSF::createSection( $gallery_prefix,
	array(
		'title'  => esc_html__( 'Gallery Post Setting', 'restho' ),
		'fields' => array(
			array(
				'id'          => 'egns_gallery_images',
				'type'        => 'gallery',
				'title'       => esc_html__( 'Add Gallery Images', 'restho' ),
				'desc'        => esc_html__( 'Please Upload Or Select Images From Media Library.', 'restho' ),
				'add_title'   => esc_html__( 'Add Images', 'restho' ),
				'edit_title'  => esc_html__( 'Edit Gallery', 'restho' ),
				'clear_title' => esc_html__( 'Remove Images', 'restho' ),
			),
		)
	)
);

