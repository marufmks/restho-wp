<div class="top-bar">
    <div class="container-lg container-fluid ">
        <div class="row">
            <div class="col-lg-5 col-md-5 d-flex align-items-center justify-content-md-start justify-content-center">
                <div class="open-time">
                <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_availability_text') ) ) : ?>
                    <p><?php echo wp_kses( Egns_Helpers::egns_get_theme_option('header_topbar_availability_text'),wp_kses_allowed_html('post') ) ?></p>
                <?php endif ?>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 d-flex justify-content-end">
                <div class="contact-info">
                    <ul>
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ) : ?>
                            <li><a href="<?php echo esc_attr('mailto:'. Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ?>"><i class="<?php echo esc_attr( Egns_Helpers::egns_get_theme_option('header_topbar_mail_icon') ) ?>"></i><?php echo esc_html( ' '.Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ?></a></li>
                        <?php endif ?>
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_location_text') ) ) : ?>
                            <li><a><i class="<?php echo esc_attr( Egns_Helpers::egns_get_theme_option('header_topbar_location_icon') ) ?>"></i><?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_location_text') ) ?></a></li>
                        <?php endif ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>