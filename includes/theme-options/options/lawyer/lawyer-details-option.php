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

	$prefix = 'egens_attorneys';

    /*-------------------------------------
		Progress State Information Option
	-------------------------------------*/
    CSF::createMetabox($prefix.'_designation',array(
        'title' => esc_html__('Designation','corelaw'),
        'post_type' => array('egens-attorneys'),
	));
	CSF::createSection($prefix.'_designation',array(
		'fields' => array(

			array(
				'id' => 'project_d',
				'type' => 'text',
				'title' => esc_html__('Designation','corelaw'),
            ),

			
			
		)
	));



	CSF::createMetabox($prefix.'_progress_state',array(
		'title' => esc_html__('Progress State','corelaw'),
		'post_type' => array('egens-attorneys'),
        'context'   => 'side',
	));
	CSF::createSection($prefix.'_progress_state',array(
		'fields' => array(
            array(
                'id'     => $prefix.'_progress_state_1',
                'type'   => 'fieldset',
                'title'  => 'Progress State 01',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_progress_state_title_1',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_progress_state_number_1',
                        'type'  => 'text',
                        'title' => 'Count Number',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_progress_state_2',
                'type'   => 'fieldset',
                'title'  => 'Progress State 02',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_progress_state_title_2',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_progress_state_number_2',
                        'type'  => 'text',
                        'title' => 'Count Number',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_progress_state_3',
                'type'   => 'fieldset',
                'title'  => 'Progress State 03',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_progress_state_title_3',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_progress_state_number_3',
                        'type'  => 'text',
                        'title' => 'Count Number',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_progress_state_4',
                'type'   => 'fieldset',
                'title'  => 'Progress State 04',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_progress_state_title_4',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_progress_state_number_4',
                        'type'  => 'text',
                        'title' => 'Count Number',
                    ),
                ),
            ),
        
		)
	));


	/*-------------------------------------
		Attorneys Short Information Option
	-------------------------------------*/
	CSF::createMetabox($prefix.'_short_information',array(
		'title' => esc_html__('Short Information','corelaw'),
		'post_type' => array('egens-attorneys'),
	));
	CSF::createSection($prefix.'_short_information',array(
		'fields' => array(
            array(
                'id'     => $prefix.'_opt_fieldset_1',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_1',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_1',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_2',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_2',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_2',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_3',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_3',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_3',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_4',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_4',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_4',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_5',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_5',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_5',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_6',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_6',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_6',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_7',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_7',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
                    array(
                        'id'    => $prefix.'_short_content_7',
                        'type'  => 'text',
                        'title' => 'Content',
                    ),
                ),
            ),
            array(
                'id'     => $prefix.'_opt_fieldset_8',
                'type'   => 'fieldset',
                'title'  => 'Fieldset',
                'fields' => array(
                    array(
                        'id'    => $prefix.'_short_title_8',
                        'type'  => 'text',
                        'title' => 'Title',
                    ),
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
                            'type'  => 'text',
                            'title' => 'Link',
                            'default' => '#'
                          ),
                        ),

                        'default'   => array(
                          array(
                            'egens_attorneys_social_icon' => 'Icon',
                            'egens_attorneys_social_link' => 'Link',
                          ),
                        )
                    ),
                ),
            ),
		)
	));

    /*-------------------------------------
		Attorneys Additional Tab Information Option
	-------------------------------------*/
	CSF::createMetabox($prefix.'_additional_tab_information',array(
		'title' => esc_html__('Additional Tab Information','corelaw'),
		'post_type' => array('egens-attorneys'),
	));
	CSF::createSection($prefix.'_additional_tab_information',array(
		'fields' => array(
           
            array(
                'id'        => $prefix.'_short_content_8',
                'type'      => 'repeater',
                'title'     => 'Tab Content',
                'fields'    => array(
                    array(
                        'id'    => $prefix.'_tab_title',
                        'type'  => 'text',
                        'title' => 'Tab Title',
                    ),
                    array(
                        'id'    => $prefix.'_additional_content_title',
                        'type'  => 'text',
                        'title' => 'Content Title',
                    ),
                    array(
                        'id'    => $prefix.'_additional_content_description',
                        'type'          => 'wp_editor',
                        'title'         => 'Content',
                        'tinymce'       => true,
                        'quicktags'     => true,
                        'media_buttons' => true,
                        'height'        => '100px',
                    ),
                ),

                'default'   => array(
                    array(
                        'egns_attorneys_tab_title' => 'Title',
                    ),
                )
            ),
        )
	));

}//endif