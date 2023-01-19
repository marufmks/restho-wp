<?php

/**
 * restho blog meta for blog listing.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_meta')) {

    function egns_blog_meta()
    {
?>
        <div class="blog-body-top">
            <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
            <a href="<?php echo esc_url($author_url) ?>" class="blog-writer"><i class="bi bi-person-circle"></i> <?php echo esc_html__('By', 'restho') . ' ' . esc_html(get_the_author()); ?> </a>
            <?php
            if ( Egns_Helpers::egns_post_layout() == 'default' ) {
            ?>
                <a href="<?php echo esc_url(get_day_link( get_post_time('Y'), get_post_time('m'), get_post_time('j') )); ?>" class="blog-comments"><i class="bi bi-calendar3"></i> <?php echo esc_html(get_the_date()); ?></a>
            <?php
            }
            ?>
            <a class="blog-comments" href="<?php echo esc_url(get_comments_link()); ?>">
                <i class="bi bi-chat-left-quote"></i><?php echo wp_kses_post('(' . esc_html(get_comments_number()) . ')' . ' ' . esc_html__('Comment', 'restho')); ?>
            </a>
        </div>

    <?php
    }
}
/**
 * Blog thumbnail for blog listing.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_thumbnail')) {
    function egns_blog_thumbnail()
    {
        if (has_post_thumbnail()) {
        ?>
            <div class="post-thum">
                <?php the_post_thumbnail() ?>
                <div class="batch">
                    <a href="<?php echo esc_url( home_url( get_the_date('Y/m/d') ) ) ?>"><?php echo get_the_date('F j, Y') ?></a>
                </div>
            </div>
        <?php
        }
    }
}


/**
 * Blog archive title.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_archive_meta')) {
    function egns_blog_archive_meta()
    {
        if ( !is_single() ) {


             $title = '<h3 class="blog-title"><a href="' . esc_url( get_permalink() ) . '">'.esc_html(get_the_title()).'</a></h3>';
             $content = '';
             $read_more = '';
            if( Egns_Helpers::egns_post_layout() == 'default' ){
                $content = '<p class="blog-short-description">'.wp_trim_words(  esc_html(get_the_excerpt()), 30).'</p>';
                $read_more = '<div class="read-more"><a href="' . esc_url( get_permalink()) . '">'.esc_html__('Read More','restho').'<i class="bx bx-right-arrow-alt"></i></a></div>';
            }
            echo  Egns_Helpers::egns_translate($title).Egns_Helpers::egns_translate($content).Egns_Helpers::egns_translate($read_more);
         }
        ?>


    <?php
    }
}

/**
 * Blog archive title.
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_post_header')) {
    function egns_blog_post_header()
    {
        
    ?>
        <div class="post-header">
            <h2 class="post-title">
                <?php the_title(); ?>
            </h2>
            <div class="post-meta">
                <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                <a class="blog-writer" href="<?php echo esc_url($author_url) ?>"><i class="bi bi-person-circle"></i><?php echo esc_html__('by', 'restho') . ' ' . esc_html(get_the_author()); ?></a>
                <a class="blog-time" href="<?php echo esc_url( get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j')) ); ?>"><i class="bi bi-calendar3"></i> <?php echo esc_html(get_the_date()); ?></a>
                <a class="blog-comments" href="<?php echo esc_url(get_comments_link()); ?>">
                    <i class="bi bi-chat-left-quote"></i><?php echo wp_kses_post('(' . get_comments_number() . ')' . ' ' . esc_html__('Comment', 'restho')); ?>
                </a>
            </div>
        </div>

    <?php
    }
}

/**
 * Blog post thumbnail
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_post_thumbnail')) {
    function egns_blog_post_thumbnail()
    {

    ?>
        <?php if (has_post_thumbnail()) { ?>
            <div class="post-thumb">
                <?php the_post_thumbnail('large', array('class' => 'img-fluid')); ?>
            </div>
        <?php } ?>

    <?php
    }
}

/**
 * Blog post footer
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_post_footer')) {
    function egns_blog_post_footer()
    {

    ?>
        <div class="post-footer flex-wrap flex-md-nowrap">
            <div class="next-prev-link"><?php previous_post_link('%link', '<i class="bi bi-chevron-left"></i> '.esc_html__('Previous','restho').'', TRUE); ?></div>
            <a href="<?php the_permalink(); ?>" class="next-post-link"><?php esc_html( the_title() ); ?></a>
            <div class="next-prev-link"><?php next_post_link('%link', ''.esc_html__('Next','restho').' <i class="bi bi-chevron-right"></i>', TRUE); ?></div>
        </div>

    <?php
    }
}

/**
 * restho Footer Widgets
 *
 * @since 1.0.0
 */
