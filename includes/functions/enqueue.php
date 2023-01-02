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

		wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'fontawesome-all', get_template_directory_uri() . '/assets/css/all.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'boxicons', get_template_directory_uri() . '/assets/css/boxicons.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'bootstrap-icons', get_template_directory_uri() . '/assets/css/bootstrap-icons.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'jquery-ui', get_template_directory_uri() . '/assets/css/jquery-ui.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'nice-select', get_template_directory_uri() . '/assets/css/nice-select.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), $the_theme->get( 'Version' ), 'all' );
		
		wp_enqueue_style( 'jquery-fancybox', get_template_directory_uri() . '/assets/css/jquery.fancybox.min.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'odometer', get_template_directory_uri() . '/assets/css/odometer.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'egns-blog-page', get_template_directory_uri() . '/assets/css/blog-and-page.css', array(), $the_theme->get( 'Version' ), 'all' );

		// wp_enqueue_style( 'egns-typography', get_template_directory_uri() . '/assets/css/typography.css', array(), $the_theme->get( 'Version' ), 'all' );

		// wp_enqueue_style( 'egns-default', get_template_directory_uri() . '/assets/css/default.css', array(), $the_theme->get( 'Version' ), 'all' );

		wp_enqueue_style( 'egns-style', get_template_directory_uri() . '/assets/css/style.css', array(), $the_theme->get( 'Version' ), 'all' );

        wp_enqueue_style( 'egns-theme', get_stylesheet_uri());
		
		// Scripts

		wp_enqueue_script( 'jquery-ui', get_template_directory_uri() . '/assets/js/jquery-ui.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.bundle.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
				
		wp_enqueue_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper-bundle.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/jquery.nice-select.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'jquery-fancybox', get_template_directory_uri() . '/assets/js/jquery.fancybox.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'odometer', get_template_directory_uri() . '/assets/js/odometer.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );

		wp_enqueue_script( 'viewport', get_template_directory_uri() . '/assets/js/viewport.jquery.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'smooth-scroll', get_template_directory_uri() . '/assets/js/SmoothScroll.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'nice-number', get_template_directory_uri() . '/assets/js/jquery.nice-number.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/jquery.magnific-popup.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/assets/js/imagesloaded.pkgd.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'masonry', get_template_directory_uri() . '/assets/js/masonry.pkgd.min.js', array( 'jquery' ), $the_theme->get( 'Version' ), true );
		
		wp_enqueue_script( 'egns-main', get_template_directory_uri() . '/assets/js/main.js', array(), $the_theme->get( 'Version' ), true );

		if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
			wp_enqueue_script( 'comment-reply' );
		}
	}
}

add_action( 'wp_enqueue_scripts', 'egns_enqueue_scripts' );


