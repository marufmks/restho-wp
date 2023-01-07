<?php 
if( ! function_exists( 'egns_comment_callback' ) ):
function egns_comment_callback($comment, $args, $depth) {
   
    ?>
<li>
    <div id="comment-<?php echo esc_html( $comment->comment_ID ); ?>" class="single-comment">
        <div class="comment-image">
            <?php echo get_avatar($comment, $size='80' ); ?>
        </div>
        <div class="comment-content">
            <div class="c-header d-flex align-items-center">
                <div class="comment-meta">
                    <h5 class="mb-0"><a href="#"><?php echo get_comment_author().esc_html__(' ,')?></a></h5>
                    <div class="c-date"><?php echo get_comment_date() ?></div>
                </div>
                <?php if( $depth < $args['max_depth'] && comments_open() ) :  ?>
                    <div class="replay-btn">
                        <?php comment_reply_link( array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth'],'reply_text' => '<i class="bi bi-reply"></i> Reply')) ) ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="c-body">
                <p><?php comment_text() ?></p>
            </div>
        </div>
        
    </div>
</li>
    
<?php
        }
endif; 


//for the comment wrapping functions - ensures HTML does not break.
$comment_open_div = 0;

/**
 * Creates an opening div for a bootstrap row.
 * @global int $comment_open_div
 */
function _lp_before_comment_fields(){
    global $comment_open_div;
    $comment_open_div = 1;
    echo '<div class="row">';
}
/**
 * Creates a closing div for a bootstrap row.
 * @global int $comment_open_div
 * @return type
 */
function _lp_after_comment_fields(){
    global $comment_open_div;
    if($comment_open_div == 0)
        return;
    echo '</div>';
}
function wpb_move_comment_field_to_bottom( $fields ) {
    $comment_field = $fields['comment'];
    unset( $fields['comment'] );
    $fields['comment'] = $comment_field;
    return $fields;
}

function wc_comment_form_change_cookies( $fields ) {
	$commenter = wp_get_current_commenter();
	$consent   = empty( $commenter['comment_author_email'] ) ? '' : ' checked="checked"';
	$fields['cookies'] = '<p class="comment-form-cookies-consent"><input id="wp-comment-cookies-consent" name="wp-comment-cookies-consent" type="checkbox" value="yes"' . $consent . ' />' .
					 '<label for="wp-comment-cookies-consent">'.esc_html__(' Please save my name, email for the next time when I comment.', 'restho').'</label></p>';
	return $fields;
}
add_filter( 'comment_form_default_fields', 'wc_comment_form_change_cookies' );
add_filter( 'comment_form_fields', 'wpb_move_comment_field_to_bottom' );
add_action('comment_form_before_fields', '_lp_before_comment_fields');
add_action('comment_form_after_fields', '_lp_after_comment_fields');
