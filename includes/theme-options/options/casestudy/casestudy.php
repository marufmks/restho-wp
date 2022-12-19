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

	$prefix = 'egens_casestudy';

	/*-------------------------------------
		Egens Case Study Package Options
	-------------------------------------*/
	CSF::createMetabox($prefix.'_info_options',array(
		'title' => esc_html__('Case Study Info','corelaw'),
		'post_type' => array('egens-case-study'),
	));
	CSF::createSection($prefix.'_info_options',array(
		'fields' => array(
			array(
				'id' => $prefix.'_client_name',
				'type' => 'text',
				'title' => esc_html__('Client Name','corelaw'),
			),
			array(
				'id' => $prefix.'_time_frame',
				'type' => 'text',
				'title' => esc_html__('Time Frame','corelaw'),
			),
			array(
				'id' => $prefix.'_year',
				'type' => 'text',
				'title' => esc_html__('Year','corelaw'),
			),
			
			array(
				'id'          => $prefix.'_select_attorneys',
				'type'        => 'select',
				'title'       => 'Select Attorneys',
				'chosen'      => true,
				'ajax'        => true,
				'multiple'    => true,
				'sortable'    => true,
				'options'     => 'posts',
				'query_args'  => array(
				'post_type' => 'egens-attorneys',
				),
			),
			
		)
	));


}//endif