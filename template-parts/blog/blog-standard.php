
<div class="blog-standard-pages pt-120 mb-120">
    <div class="container">
        <div class="row g-lg-5 gy-5">
            <div class="col-lg-8">
                <?php
                    if ( have_posts() ) :

                        /* Start the Loop */
                        while ( have_posts() ) :
                            the_post();
                            $format = get_post_format() ? : 'default';
                            /*
                            * Include the Post-Type-specific template for the content.
                            * If you want to override this in a child theme, then include a file
                            * called content-___.php (where ___ is the Post Type name) and that will be used instead.
                            */
                            echo '<div class="news-wrap2">';
                            echo get_post_format();
                                get_template_part( 'loop-templates/content', $format );
                            echo '</div>';

                        endwhile; 
                    else :
                        get_template_part( 'loop-templates/content', 'none' );
                    endif;
                ?>
                <div class="paginations-area pt-60">
                    <?php get_template_part( 'template-parts/blog/pagination' ); ?>
                </div>
            </div>
            <?php 
            if (is_active_sidebar('blog_sidebar')) { ?>
                <div class="col-lg-4">
                    <div class="widget-area">
                        <?php 
                            dynamic_sidebar( 'blog_sidebar' );
                        ?> 
                    </div>
                </div>
                <?php
                }           
            ?>
        </div>
    </div>
</div>