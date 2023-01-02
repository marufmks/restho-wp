<?php
get_header();

get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>

<div class="blog-details-pages pt-120 mb-120">
        <div class="container">
            <div class="row g-lg-5 gy-5">
                <div class="col-lg-8">
                    <div class="news-wrap2">
                        <?php
                            while ( have_posts() ) :

                                the_post();
                                $format = get_post_format() ?: 'default';

                                get_template_part('loop-templates/content', $format);

                            endwhile; // End of the loop.
                        ?>
                    </div>
                    <div class="comments-area">
                        <?php
                            //If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) : ?>

                            <?php 
                                comments_template('/comments.php');
                            endif;
                        ?>
                    </div>
                   
                </div>
                <?php 
                if ( is_active_sidebar('blog_sidebar') ) { ?>
                    <div class="col-lg-4">
                        <?php 
                            dynamic_sidebar( 'blog_sidebar' );
                        ?> 
                    </div>
                <?php
                    }
                ?>
            </div>
        </div>
    </div>
<?php
get_footer();
