<?php
$enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
$breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value('enable_breadcrumb');
if (Egns_Helpers::is_enabled($enable_breadcrumb_by_theme, $breadcrumb_enable_by_page)) { ?>

    <div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) , url(<?php echo !empty(Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url']) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url'] : '' ?>);">
        <div class="breadcrumb-left-vec">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/breadcumb-left-vec.svg" alt="<?php echo esc_attr__('breadcumb-left-vec', 'restho') ?>">
        </div>
        <div class="breadcrumb-right-vec">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/icon/breadcumb-right-vec.svg" alt="<?php echo esc_attr__('breadcumb-right-vec', 'restho') ?>">
        </div>
        <div class="container">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-lg-12">
                    <h2 class="breadcrumb-title">
                        <?php printf(esc_html__('Search Results for : %s', 'restho'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
                    </h2>
                    <nav aria-label="breadcrumb">
                    <?php egns_breadcrumb('ol', 'breadcrumb-item', 'breadcrumb', 'breadcrumb-item active'); ?>
                    </nav>
                </div>
            </div>
        </div>
    </div>
<?php
}
?>