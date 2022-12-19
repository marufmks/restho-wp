<?php
/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corelaw
 */

get_header(); 
if( ! is_front_page() ) :
	get_template_part( 'template-parts/breadcrumbs/breadcrumb-page' );
endif;

?>
<div class="error-section pt-120 pb-120 overflow-hidden">
    <img src="<?php echo esc_url( get_template_directory_uri().'/assets/images/bg/section-bg-left.png' ); ?>" class="section-bg-left" alt="<?php echo esc_attr('image') ?>">
    <img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/bg/section-bg-right.png' ) ; ?>" class="section-bg-right" alt="<?php echo esc_attr('image') ?>">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-10 col-sm-10">
                <div class="error-wrap">
                    <?php if( !empty( Egns_Helpers::egns_get_theme_option('404_image')['url'] ) ) :  ?>
                        <img src="<?php echo esc_url( Egns_Helpers::egns_get_theme_option('404_image')['url'] )  ?>" alt="<?php echo esc_attr('error-image') ?>">
                    <?php endif; ?>
                    <div class="content">
                        <h2>
                            <?php echo Egns_Helpers::egns_get_theme_option('404_title') ? esc_html( Egns_Helpers::egns_get_theme_option('404_title') ) : esc_html__('Page Not Found!','corelaw') ?>
                        </h2>
                        <p class="para">
                            <?php echo Egns_Helpers::egns_get_theme_option('404_description') ? esc_html( Egns_Helpers::egns_get_theme_option('404_description') ) : esc_html__("It looks like you've reached a URL that doesn’t exist. Please use the navigation above or search below to find your way back to our amazing website.",'corelaw') ?>
                        </p>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="eg-btn btn--outline sibling3 btn--lg capsule btn--primary">
                            <i class="bi bi-house-door"></i> <?php echo Egns_Helpers::egns_get_theme_option('404_button_text') ? esc_html( Egns_Helpers::egns_get_theme_option('404_button_text') ) : esc_html__('Go To Home','corelaw') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();