<?php 
	/*-----------------------------------
		H Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'custom_scripts', 
		'title'  => esc_html__( 'Custom CSS', 'restho' ),
		'id'     => 'custom_css',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(

            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( All Device )', 'restho' ),
            ),
            array(
                'id'       => 'custom_css',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post.', 'restho' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Ipad Pro )', 'restho' ),
            ),
            array(
                'id'       => 'custom_css_ipad',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 1024px maximum 1366px.', 'restho' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Medium Device or Tablet )', 'restho' ),
            ),
            array(
                'id'       => 'custom_css_tablet',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be  minimum 768px maximum 992px.', 'restho' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
            
            array(
              'type'    => 'subheading',
              'content' => esc_html__( 'Custom CSS  ( Mobile Device )', 'restho' ),
            ),
            array(
                'id'       => 'custom_css_mobile',
                'type'     => 'code_editor',
                'desc'     => esc_html__( 'Write custom css here with css selector. this css will be applied in all pages and post, when device width will be maximum 767px.', 'restho' ),
                'settings' => array(
                    'mode'        => 'css',
                    'theme'       => 'dracula',
                    'tabSize'     => 4,
                    'smartIndent' => true,
                    'autocorrect' => true,
                ),
            ),
        ),

	) );

 ?>