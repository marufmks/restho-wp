<?php
/*-------------------------
**** WooCommerce Hooks ****
--------------------------*/

/**
 * remove default woocommerce sidebar
 */
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

/**
 * woocommerce product single review position change
 */
remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10);
add_action('woocommerce_single_product_summary', 'woocommerce_template_single_rating', 60);

/**
 * Shop page product column
 */
function wc_loop_shop_columns($number_columns)
{
    return 4;
}
add_filter('loop_shop_columns', 'wc_loop_shop_columns', 1, 10);


/**
 * WooCommerce breadcrumb defaults
 */
function astrip_woocommerce_breadcrumbs()
{
    return array(
        'delimiter'   => ' &#10170; ',
        'wrap_before' => '<nav class="woocommerce-breadcrumb" itemprop="breadcrumb">',
        'wrap_after'  => '</nav>',
        'before'      => '',
        'after'       => '',
        'home'        => _x('Home', 'breadcrumb', 'hotelina'),
    );
}
add_filter('woocommerce_breadcrumb_defaults', 'astrip_woocommerce_breadcrumbs');


/**
 * WooCommerce product archive page title link add
 */
function hotelinaChangeProductsTitle()
{
?>
    <h2 class="woocommerce-loop-product__title"><a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo get_the_title(); ?></a></h2>
<?php
}
remove_action('woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10);
add_action('woocommerce_shop_loop_item_title', 'hotelinaChangeProductsTitle', 10);

/**
 * WooCommerce rating position change
 */
remove_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 5);
add_action('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_rating', 11);


// 1. Show plus minus buttons
function astrip_display_quantity_plus()
{
    echo '<button type="button" class="plus"><i class="bi bi-plus-lg"></i></button>';
}
add_action('woocommerce_after_quantity_input_field', 'astrip_display_quantity_plus');

function astrip_display_quantity_minus()
{
    echo '<button type="button" class="minus"><i class="bi bi-dash-lg"></i></button>';
}
add_action('woocommerce_before_quantity_input_field', 'astrip_display_quantity_minus');


if (class_exists('WooCommerce', false)) {
    // 2. Trigger update quantity script
    function astrip_add_cart_quantity_plus_minus()
    {

        if (!is_product() && !is_cart()) return;
        wc_enqueue_js("
            $(document).on( 'click', 'button.plus, button.minus', function() {
                var qty = $( this ).parent( '.quantity' ).find( '.qty' );
                var val = parseFloat(qty.val());
                var max = parseFloat(qty.attr( 'max' ));
                var min = parseFloat(qty.attr( 'min' ));
                var step = parseFloat(qty.attr( 'step' ));

                if ( $( this ).is( '.plus' ) ) {
                if ( max && ( max <= val ) ) {
                qty.val( max ).change();
                } else {
                qty.val( val + step ).change();
                }
                } else {
                if ( min && ( min >= val ) ) {
                qty.val( min ).change();
                } else if ( val > 1 ) {
                qty.val( val - step ).change();
                }
                }
                });

        ");
    }

    add_action('wp_footer', 'astrip_add_cart_quantity_plus_minus');
}
