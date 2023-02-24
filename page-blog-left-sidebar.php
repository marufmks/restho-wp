<?php

/**
 * The main template file
 *
 * Template Name: Blog Left Sidebar
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restho
 * @since 1.0.0
 * 
 */
get_header();
if (!is_front_page()) :
    get_template_part('template-parts/breadcrumbs/breadcrumb-page');
endif;



$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
);
$wp_query = new WP_Query($args);

?>
<div class="recent-post-area pt-120 mb-120">
    <div class="container">
        <div class="blog-wrapper">
            <div class="row <?php echo !is_active_sidebar('blog_sidebar') ? 'justify-content-center' : '' ?>">
                <?php
                if (is_active_sidebar('blog_sidebar')) { ?>
                    <div class="col-md-12 col-lg-5 col-xl-4 or2">
                        <div class="widget-area">
                            <?php
                            dynamic_sidebar('blog_sidebar');
                            ?>
                        </div>
                    </div>
                <?php
                }
                ?>
                <div class="col-md-12 col-lg-7 col-xl-8 or1">
                    <div class="row gy-5 justify-content-center">
                        <?php
                        $num = 0;
                        if ($wp_query->have_posts()) :
                            /* Start the Loop */
                            while ($wp_query->have_posts()) :
                                $num++;
                                echo '<div class="col-md-6 col-sm-10">';
                                $wp_query->the_post();
                                $format = get_post_format() ?: 'grid';
                                /*
                        * Include the Post-Type-specific template for the content.
                        * If you want to override this in a child theme, then include a file
                        * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                        */
                                get_template_part('loop-templates/content', $format);
                                echo '</div>';

                            endwhile;
                        else :
                            get_template_part('loop-templates/content', 'none');
                        endif;
                        ?>
                    </div>
                    <div class="row pt-60">
                        <div class="col-lg-12 d-flex justify-content-center">
                            <div class="paginations-area">
                                <?php get_template_part('template-parts/blog/pagination'); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
