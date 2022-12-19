<!-- <div class="topbar">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-md-3">
                <div class="phone-call2 d-flex justify-content-start align-items-center flex-row gap-2">
                    <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_contact_icon')['url'] ) ) : ?>
                    <div class="icon">
                        <img src="<?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_contact_icon')['url'] ) ?>" alt="<?php echo esc_attr('contact-icons') ?>" class="img-fluid mt-1">
                    </div>  
                    <?php endif ?>
                    <div class="number">
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_contact_text') ) ) : ?>
                            <span><?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_contact_text') ) ?></span>
                        <?php endif ?>
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_contact_phone') ) ) : ?>
                            <h5><a href="tel:<?php echo esc_attr( str_replace(" ","",Egns_Helpers::egns_get_theme_option('header_topbar_contact_phone')) ) ?>"><?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_contact_phone') ) ?></a></h5>
                        <?php endif ?>
                    </div>
                </div>
            </div>
            <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_appoinment_text') ) ) : ?>
            <div class="col-md-6 text-center">
                <div class="appontment">
                    <h6><?php echo wp_kses( Egns_Helpers::egns_get_theme_option('header_topbar_appoinment_text'), wp_kses_allowed_html('post') ) ?></h6>
                </div>
            </div>
            <?php endif ?>
            <div class="col-md-3">
                <div class="phone-call2 d-flex justify-content-end align-items-center flex-row gap-2">
                    <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_mail_icon')['url'] ) ) :  ?>
                        <div class="icon">
                            <img src="<?php echo Egns_Helpers::egns_get_theme_option('header_topbar_mail_icon')['url'] ?>" alt="<?php echo esc_attr('mail-icon') ?>" class="img-fluid mt-1">
                        </div>
                    <?php endif ?>
                    <div class="number">
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ) : ?>
                            <span><?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ?></span>
                        <?php endif ?>
                        <?php if( !empty( Egns_Helpers::egns_get_theme_option('header_topbar_mail_text') ) ) : ?>
                            <h5><a href="mailto:<?php echo esc_attr( Egns_Helpers::egns_get_theme_option('header_topbar_mail_address') ) ?>"><?php echo esc_html( Egns_Helpers::egns_get_theme_option('header_topbar_mail_address') ) ?></a></h5>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="top-bar">
    <div class="container-lg container-fluid ">
        <div class="row">
            <div class="col-lg-5 col-md-5 d-flex align-items-center justify-content-md-start justify-content-center">
                <div class="open-time">
                    <p><span>Opening Hour:</span> 9.00 am to 10.00 pm</p>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 d-flex justify-content-end">
                <div class="contact-info">
                    <ul>
                        <li><a href="mailto:info@example.com"><i class="bi bi-envelope"></i> info@example.com</a></li>
                        <li><a><i class="bi bi-geo-alt"></i>Road-01, Block-B, West London City</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>