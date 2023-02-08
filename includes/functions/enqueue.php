<?php
/**
 * egns enqueue scripts
 *
 * @package egns
 */

if ( ! function_exists( 'egns_scripts' ) ) {

	function egns_enqueue_scripts() {
		// Get the theme data.
		$the_theme = wp_get_theme();

		//Fonts
		wp_enqueue_style( 'google-font-restho-wc', 'https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300;400;500;600;700&family=Jost:wght@300;400;500;600;700;800;900&display=swap', [], null );
		
		//style

		wp_enqueue_style( 'animate-css', get_template_directory_uri() . '/assets/css/animate.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'fontawesome-all-css', get_template_directory_uri() . '/assets/css/all.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'boxicons-css', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'bootstrap-icons-css', get_template_directory_uri() . '/assets/css/bootstrap-icons.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'jquery-ui-css', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'swiper-bundle-css', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'slick-css', get_template_directory_uri() . '/assets/css/slick.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'nice-select-css', get_template_directory_uri() . '/assets/css/nice-select.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'magnific-popup-css', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), $the_theme->get( 'Version' ), 'all' );
		
		wp_enqueue_style( 'jquery-fancybox-css', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'odometer-css', get_template_directory_uri() . '/assets/css/odometer.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'egns-blog-page-css', get_template_directory_uri() . '/assets/css/blog-and-page.css', array(), $the_theme->get( 'Version' ), 'all' );
		
		wp_enqueue_style('egns-woocommerce-css', get_template_directory_uri() . '/assets/css/woocommerce-custom.css', array(), $the_theme->get('Version'), 'all');

		wp_enqueue_style( 'egns-typography-css', get_template_directory_uri() . '/assets/css/typography.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'egns-default-css', get_template_directory_uri() . '/assets/css/default.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'egns-style-css', get_template_directory_uri() . '/assets/css/style.css', array(), $the_theme->get( 'Version' ), 'all' );

        wp_enqueue_style( 'egns-theme-css', get_stylesheet_uri());
		
		// Scripts

		wp_enqueue_script( 'jquery-ui-js', get_template_directory_uri() . '/assets/js/jquery-ui.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
				
		wp_enqueue_script( 'swiper-js', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'slick-js', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'nice-select-js', get_template_directory_uri() . '/assets/js/jquery.nice-select.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'jquery-fancybox-js', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'odometer-js', get_template_directory_uri() . '/assets/js/odometer.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'viewport-js', get_template_directory_uri() . '/assets/js/viewport.jquery.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'isotope-js', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'smooth-scroll-js', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'magnific-popup-js', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'imagesloaded-js', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'masonry-js', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'egns-main-js', get_template_directory_uri() . '/assets/js/main.js', array(), $the_theme->get( 'Version' ), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'egns_enqueue_scripts' );


