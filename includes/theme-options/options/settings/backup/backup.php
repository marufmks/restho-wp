<?php 


	/*-------------------------------------------------------
		   ** Backup  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'     => 'backup',
		'title'  => esc_html__( 'Import / Export', 'restho' ),
		'icon'   => 'fa fa-upload',
		'fields' => array(
			array(
				'type'    => 'notice',
				'style'   => 'warning',
				'content' => esc_html__( 'You can save your current options. Download a Backup and Import.', 'restho' ),
			),
			array(
				'type'  => 'backup',
				'title' => esc_html__( 'Backup & Import', 'restho' )
			)
		)
	) );
 ?>