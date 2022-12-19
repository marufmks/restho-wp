<?php 

	/*-------------------------------------------------------
		   ** Color  Options
	--------------------------------------------------------*/
	CSF::createSection( $prefix . '_theme_options', array(
		'id'     => 'color_options',
		'title'  => esc_html__( 'Color Options', 'restho' ),
		'icon'   => 'fa fa-tint',
		'fields' => array(
			array(
				'type'    => 'subheading',
				'content' => '<h3>' . esc_html__( 'Color Options', 'restho' ) . '</h3>',
			),
			
			array(
				'id'      => 'primary_color',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),

			array(
				'id'      => 'primary_color_two',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color Two', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),

			array(
				'id'      => 'primary_color_three',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Color Three', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),

			array(
				'id'      => 'primary_dark_color_one',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color One', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),

			array(
				'id'      => 'primary_dark_color_two',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color Two', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),

			array(
				'id'      => 'primary_dark_color_three',
				'type'    => 'color',
				'title'   => esc_html__( 'Primary Dark Color Three', 'restho' ),
				'desc' => esc_html__('some color may will not change so, you need to chanage manually','restho')
			),
		)
	) );
 ?>