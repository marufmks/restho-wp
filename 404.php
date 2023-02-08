<?php

/**
 * The template for displaying 404 page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restho
 */

get_header();
if (!is_front_page()) :
    get_template_part('template-parts/breadcrumbs/breadcrumb-page');
endif;

?>


<div class="error-pages" style="background-image: url(<?php echo !empty(Egns_Helpers::egns_get_theme_option('404_image_bg')['url']) ? Egns_Helpers::egns_get_theme_option('404_image_bg')['url'] : '' ?>)">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="error-content text-center">
                    <h2><?php echo !empty(Egns_Helpers::egns_get_theme_option('404_title')) ? esc_html(Egns_Helpers::egns_get_theme_option('404_title')) : esc_html__("Ooops!", 'restho') ?></h2>
                    <?php if (!empty(Egns_Helpers::egns_get_theme_option('404_image')['url'])) :  ?>
                        <img src="<?php echo esc_url(Egns_Helpers::egns_get_theme_option('404_image')['url'])  ?>" alt="<?php echo esc_attr('error-image') ?>">
                    <?php endif; ?>
                    <P><?php echo !empty(Egns_Helpers::egns_get_theme_option('404_description')) ? esc_html(Egns_Helpers::egns_get_theme_option('404_description')) : esc_html__("The page does not found , something went wrong. Go to Homepage", 'restho') ?></P>
                    <a class="primary-btn7 btn-md2" href="<?php echo esc_url(home_url('/')); ?>"><i class="bi bi-arrow-up-right-circle"></i><?php echo !empty(Egns_Helpers::egns_get_theme_option('404_button_text')) ? esc_html(Egns_Helpers::egns_get_theme_option('404_button_text')) : esc_html__('Home Page', 'restho') ?></a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
