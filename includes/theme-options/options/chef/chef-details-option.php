<?php
/*
 * Theme Metabox Options
 * @package Egens
 * @since 1.0.0
 * */

if (!defined('ABSPATH')) {
  exit(); // exit if access directly
}

if (class_exists('CSF')) {

  $prefix = 'egens_chef';

  /*-------------------------------------
		Progress State Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_designation', array(
    'title' => esc_html__('Designation', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_designation', array(
    'fields' => array(

      array(
        'id' => 'project_d',
        'type' => 'text',
        'title' => esc_html__('Designation', 'restho'),
      ),



    )
  ));

  /*-------------------------------------
		Chef About Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_about', array(
    'title' => esc_html__('About', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_about', array(
    'fields' => array(

      array(
        'id'     => $prefix . '_opt_fieldset_1',
        'type'   => 'fieldset',
        'title'  => 'Fieldset',
        'fields' => array(
          array(
            'id'      => $prefix . '_heading_title',
            'type'    => 'text',
            'title'   => 'Heading Title Text',
            'default' => esc_html__('Hello, I’m', 'restho'),
          ),
          array(
            'id'     => $prefix . '_about_repeater',
            'type'   => 'repeater',
            'title'  => 'Repeater',
            'fields' => array(

              array(
                'id'    => $prefix . '_about_text',
                'type'  => 'text',
                'title' => 'About Text'
              ),

            ),
          ),
        ),
      )

    )
  ));

  /*-------------------------------------
		Chef skill Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_skill', array(
    'title' => esc_html__('Skill', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_skill', array(
    'fields' => array(

      array(
        'id'     => $prefix . '_opt_fieldset_3',
        'type'   => 'fieldset',
        'title'  => 'Skill Contents',
        'fields' => array(
          array(
            'id'      => $prefix . '_skill_heading_title',
            'type'    => 'text',
            'title'   => 'Skill Heading Title',
            'default' => esc_html__('My Skills:', 'restho'),
          ),

          array(
            'id'      => $prefix . '_skill_description',
            'type'    => 'textarea',
            'title'   => 'Heading Description',
            'default' => esc_html__('Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
            sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est.', 'restho'),
          ),

          array(
            'id'     => $prefix . '_skill_repeater',
            'type'   => 'repeater',
            'title'  => 'Skills',
            'fields' => array(

              array(
                'id'    => $prefix . '_skill_text',
                'type'  => 'text',
                'title' => 'skill Text',
                'default' => esc_html__('Sea Food', 'restho'),
              ),

              array(
                'id'    => $prefix . '_skill_percentage',
                'type'  => 'number',
                'title' => 'skill Percentage',
                'default' => esc_html('90'),
              ),

            ),
          ),
        ),
      )

    )
  ));




  /*-------------------------------------
		chef Short Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_short_information', array(
    'title' => esc_html__('Short Information', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_short_information', array(
    'fields' => array(

      array(
        'id'     => $prefix . '_opt_fieldset_8',
        'type'   => 'fieldset',
        'title'  => 'Fieldset',
        'fields' => array(

          array(
            'id'    => $prefix . '_social_heading',
            'type'  => 'text',
            'title' => 'Social Heading Text',
            'default' => esc_html__('Follow Me:', 'restho'),
          ),

          array(
            'id'        => $prefix . '_short_content_8',
            'type'      => 'repeater',
            'title'     => 'Social',
            'fields'    => array(

              array(
                'id'    => $prefix . '_social_icon',
                'type'  => 'text',
                'title' => 'Icon Class Name',
                'desc' => 'Add Font Awesome5 or Box Icon Class Name ',
              ),

              array(
                'id'    => $prefix . '_social_link',
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

  /*-------------------------------------
		Chef counter Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_counter', array(
    'title' => esc_html__('counter', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_counter', array(
    'fields' => array(

      array(
        'id'     => $prefix . '_opt_fieldset_4',
        'type'   => 'fieldset',
        'title'  => 'Counter Info',
        'fields' => array(

          array(
            'id'     => $prefix . '_counter_repeater',
            'type'   => 'repeater',
            'title'  => 'Counter List ',
            'fields' => array(

              array(
                'id'    => $prefix . '_counter_text',
                'type'  => 'text',
                'title' => 'counter Title',
                'default' => esc_html__('Award Wining', 'restho'),
              ),
              array(
                'id'    => $prefix . '_counter_number',
                'type'  => 'number',
                'title' => 'counter Number',
                'default' => esc_html('70'),
              ),
              array(
                'id'    => $prefix . '_counter_icon',
                'type'  => 'media',
                'title' => 'counter ICon'
              ),

            ),
          ),
        ),
      )

    )
  ));
  /*-------------------------------------
		Chef video Information Option
	-------------------------------------*/
  CSF::createMetabox($prefix . '_video', array(
    'title' => esc_html__('video', 'restho'),
    'post_type' => array('egens-chef'),
  ));
  CSF::createSection($prefix . '_video', array(
    'fields' => array(

      array(
        'id'     => $prefix . '_opt_fieldset_5',
        'type'   => 'fieldset',
        'title'  => 'video Info',
        'fields' => array(

          array(
            'id'    => $prefix . '_video_text',
            'type'  => 'text',
            'title' => 'video Title',
            'default' => esc_html__('Watch My Cooking Video', 'restho'),
          ),
          array(
            'id'    => $prefix . '_video_image',
            'type'  => 'media',
            'title' => 'video Image',
            'library'=>'image',
          ),
          array(
            'id'    => $prefix . '_video_source',
            'type'  => 'media',
            'title' => 'video',
            'library'=>'video',
          ),


        ),
      )

    )
  ));
}//endif