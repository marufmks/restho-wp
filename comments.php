<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package restho
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
    return;
}

?>
<?php
    if ( have_comments() ) : ?> 
    <div class="comment-area" id="comments">
        <div class="blog-comments">
            <div class="comment-list">
                    <h3 class="comments-title"><?php comments_number( esc_html__('0 Comments', 'restho'), esc_html__('1 Comment', 'restho'), esc_html__(  '% Comments', 'restho') ); ?></h3>
                    <?php 
                        wp_list_comments( array(
                            'style'      => 'ul',
                            'short_ping' => true,
                            'callback' => 'egns_comment_callback',
                        ) );
                    ?>
                    <?php
                        the_comments_navigation();

                        // If comments are closed and there are comments, let's leave a little note, shall we?

                        if( !comments_open() ) {
                            echo '<p class="no-comments">'. esc_html__( 'Comments are closed.', 'restho' ) .'</p>';

                        }
                    ?>
            </div>
        </div>
    </div>
<?php endif; ?>
<div class="blog-comment-form">
    <?php
        // Custom comments_args here: https://codex.wordpress.org/Function_Reference/comment_form
        $commenter = wp_get_current_commenter();
        $req = get_option( 'require_name_email' );
        $aria_req = ( $req ? " aria-required='true'" : '' );

        $comments_args = array(
            'title_reply'   => esc_html__('Leave a Comment','restho'),
            'fields'     => apply_filters( 'comment_form_default_fields', array(
                'author' => '<div class="col-md-6"><input id="author" name="author" type="text" value="'.esc_attr($commenter['comment_author'])
                    .'" placeholder="'.esc_attr__('Your Name','restho').'" '.esc_html($aria_req).'></div>',

                'email' => '<div class="col-md-6"> <input  id="email" name="email" type="email"  value="'.esc_attr($commenter['comment_author_email'])
                    .'" placeholder="'.esc_attr__('Your Email','restho').'" '.esc_html($aria_req).'></div>',
                
            )),
            'comment_field' => ' <div class="row"><div class="col-12"><textarea class=" text__area" id="comment" name="comment" cols="45" rows="8" placeholder="'. esc_attr__( 'Type Your Comment','restho' ) .'"></textarea></div></div>',
            'class_submit' => 'btn btn-submit',
            'label_submit' => esc_html__( 'Submit Comment','restho' ),
            'format'       => 'xhtml'
        );

    ?>

    <?php 
        comment_form( $comments_args );
    ?>
</div>
