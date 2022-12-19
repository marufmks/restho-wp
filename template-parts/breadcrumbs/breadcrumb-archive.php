<?php
 
 $enable_breadcrumb_by_theme = Egns_Helpers::egns_get_theme_option('breadcrumb_enable');
 $breadcrumb_enable_by_page = Egns_Helpers::egns_page_option_value( 'enable_breadcrumb' );

    if ( Egns_Helpers::is_enabled( $enable_breadcrumb_by_theme , $breadcrumb_enable_by_page ) ) { ?>
        <div class="breadcrumb-section" style="background-image:linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)) , url(<?php echo !empty( Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url'] ) ? Egns_Helpers::egns_get_theme_option('breadcrumb_bg')['url'] : '' ?>);">
            <div class="container">
                <div class="row d-flex justify-content-center align-items-center text-center">
                    <div class="col-lg-12">
                        <?php 
                            if( !class_exists('CSF') && is_home() ){ ?>
                            <div class="text-center">
                                <h2 class="breadcrumb-title"><?php echo esc_html(get_bloginfo('name')) ?></h2>
                                <span><?php echo wp_kses( get_bloginfo('description'),wp_kses_allowed_html('post') ) ?></span>
                            </div>
                            <?php 
                                }else{ 
                                    ?>
                                    
                                    <h2 class="breadcrumb-title">
                                        <?php
                                            if ( is_category() ) {
                                                single_cat_title();
                                            }elseif( is_tag() ){
                                                single_tag_title();
                                            }elseif( is_author() ){
                                                the_author();
                                            }elseif( is_date() ){
                                                if ( is_day() ) {
                                                    echo get_the_time( 'F j, Y' );
                                                } else if ( is_month() ) {
                                                    echo get_the_time( 'F, Y' );
                                                } else if ( is_year() ) {
                                                    echo get_the_time( 'Y' );
                                                }
                                            }elseif( is_home() ){
                                                Egns_Helpers::egns_translate_with_escape_('Blog Standard');
                                            }
                                            else{ 
                                                the_title();
                                            }
                                        ?>
                                    </h2>
                                    <nav aria-label="breadcrumb">
                                        <?php egns_breadcrumb('ul', 'breadcrumb', 'breadcrumb', 'active'); ?>
                                    </nav>
                                <?php }
                            ?>
                    </div>
                </div>
            </div>
        </div>
    <?php
    }

?>