if (!function_exists('egns_footer_widgets')) {
    function egns_footer_widgets()
    {
    ?>  
        <div class="footer-top">
            <div class="container-xl container-lg-fluid container">
                <?php if( is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3') ) : ?>
                    <div class="row gy-5">
                        <div class="col-lg-3 col-md-6">
                            <div class="footer-item">
                                <?php 
                                    if (is_active_sidebar('footer_1')) {
                                        dynamic_sidebar('footer_1');
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 d-flex justify-content-lg-center">
                            <div class="footer-item">
                                <?php 
                                    if (is_active_sidebar('footer_2')) {
                                        dynamic_sidebar('footer_2');
                                    }
                                ?>
                            </div>
                        </div>
                        
                        <div class="col-lg-3 col-md-6 d-flex justify-content-lg-end">
                            <div class="footer-item">
                                <?php 
                                    if (is_active_sidebar('footer_3')) {
                                        dynamic_sidebar('footer_3');
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endif ?>
            </div>
        </div>
        
        <?php
    }
}

/**	
 * Copyright text for footer.
 *
 * @since   1.0.0
 */
if (!function_exists('egns_footer_copyright')) {
    function egns_footer_copyright()
    {

        $copyright_text = Egns_Helpers::egns_get_theme_option('copyright_text'); 
        $footer_menu_list = Egns_Helpers::egns_get_theme_option('footer_menu_list');
        $is_footer_menu_list = true;
        if( is_array( $footer_menu_list ) && class_exists('CSF') ){
            $is_footer_menu_list = true;
        }else{
            $is_footer_menu_list = false;
        }

        ?>
            <div class="container">
                <div class="footer-btm <?php echo (is_404() && !class_exists('CSF')) ? '' : 'mt-80' ?>">
                    <div class="row d-flex align-items-center g-3 <?php echo esc_html( $is_footer_menu_list ) == true ? 'justify-content-md-between' : 'justify-content-md-center' ?>">
                        <div class="copyright-area col-md-6 d-flex <?php echo esc_html( $is_footer_menu_list ) == true ? 'justify-content-lg-start' : 'justify-content-lg-center' ?> justify-content-center text-lg-start text-center">
                            <?php if( class_exists('CSF') && !empty( $copyright_text ) ) : ?>
                                <p><?php echo wp_kses( $copyright_text , wp_kses_allowed_html( 'post' ) ) ?></p>
                            <?php else : ?>
                                <p><?php echo _('Copyright ' . date('Y') . ' <a rel="nofollow" href="'.esc_url('https://www.restho-wp.egenslab.com/').'"><b class="egns-lab">'.esc_html('restho').'</b></a> | '.esc_html('Design By').' <a class="egns-lab" rel="nofollow" href="'.esc_url('https://www.egenslab.com/').'">'.esc_html('Egens Lab').'</a>'); ?></p>
                            <?php endif ?>
                        </div>
                        <?php if( class_exists('CSF') && !empty( $is_footer_menu_list ) ) : ?>
                        <div class="col-md-6 d-flex justify-content-lg-end justify-content-center align-items-center">
                            <ul class="privacy-policy f-bottom-list d-flex jusify-content-start align-items-center">
                                <p>
                                    <?php foreach( $footer_menu_list as $key=> $menu_list ) : ?>
                                        <?php if($key>0) { echo ' | '; }?>
                                        <a <?php if( $menu_list['footer_menu_link']['target'] ) { echo 'target='.'"'.esc_attr($menu_list['footer_menu_link']['target']).'"';} else { echo ''; } ?>  href="<?php echo esc_url($menu_list['footer_menu_link']['url']); ?>"><?php echo esc_html($menu_list['footer_menu_name']); ?></a>
                                    <?php endforeach ?>
                                </p>
                            </ul>
                        </div>
                        <?php endif ?>
                    </div>
                </div>
                

            </div>
            
        <?php
    }
}

/**	
 * Widget area background
 *
 * @since   1.0.0
 */
if (!function_exists('footer_widget_area_background')) {
    function footer_widget_area_background()
    {
        $img_url = Egns_Helpers::egns_get_theme_option('footer_widget_area_background');
        if (!empty($img_url['url'])) {
        ?>
            <div class="footer-vactor">
                <img src="<?php echo esc_url($img_url['url']); ?>" alt="<?php echo esc_attr('footer-background') ?>">
            </div>
<?php
        }
    }
}

/*********** Blog Template Tag Start */


/**	
 * Blog post meta
 *
 * @since   1.0.0
 */

 if (!function_exists('egns_blog_author_info')) {
    function egns_blog_author_info()
    {
        $author_url = get_author_posts_url(get_the_author_meta("ID"));

        ?>
            <div class="author-pic">
                <?php echo get_avatar( get_the_author_meta('ID'), 60); ?>
            </div>
            <div class="author-info">
                <h5><a href="<?php echo esc_url($author_url) ?>"><?php echo get_the_author_meta('display_name') ?></a></h5>
                <a href="<?php echo esc_url(home_url(get_the_date('Y/m/d'))) ?>">
                    <time datetime="<?php echo get_the_date('Y-m-d H:i:s'); ?>"><?php echo get_the_date(); ?></time>
                </a>
            </div>
        <?php
    }
}
if (!function_exists('egns_blog_post_meta')) {
    function egns_blog_post_meta()
    {
        ?>
            <div class="news-meta">
                <div class="publisher">
                    <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                    <a href="<?php echo esc_url($author_url) ?>">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0C5.88665 0.0269505 3.86744 0.878431 2.37295 2.37287C0.878459 3.86731 0.0269514 5.88646 0 7.99974C0.0098791 9.23083 0.303776 10.443 0.858809 11.542C1.41384 12.6409 2.21503 13.5969 3.2 14.3355V14.3995H3.28C4.63455 15.4375 6.29348 16 8 16C9.70652 16 11.3655 15.4375 12.72 14.3995H12.8V14.3355C13.785 13.5969 14.5862 12.6409 15.1412 11.542C15.6962 10.443 15.9901 9.23083 16 7.99974C15.973 5.88646 15.1215 3.86731 13.6271 2.37287C12.1326 0.878431 10.1134 0.0269505 8 0ZM4.856 13.5436C4.97279 13.0087 5.26892 12.5299 5.69527 12.1865C6.12161 11.8431 6.65255 11.6558 7.2 11.6556H8.8C9.34745 11.6558 9.87839 11.8431 10.3047 12.1865C10.7311 12.5299 11.0272 13.0087 11.144 13.5436C10.1911 14.1042 9.1056 14.3998 8 14.3998C6.8944 14.3998 5.80891 14.1042 4.856 13.5436ZM12.488 12.5116C12.1837 11.7844 11.6713 11.1633 11.0151 10.7263C10.359 10.2894 9.58834 10.0561 8.8 10.0557H7.2C6.41166 10.0561 5.64102 10.2894 4.98486 10.7263C4.32871 11.1633 3.8163 11.7844 3.512 12.5116C2.91253 11.922 2.43512 11.2201 2.10705 10.4459C1.77898 9.67174 1.60668 8.84052 1.6 7.99974C1.62075 6.30886 2.3017 4.69307 3.49746 3.49735C4.69322 2.30162 6.30906 1.6207 8 1.59995C9.69094 1.6207 11.3068 2.30162 12.5025 3.49735C13.6983 4.69307 14.3793 6.30886 14.4 7.99974C14.3933 8.84052 14.221 9.67174 13.8929 10.4459C13.5649 11.2201 13.0875 11.922 12.488 12.5116Z" fill="#BF9444"/>
                        <path d="M8.00016 3.20007C7.57724 3.19022 7.15671 3.26625 6.76402 3.42357C6.37132 3.58089 6.01462 3.81624 5.71549 4.11536C5.41635 4.41448 5.181 4.77117 5.02368 5.16386C4.86635 5.55654 4.79031 5.97705 4.80016 6.39996C4.79031 6.82287 4.86635 7.24339 5.02368 7.63607C5.181 8.02875 5.41635 8.38544 5.71549 8.68457C6.01462 8.98369 6.37132 9.21903 6.76402 9.37635C7.15671 9.53368 7.57724 9.60971 8.00016 9.59986C8.42309 9.60971 8.84362 9.53368 9.23631 9.37635C9.62901 9.21903 9.98571 8.98369 10.2848 8.68457C10.584 8.38544 10.8193 8.02875 10.9767 7.63607C11.134 7.24339 11.21 6.82287 11.2002 6.39996C11.21 5.97705 11.134 5.55654 10.9767 5.16386C10.8193 4.77117 10.584 4.41448 10.2848 4.11536C9.98571 3.81624 9.62901 3.58089 9.23631 3.42357C8.84362 3.26625 8.42309 3.19022 8.00016 3.20007ZM8.00016 7.99991C7.78732 8.0102 7.57469 7.97586 7.37591 7.8991C7.17713 7.82233 6.9966 7.70484 6.84592 7.55417C6.69525 7.4035 6.57775 7.22298 6.50098 7.0242C6.42422 6.82543 6.38988 6.6128 6.40016 6.39996C6.38988 6.18713 6.42422 5.9745 6.50098 5.77572C6.57775 5.57695 6.69525 5.39643 6.84592 5.24576C6.9966 5.09509 7.17713 4.9776 7.37591 4.90083C7.57469 4.82407 7.78732 4.78973 8.00016 4.80002C8.213 4.78973 8.42564 4.82407 8.62442 4.90083C8.8232 4.9776 9.00373 5.09509 9.15441 5.24576C9.30508 5.39643 9.42258 5.57695 9.49935 5.77572C9.57611 5.9745 9.61045 6.18713 9.60016 6.39996C9.61045 6.6128 9.57611 6.82543 9.49935 7.0242C9.42258 7.22298 9.30508 7.4035 9.15441 7.55417C9.00373 7.70484 8.8232 7.82233 8.62442 7.8991C8.42564 7.97586 8.213 8.0102 8.00016 7.99991Z" fill="#BF9444"/>
                        </svg>
                        <?php echo esc_html__('By', 'restho') . ' ' . esc_html(get_the_author()); ?>
                    </a>
                </div>
                <div class="comment">
                    <a href="<?php echo esc_url(get_comments_link()); ?>">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.9998 7.1998C6.66255 7.1998 7.1998 6.66255 7.1998 5.9998C7.1998 5.33706 6.66255 4.7998 5.9998 4.7998C5.33706 4.7998 4.7998 5.33706 4.7998 5.9998C4.7998 6.66255 5.33706 7.1998 5.9998 7.1998Z" fill="#BF9444"/>
                        <path d="M9.9998 7.1998C10.6625 7.1998 11.1998 6.66255 11.1998 5.9998C11.1998 5.33706 10.6625 4.7998 9.9998 4.7998C9.33706 4.7998 8.7998 5.33706 8.7998 5.9998C8.7998 6.66255 9.33706 7.1998 9.9998 7.1998Z" fill="#BF9444"/>
                        <path d="M8 0C3.5888 0 0 2.8712 0 6.4C0 8.7264 1.5176 10.812 4 11.9472V16L8.272 12.7968C12.5576 12.6816 16 9.856 16 6.4C16 2.8712 12.4112 0 8 0ZM8 11.2H7.7336L5.6 12.8V10.8664L5.0872 10.6688C2.9368 9.8408 1.6 8.2048 1.6 6.4C1.6 3.7528 4.4712 1.6 8 1.6C11.5288 1.6 14.4 3.7528 14.4 6.4C14.4 9.0472 11.5288 11.2 8 11.2Z" fill="#BF9444"/>
                        </svg>
                        <?php echo esc_html('Comments'). ' ' ?> <?php echo "(".get_comments_number().")" ?>
                    </a>
                </div>
            </div>
        <?php
    }
}


/**	
 * Comment for Blog Standard
 *
 * @since   1.0.0
 */
if (!function_exists('egns_comment_count')) {
    function egns_comment_count()
    {
        if (!post_password_required() && (comments_open() || get_comments_number() ) && get_comments_number() > 0) {
           ?>
                <div class="comments">
                    <span>
                        <i class="bi bi-chat-dots"></i> 
                        <?php Egns_Helpers::egns_translate_with_escape_('comments') ?> <?php echo "(".get_comments_number().")" ?> 
                    </span>
                </div>
           <?php
        }
    }
}

/**	
 * Blog Post Is Sticky
 *
 * @since   1.0.0
 */

 if (!function_exists('egns_blog_is_sticky')) {
     function egns_blog_is_sticky() {
    ?>
        <?php if( is_sticky(get_the_ID()) ) { ?>
            <div class="sticky-post-icon">
                <i class="bi bi-pin-angle"></i>
            </div>
        <?php } ?>
    <?php 
     }
 }

/**	
 * Blog Post News Content
 *
 * @since   1.0.0
 */

 if (!function_exists('egns_blog_news_content')) {
     function egns_blog_news_content() {
        ?>
        <div class="news-content">
            <div class="news-meta">
                <div class="publisher">
                    <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                    <a href="<?php echo esc_url($author_url) ?>">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 0C5.88665 0.0269505 3.86744 0.878431 2.37295 2.37287C0.878459 3.86731 0.0269514 5.88646 0 7.99974C0.0098791 9.23083 0.303776 10.443 0.858809 11.542C1.41384 12.6409 2.21503 13.5969 3.2 14.3355V14.3995H3.28C4.63455 15.4375 6.29348 16 8 16C9.70652 16 11.3655 15.4375 12.72 14.3995H12.8V14.3355C13.785 13.5969 14.5862 12.6409 15.1412 11.542C15.6962 10.443 15.9901 9.23083 16 7.99974C15.973 5.88646 15.1215 3.86731 13.6271 2.37287C12.1326 0.878431 10.1134 0.0269505 8 0ZM4.856 13.5436C4.97279 13.0087 5.26892 12.5299 5.69527 12.1865C6.12161 11.8431 6.65255 11.6558 7.2 11.6556H8.8C9.34745 11.6558 9.87839 11.8431 10.3047 12.1865C10.7311 12.5299 11.0272 13.0087 11.144 13.5436C10.1911 14.1042 9.1056 14.3998 8 14.3998C6.8944 14.3998 5.80891 14.1042 4.856 13.5436ZM12.488 12.5116C12.1837 11.7844 11.6713 11.1633 11.0151 10.7263C10.359 10.2894 9.58834 10.0561 8.8 10.0557H7.2C6.41166 10.0561 5.64102 10.2894 4.98486 10.7263C4.32871 11.1633 3.8163 11.7844 3.512 12.5116C2.91253 11.922 2.43512 11.2201 2.10705 10.4459C1.77898 9.67174 1.60668 8.84052 1.6 7.99974C1.62075 6.30886 2.3017 4.69307 3.49746 3.49735C4.69322 2.30162 6.30906 1.6207 8 1.59995C9.69094 1.6207 11.3068 2.30162 12.5025 3.49735C13.6983 4.69307 14.3793 6.30886 14.4 7.99974C14.3933 8.84052 14.221 9.67174 13.8929 10.4459C13.5649 11.2201 13.0875 11.922 12.488 12.5116Z" fill="#BF9444"/>
                        <path d="M8.00016 3.20007C7.57724 3.19022 7.15671 3.26625 6.76402 3.42357C6.37132 3.58089 6.01462 3.81624 5.71549 4.11536C5.41635 4.41448 5.181 4.77117 5.02368 5.16386C4.86635 5.55654 4.79031 5.97705 4.80016 6.39996C4.79031 6.82287 4.86635 7.24339 5.02368 7.63607C5.181 8.02875 5.41635 8.38544 5.71549 8.68457C6.01462 8.98369 6.37132 9.21903 6.76402 9.37635C7.15671 9.53368 7.57724 9.60971 8.00016 9.59986C8.42309 9.60971 8.84362 9.53368 9.23631 9.37635C9.62901 9.21903 9.98571 8.98369 10.2848 8.68457C10.584 8.38544 10.8193 8.02875 10.9767 7.63607C11.134 7.24339 11.21 6.82287 11.2002 6.39996C11.21 5.97705 11.134 5.55654 10.9767 5.16386C10.8193 4.77117 10.584 4.41448 10.2848 4.11536C9.98571 3.81624 9.62901 3.58089 9.23631 3.42357C8.84362 3.26625 8.42309 3.19022 8.00016 3.20007ZM8.00016 7.99991C7.78732 8.0102 7.57469 7.97586 7.37591 7.8991C7.17713 7.82233 6.9966 7.70484 6.84592 7.55417C6.69525 7.4035 6.57775 7.22298 6.50098 7.0242C6.42422 6.82543 6.38988 6.6128 6.40016 6.39996C6.38988 6.18713 6.42422 5.9745 6.50098 5.77572C6.57775 5.57695 6.69525 5.39643 6.84592 5.24576C6.9966 5.09509 7.17713 4.9776 7.37591 4.90083C7.57469 4.82407 7.78732 4.78973 8.00016 4.80002C8.213 4.78973 8.42564 4.82407 8.62442 4.90083C8.8232 4.9776 9.00373 5.09509 9.15441 5.24576C9.30508 5.39643 9.42258 5.57695 9.49935 5.77572C9.57611 5.9745 9.61045 6.18713 9.60016 6.39996C9.61045 6.6128 9.57611 6.82543 9.49935 7.0242C9.42258 7.22298 9.30508 7.4035 9.15441 7.55417C9.00373 7.70484 8.8232 7.82233 8.62442 7.8991C8.42564 7.97586 8.213 8.0102 8.00016 7.99991Z" fill="#BF9444"/>
                        </svg>
                        <?php echo esc_html__('By', 'restho') . ' ' . esc_html(get_the_author()); ?>
                    </a>
                </div>
                <div class="comment">
                    <a href="<?php echo esc_url(get_comments_link()); ?>">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M5.9998 7.1998C6.66255 7.1998 7.1998 6.66255 7.1998 5.9998C7.1998 5.33706 6.66255 4.7998 5.9998 4.7998C5.33706 4.7998 4.7998 5.33706 4.7998 5.9998C4.7998 6.66255 5.33706 7.1998 5.9998 7.1998Z" fill="#BF9444"/>
                        <path d="M9.9998 7.1998C10.6625 7.1998 11.1998 6.66255 11.1998 5.9998C11.1998 5.33706 10.6625 4.7998 9.9998 4.7998C9.33706 4.7998 8.7998 5.33706 8.7998 5.9998C8.7998 6.66255 9.33706 7.1998 9.9998 7.1998Z" fill="#BF9444"/>
                        <path d="M8 0C3.5888 0 0 2.8712 0 6.4C0 8.7264 1.5176 10.812 4 11.9472V16L8.272 12.7968C12.5576 12.6816 16 9.856 16 6.4C16 2.8712 12.4112 0 8 0ZM8 11.2H7.7336L5.6 12.8V10.8664L5.0872 10.6688C2.9368 9.8408 1.6 8.2048 1.6 6.4C1.6 3.7528 4.4712 1.6 8 1.6C11.5288 1.6 14.4 3.7528 14.4 6.4C14.4 9.0472 11.5288 11.2 8 11.2Z" fill="#BF9444"/>
                        </svg>
                    <?php echo esc_html('Comments'). ' ' ?> <?php echo "(".get_comments_number().")" ?></a>
                </a>
                </div>
            </div>
            <h3><a href="<?php esc_url( the_permalink() ) ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
            <p>
                <?php 
                    Egns_Helpers::egns_translate_with_escape_( substr( get_the_excerpt(), '0', '190')  ); 
                    if( strlen(get_the_excerpt()) > 190 ){
                        echo ' [...]';
                    }
                ?>
            </p>
            <a href="<?php esc_url( the_permalink() ) ?>" class="read-more-btn"><?php Egns_Helpers::egns_translate_with_escape_('Continue Reading')  ?><i class="bi bi-arrow-right"></i></a>
        </div>
        
        <?php
     }
 }

/**
 * Blog list view
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_list_view')) {
    function egns_blog_list_view()
    {
    ?>
        <?php egns_blog_is_sticky() ?>
        <?php egns_blog_thumbnail() ?>
        <?php egns_blog_news_content() ?>
    <?php
    }
}

/**
 * Blog list audio view
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_list_audio_view')) {
    function egns_blog_list_audio_view()
    {
    ?>
        <div class="col-12">
            <div class="signle-news-list post-audio">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_audio() ?>
                <?php egns_blog_news_content() ?>
            </div>
        </div>
    <?php
    }
}

/**
 * Blog list video view
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_list_video_view')) {
    function egns_blog_list_video_view()
    {
    ?>
        <div class="col-12">
            <div class="signle-news-list post-video">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_video() ?>
                <?php egns_blog_news_content() ?>
            </div>
        </div>
    <?php
    }
}

/**
 * Blog list gallery view
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_list_gallery_view')) {
    function egns_blog_list_gallery_view()
    {
    ?>
        <div class="col-12">
            <div class="signle-news-list post-gallery">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_gallery() ?>
                <?php egns_blog_news_content() ?>
            </div>
        </div>
    <?php
    }
}

/**
 * Blog list quote view
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_list_quote_view')) {
    function egns_blog_list_quote_view()
    {
    ?>
        <div class="col-12">
            <div class="signle-news-list blog-post-quote">
                <?php egns_blog_is_sticky() ?>
                <?php post_formate_quote() ?>
                <?php egns_blog_news_content() ?>
            </div>
        </div>
    <?php
    }
}



/**
 * Blog list Grid Sidebar View
 *
 * @since 1.0.0
 */

if (!function_exists('egns_blog_grid_sidebar_view')) {
    function egns_blog_grid_sidebar_view()
    {
        ?>
            <div class="news-wrap">
                <?php if(has_post_thumbnail()): ?>
                    <div class="post-thum">
                        <?php the_post_thumbnail('',['class' => 'img-fluid']); ?>
                        <div class="batch">
                            <a href="<?php echo esc_url( home_url( get_the_date('Y/m/d') ) ) ?>"><?php echo get_the_date('F j, Y') ?></a>
                        </div>
                    </div>
                <?php endif ?>
                <div class="news-content">
                    <div class="news-meta">
                        <div class="publisher">
                            <?php $author_url = get_author_posts_url(get_the_author_meta("ID")); ?>
                            <a href="<?php echo esc_url($author_url) ?>">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C5.88665 0.0269505 3.86744 0.878431 2.37295 2.37287C0.878459 3.86731 0.0269514 5.88646 0 7.99974C0.0098791 9.23083 0.303776 10.443 0.858809 11.542C1.41384 12.6409 2.21503 13.5969 3.2 14.3355V14.3995H3.28C4.63455 15.4375 6.29348 16 8 16C9.70652 16 11.3655 15.4375 12.72 14.3995H12.8V14.3355C13.785 13.5969 14.5862 12.6409 15.1412 11.542C15.6962 10.443 15.9901 9.23083 16 7.99974C15.973 5.88646 15.1215 3.86731 13.6271 2.37287C12.1326 0.878431 10.1134 0.0269505 8 0ZM4.856 13.5436C4.97279 13.0087 5.26892 12.5299 5.69527 12.1865C6.12161 11.8431 6.65255 11.6558 7.2 11.6556H8.8C9.34745 11.6558 9.87839 11.8431 10.3047 12.1865C10.7311 12.5299 11.0272 13.0087 11.144 13.5436C10.1911 14.1042 9.1056 14.3998 8 14.3998C6.8944 14.3998 5.80891 14.1042 4.856 13.5436ZM12.488 12.5116C12.1837 11.7844 11.6713 11.1633 11.0151 10.7263C10.359 10.2894 9.58834 10.0561 8.8 10.0557H7.2C6.41166 10.0561 5.64102 10.2894 4.98486 10.7263C4.32871 11.1633 3.8163 11.7844 3.512 12.5116C2.91253 11.922 2.43512 11.2201 2.10705 10.4459C1.77898 9.67174 1.60668 8.84052 1.6 7.99974C1.62075 6.30886 2.3017 4.69307 3.49746 3.49735C4.69322 2.30162 6.30906 1.6207 8 1.59995C9.69094 1.6207 11.3068 2.30162 12.5025 3.49735C13.6983 4.69307 14.3793 6.30886 14.4 7.99974C14.3933 8.84052 14.221 9.67174 13.8929 10.4459C13.5649 11.2201 13.0875 11.922 12.488 12.5116Z" fill="#BF9444"/>
                                <path d="M8.00016 3.20007C7.57724 3.19022 7.15671 3.26625 6.76402 3.42357C6.37132 3.58089 6.01462 3.81624 5.71549 4.11536C5.41635 4.41448 5.181 4.77117 5.02368 5.16386C4.86635 5.55654 4.79031 5.97705 4.80016 6.39996C4.79031 6.82287 4.86635 7.24339 5.02368 7.63607C5.181 8.02875 5.41635 8.38544 5.71549 8.68457C6.01462 8.98369 6.37132 9.21903 6.76402 9.37635C7.15671 9.53368 7.57724 9.60971 8.00016 9.59986C8.42309 9.60971 8.84362 9.53368 9.23631 9.37635C9.62901 9.21903 9.98571 8.98369 10.2848 8.68457C10.584 8.38544 10.8193 8.02875 10.9767 7.63607C11.134 7.24339 11.21 6.82287 11.2002 6.39996C11.21 5.97705 11.134 5.55654 10.9767 5.16386C10.8193 4.77117 10.584 4.41448 10.2848 4.11536C9.98571 3.81624 9.62901 3.58089 9.23631 3.42357C8.84362 3.26625 8.42309 3.19022 8.00016 3.20007ZM8.00016 7.99991C7.78732 8.0102 7.57469 7.97586 7.37591 7.8991C7.17713 7.82233 6.9966 7.70484 6.84592 7.55417C6.69525 7.4035 6.57775 7.22298 6.50098 7.0242C6.42422 6.82543 6.38988 6.6128 6.40016 6.39996C6.38988 6.18713 6.42422 5.9745 6.50098 5.77572C6.57775 5.57695 6.69525 5.39643 6.84592 5.24576C6.9966 5.09509 7.17713 4.9776 7.37591 4.90083C7.57469 4.82407 7.78732 4.78973 8.00016 4.80002C8.213 4.78973 8.42564 4.82407 8.62442 4.90083C8.8232 4.9776 9.00373 5.09509 9.15441 5.24576C9.30508 5.39643 9.42258 5.57695 9.49935 5.77572C9.57611 5.9745 9.61045 6.18713 9.60016 6.39996C9.61045 6.6128 9.57611 6.82543 9.49935 7.0242C9.42258 7.22298 9.30508 7.4035 9.15441 7.55417C9.00373 7.70484 8.8232 7.82233 8.62442 7.8991C8.42564 7.97586 8.213 8.0102 8.00016 7.99991Z" fill="#BF9444"/>
                                </svg>
                                <?php echo esc_html__('By', 'restho') . ' ' . esc_html(get_the_author()); ?>
                            </a>
                        </div>
                        <?php if (have_comments()): ?>
                            <div class="comment">
                                <a href="<?php echo esc_url(get_comments_link()); ?>">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.9998 7.1998C6.66255 7.1998 7.1998 6.66255 7.1998 5.9998C7.1998 5.33706 6.66255 4.7998 5.9998 4.7998C5.33706 4.7998 4.7998 5.33706 4.7998 5.9998C4.7998 6.66255 5.33706 7.1998 5.9998 7.1998Z" fill="#BF9444"/>
                                    <path d="M9.9998 7.1998C10.6625 7.1998 11.1998 6.66255 11.1998 5.9998C11.1998 5.33706 10.6625 4.7998 9.9998 4.7998C9.33706 4.7998 8.7998 5.33706 8.7998 5.9998C8.7998 6.66255 9.33706 7.1998 9.9998 7.1998Z" fill="#BF9444"/>
                                    <path d="M8 0C3.5888 0 0 2.8712 0 6.4C0 8.7264 1.5176 10.812 4 11.9472V16L8.272 12.7968C12.5576 12.6816 16 9.856 16 6.4C16 2.8712 12.4112 0 8 0ZM8 11.2H7.7336L5.6 12.8V10.8664L5.0872 10.6688C2.9368 9.8408 1.6 8.2048 1.6 6.4C1.6 3.7528 4.4712 1.6 8 1.6C11.5288 1.6 14.4 3.7528 14.4 6.4C14.4 9.0472 11.5288 11.2 8 11.2Z" fill="#BF9444"/>
                                    </svg>
                                    <?php echo esc_html('Comments'). ' ' ?> <?php echo "(".get_comments_number().")" ?>
                                </a>
                            </div>
                        <?php endif ?>
                    </div>
                    <h3><a href="<?php esc_url( the_permalink() ) ?>"><?php echo wp_kses(get_the_title(), wp_kses_allowed_html('post')) ?></a></h3>
                </div>
            </div>
        <?php
    }
}
/**
 * Blog list Grid Sidebar View
 *
 * @since 1.0.0
 */

 if (!function_exists('egns_blog_info')) {
     function egns_blog_info(){ ?>
            <div class="news-content">
                <?php egns_blog_post_meta() ?>
                <?php the_content(); 
                    Egns_Helpers::egns_get_post_pagination();
                ?>               
            </div>
            <?php if( !empty( get_the_tag_list() ) || class_exists('CSF') )  :  ?>
                <div class="tag-social">
                    <div class="row">
                        <?php if( !empty( get_the_tag_list() ) ) :  ?>
                            <div class="col-lg-6">
                                <ul class="tags">
                                    <li>
                                        <?php echo get_the_tag_list();  ?>
                                    </li>
                                </ul>
                            </div>
                        <?php endif ?>
                        <?php if( class_exists('CSF') ) : ?>
                            <div class="col-lg-6">
                                <div class="social-area">
                                    <h5><?php echo esc_html__('Share:', 'restho'); ?></h5>
                                    <ul class="social-link d-flex align-items-center justify-content-end">
                                        <li><a href="<?php echo esc_url( 'http://www.facebook.com/sharer/sharer.php?u='.get_permalink() ); ?>"><i class="bx bxl-facebook"></i></a></li>
                                        <li><a href="<?php echo esc_url( 'http://www.instagram.com/share?url='.get_permalink() ); ?>"><i class="bx bxl-instagram-alt"></i></a></li> 
                                        <li><a href="<?php echo esc_url( 'https://linkedin.com/share?url='.get_permalink() ); ?>"><i class="bx bxl-linkedin"></i></a></li>
                                        <li><a href="<?php echo esc_url( 'http://www.twitter.com/share?url='.get_permalink() ); ?>"><i class="bx bxl-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        <?php endif ?>
                    </div>
                </div>
            <?php endif ?>

            <?php if( class_exists('CSF') ) :  ?>
                <div class="blog-dt-navigation">
                    <div class="row">
                        <?php
                            $prev_post = get_adjacent_post(false, '', true);
                            $next_post = get_adjacent_post(false, '', false);
                            ?>
                            <?php if (!empty($prev_post)) : ?>
                                <div class="col-lg-6">
                                    <div class="navigation-btn d-flex align-items-center">
                                        <a href="<?php echo get_permalink($prev_post->ID); ?>"><i class="bi bi-arrow-left"></i><?php echo esc_html__('Prev Post', 'restho'); ?></a>
                                        <h5><a href="<?php echo get_permalink($prev_post->ID); ?>"><?php echo wp_kses($prev_post->post_title, wp_kses_allowed_html('post')); ?></a></h5>
                                    </div>
                                </div>
                            <?php endif ?>
                            <?php if (!empty($next_post)) : ?>
                                <div class="col-lg-6">
                                    <div class="navigation-btn two d-flex align-items-center">
                                        
                                        <h5><a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo wp_kses($next_post->post_title, wp_kses_allowed_html('post')); ?></a></h5>
                                            <a href="<?php echo get_permalink($next_post->ID); ?>"><?php echo esc_html__('Next Post', 'restho'); ?><i class="bi bi-arrow-right"></i></a>
                                    </div>
                                </div>
                            <?php endif ?>
                    </div>
                </div>
            <?php endif ?>
        <?php 
     }
 }


/**
 * Blog Details View
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_details')) {
    function egns_blog_details()
    { ?>
            <?php 
                if ( has_post_thumbnail() ) {
                    ?>
                    <div class="post-thum">
                        <?php the_post_thumbnail('',['class' => 'img-fluid']); ?>
                        <div class="batch">
                            <a href="<?php echo esc_url( home_url( get_the_date('Y/m/d') ) ) ?>"><?php echo get_the_date('F j, Y') ?></a>
                        </div>
                    </div>
                <?php
                }
                egns_blog_info();
            ?>
    <?php
    }
}


/**
 * Blog Audio Details View
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_audio_details')) {
    function egns_blog_audio_details()
    { ?>
        <?php 
            post_formate_audio();
            egns_blog_info();
        ?>
    <?php
    }
}

/**
 * Blog Video Details View
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_video_details')) {
    function egns_blog_video_details()
    { ?>
        <?php 
            post_formate_video();
            egns_blog_info();
        ?>
    <?php
    }
}

/**
 * Blog Gallery Details View
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_gallery_details')) {
    function egns_blog_gallery_details()
    { ?>
        <?php 
            post_formate_gallery();
            egns_blog_info();
        ?>
    <?php
    }
}

/**
 * Blog Quote Details View
 *
 * @since 1.0.0
 */
if (!function_exists('egns_blog_quote_details')) {
    function egns_blog_quote_details()
    { ?>
        <?php 
            post_formate_quote();
            egns_blog_info();
        ?>
    <?php
    }
}

// Project Category Tab

if( !function_exists('project_category_tab') ){
    function project_category_tab(){
        ?>
    <ul class="project-filter-tab project-filter-tab d-flex flex-row flex-wrap gap-3 justify-content-center">
        <li class="active" data-filter="*"><?php echo esc_html__('All','restho') ?></li>
        <?php $project_categories = Egns_Helpers::egns_find_all_project_categories('restho-project','restho-project-category') ?>
        <?php foreach ($project_categories as $project_category): ?>
            <li data-filter=".<?php echo esc_html($project_category->slug) ?>"><?php echo esc_html($project_category->name,'restho') ?></li>
        <?php endforeach; ?>
    </ul>
<?php 
    }
}

/**
 * Blog Post Formate Template Tag
 */

if( !function_exists('post_formate_audio') ){
    function post_formate_audio(){
        ?>
        <div class="post-audio">
            <?php
                if (Egns_Helpers::egns_has_embeded_audio()) {
                    echo Egns_Helpers::egns_embeded_audio('100%', '100%');
                }
            ?>
        </div>
        <?php
    }
}


/**
 * Blog Post Formate Template Tag
 */

if( !function_exists('post_formate_video') ){
    function post_formate_video(){
        ?>
        <div class="post-video">
            <?php
                if ( Egns_Helpers::has_egns_embeded_video() ) {
                    echo Egns_Helpers::egns_embeded_video('100%', '100%');
                }
            ?>
        </div>
        <?php
    }
}

/**
 * Blog Post Formate Template Tag
 */

if( !function_exists('post_formate_gallery') ){
    function post_formate_gallery(){
        ?>
        <div class="post-gallery">
            <?php
                if ( Egns_Helpers::has_egns_gallery() ) {
                    echo Egns_Helpers::egns_gallery_images('100%', '100%');
                }
            ?>
        </div>
        <?php
    }
}

/**
 * Blog Post Formate Template Tag
 */

if( !function_exists('post_formate_quote') ){
    function post_formate_quote(){
        ?>
        <div class="post-formate-quote">
            <blockquote>
                <?php
                    echo Egns_Helpers::egns_quote_content('100%', '100%');
                ?>
            </blockquote>
        </div>
        <?php
    }
}

?>