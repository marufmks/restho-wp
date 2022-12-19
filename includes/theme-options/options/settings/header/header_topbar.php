<?php 
	/*-----------------------------------
		Logo Options
	------------------------------------*/

	CSF::createSection( $prefix . '_theme_options', array(
		'parent' => 'header_options', 
		'title'  => esc_html__( 'Header Topbar', 'restho' ),
		'id'     => 'theme_header_topbar_options',
		'icon'   => 'fa fa-id-card-o',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Topbar', 'restho' ) . '</h3>'
			),

			array(
				'id'      => 'header_topbar_enable',
				'title'   => esc_html__( 'Enable Topbar', 'restho' ),
				'type'    => 'switcher',
				'desc'    => wp_kses( __( 'you can set <mark>Yes / No</mark> to enable/disable header topbar', 'restho' ), $allowed_html ),
				'default' => true,
			),
			array(
				'id' 	   	=> 'header_topbar_text_base_color',
				'type'		=> 'color',
				'title'		=> esc_html('Topbar Base Color','restho'),
                'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
			array(
				'id'    	=> 'header_topbar_contact_text',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Contact Text','restho'),
				'default' 	=> esc_html__('Call Us Now','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
            array(
				'id'    	=> 'header_topbar_contact_phone',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Contact Phone','restho'),
				'default' 	=> esc_html__('+880 170 1111 000','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
            array(
				'id'    	=> 'header_topbar_contact_icon',
				'type'  	=> 'media',
				'title' 	=> esc_html__('Contact Icon','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/topbar/cell-icon.svg' ),
					'id'          => 'contact_icon',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/topbar/cell-icon.svg' ),
					'alt'         => esc_attr('contact-icons'),
					'title'       => esc_html('Contact Title'),
				),
			),
            array(
				'id'    	=> 'header_topbar_appoinment_text',
				'type'  	=> 'textarea',
				'title' 	=> esc_html__('Appoinment Text','restho'),
				'default' 	=> esc_html__('We Are Work Hard Any Case Appoinment Now','restho'),
				'dependency' => array( 'header_topbar_enable', '==', 'true' ),
			),
            array(
				'id'    	=> 'header_topbar_mail_icon',
				'type'  	=> 'media',
				'title' 	=> esc_html__('Mail Icon','restho'),
				'dependency' => array( 'header_topbar_enable', '==', 'true' ),
				'default'	=> array(
					'url'         => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/topbar/mail.svg' ),
					'id'          => 'mail_icon',
					'thumbnail'   => esc_url( EGNS_THEME_SETTINGS_IMAGES . '/topbar/mail.svg' ),
					'alt'         => esc_attr('logo-icons'),
					'title'       => esc_html('logo Title'),
				),
			),
            array(
				'id'    	=> 'header_topbar_mail_text',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Email Text','restho'),
                'default' 	=> esc_html__('Email Now','restho'),
				'dependency' => array( 'header_topbar_enable', '==', 'true' ),
			),
            array(
				'id'    	=> 'header_topbar_mail_address',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Mail Address','restho'),
				'default' 	=> esc_html('info@example.com','restho'),
				'dependency' => array( 'header_topbar_enable', '==', 'true' ),
			),


		),

	) );

 ?>