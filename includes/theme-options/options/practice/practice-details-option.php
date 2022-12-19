<?php
/*
 * Theme Metabox Options
 * @package Egens
 * @since 1.0.0
 * */

if ( !defined('ABSPATH') ){
	exit(); // exit if access directly
}

if ( class_exists('CSF') ){

	$prefix = 'egens_practice';

	/*-------------------------------------
		Egens Case Study Package Options
	-------------------------------------*/
	CSF::createMetabox($prefix.'_info_options',array(
		'title' => esc_html__('Pracrice Area','corelaw'),
		'post_type' => array('egens-practice-area'),
	));
	CSF::createSection($prefix.'_info_options',array(
		'fields' => array(
            array(
                'id'    => 'project_icon',
                'type'  => 'media',
                'title' => 'Icon',
                'library' => 'image',
            ),
			array(
				'id' => 'project_complete_number',
				'type' => 'text',
				'title' => esc_html__('Complete Case Number','corelaw'),
            ),
           
			
		)
	));



}//endif