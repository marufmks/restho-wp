<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package corelaw
 */
get_header(); ?>
<?php
    get_template_part( 'template-parts/breadcrumbs/breadcrumb-case-study' );
?>
<!-- Start project-area -->
<section class="project-area">
    <div class="container">
        <div class="sec-mar">
            <div class="row">
                <div class="col-12">
                    <div class="project-tab">
                        <?php project_category_tab() ?>
                    </div>
                </div>
            </div>
            <div class="row g-4 project-items-wrapper">
                <?php
                    if ( have_posts() ) :
                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            /*
                            * Include the Post-Type-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                            */
                            get_template_part( 'loop-templates/content-archive', get_post_type() );

                        endwhile; 
                    else :
                        get_template_part( 'loop-templates/content', 'none' );
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();

