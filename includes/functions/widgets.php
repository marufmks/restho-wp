<?php

function egns_widgets_init() {

	register_sidebar( array(
		'name'          => esc_html__( 'Blog Sidebar', 'restho' ),
		'id'            => 'blog_sidebar',
		'description'   => esc_html__( 'Blog archive and blog details page', 'restho' ),
		'before_widget' => '<div id="%1$s" class="blog-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="blog-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Shop Sidebar', 'restho' ),
		'id'            => 'shop_sidebar',
		'description'   => esc_html__( 'Shop archive and Shop details page', 'restho' ),
		'before_widget' => '<div id="%1$s" class="shop-widget-item %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<div class="shop-widget-title"><h3>',
		'after_title'   => '</h3></div>',
	) );

}

add_action( 'widgets_init', 'egns_widgets_init' );