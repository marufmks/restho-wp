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

	$prefix = 'egens_chef';

    /*-------------------------------------
		Progress State Information Option
	-------------------------------------*/
    CSF::createMetabox($prefix.'_designation',array(
        'title' => esc_html__('Designation','restho'),
        'post_type' => array('egens-chef'),
	));
	CSF::createSection($prefix.'_designation',array(
		'fields' => array(

			array(
				'id' => 'project_d',
				'type' => 'text',
				'title' => esc_html__('Designation','restho'),
            ),

			
			
		)
	));


	/*-------------------------------------
		chef Short Information Option
	-------------------------------------*/
	CSF::createMetabox($prefix.'_short_information',array(
		'title' => esc_html__('Short Information','restho'),
		'post_type' => array('egens-chef'),
	));
	CSF::createSection($prefix.'_short_information',array(
		'fields' => array(

            array(
                'id'     => $prefix.'_opt_fieldset_8',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'        => $prefix.'_short_content_8',
                        'type'      => 'repeater',
                        'title'     => 'Social',
                        'fields'    => array(
                      
                        array(
                            'id'    => $prefix.'_social_icon',
                            'type'  => 'text',
                            'title' => 'Icon Class Name',
                            'desc' => 'Add Font Awesome5 or Box Icon Class Name ',
                        ),
                      
                        array(
                            'id'    => $prefix.'_social_link',
                            'type'  => 'link',
                            'title' => 'Link',
                            'default' => '#'
                          ),
                        ),

                        'default'   => array(
                          array(
                            'egens_chef_social_icon' => 'Icon',
                            'egens_chef_social_link' => 'Link',
                          ),
                        )
                    ),
                ),
            ),
		)
	));

   

}//endif