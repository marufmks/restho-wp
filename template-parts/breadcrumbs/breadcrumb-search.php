<?php
    $enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
    $breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value( 'enable_breadcrumb' );
    if ( Egns_Helpers::is_enabled( $enable_breadcrumb_by_theme , $breadcrumb_enable_by_page ) ) { ?>

        <div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) , url(<?php echo !empty( Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url'] ) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url'] : '' ?>);">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <div class="col-lg-12">
                        <h2 class="breadcrumb-title">
                            <?php printf( esc_html__( 'Search Results for : %s', 'corelaw' ), '<span>' . esc_html( get_search_query()) . '</span>' ); ?>
                        </h2>
                        <nav aria-label="breadcrumb">
                            <?php egns_breadcrumb('ul', 'breadcrumb', 'breadcrumb', 'active'); ?>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }
?>