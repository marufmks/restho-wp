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
				'id'    	=> 'header_topbar_availability_text',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Availability Time','restho'),
				'default' 	=> wp_kses('<span>Opening Hour:</span> 9.00 am to 10.00 pm',wp_kses_allowed_html('post')),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
			

			array(
				'id'    	=> 'header_topbar_location_icon',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Location Icon Class','restho'),
				'default' 	=> esc_html__('bi bi-geo-alt','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),

			array(
				'id'    	=> 'header_topbar_location_text',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Location Text','restho'),
				'default' 	=> esc_html__('Road-01, Block-B, West London City','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
			array(
				'id'    	=> 'header_topbar_mail_icon',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Mail Icon Class','restho'),
				'default' 	=> esc_html__('bi bi-envelope','restho'),
				'dependency'=> array( 'header_topbar_enable', '==', 'true' ),
			),
           
            array(
				'id'    	=> 'header_topbar_mail_text',
				'type'  	=> 'text',
				'title' 	=> esc_html__('Mail Address','restho'),
				'default' 	=> esc_html('info@example.com','restho'),
				'dependency' => array( 'header_topbar_enable', '==', 'true' ),
			),


		),

	) );

 ?>