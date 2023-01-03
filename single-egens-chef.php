<?php
    get_header();
?>
<?php
    get_template_part( 'template-parts/breadcrumbs/breadcrumb-single' );    
?>
<div class="chef-details-area">
    <div class="container">
        <?php
            while ( have_posts() ):
                the_post();
                get_template_part( 'loop-templates/content', 'single-chef' );
            endwhile;

            // End of the loop.
            // If comments are open or there is at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) {
                comments_template();
            }
        ?>
    </div>
</div>
<?php
get_footer();
?>