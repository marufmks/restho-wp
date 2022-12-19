<div class="lawyer-info">
    <div class="row justify-content-center gy-5">
        <div class="col-xl-5 text-xl-start text-center">
            <?php if ( has_post_thumbnail() ) {
                 the_post_thumbnail();
            }?> 
        </div>
        <div class="col-xl-7">
            <div class="lawyer-profile text-xl-start text-center">
                <h2><?php the_title();?></h2>
                <?php the_content();?>
                <div class="lawyer-counter">
                    <div class="row g-4 d-flex justify-content-xl-start justify-content-center">
                        <?php 
                            $progressState1 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_progress_state', 'egens_attorneys_progress_state_1');
                            if(!empty($progressState1['egens_attorneys_progress_state_title_1']) && !empty($progressState1['egens_attorneys_progress_state_number_1'])){
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-start d-flex justify-content-xl-start justify-content-center">
                                    <div class="lawyer-counter-single wow animate fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="0.6s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;">
                                        <div class="coundown d-flex flex-column">
                                            <h3 class="odometer" data-odometer-final="<?php echo esc_html($progressState1['egens_attorneys_progress_state_number_1'])?>">&nbsp;</h3>
                                            <h5><?php echo esc_html($progressState1['egens_attorneys_progress_state_title_1'])?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                        ?>
                        <?php 
                            $progressState1 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_progress_state', 'egens_attorneys_progress_state_2');
                            if(!empty($progressState1['egens_attorneys_progress_state_title_2']) && !empty($progressState1['egens_attorneys_progress_state_number_2'])){
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-start d-flex justify-content-xl-start justify-content-center">
                                    <div class="lawyer-counter-single wow animate fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="0.8s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;">
                                        <div class="coundown d-flex flex-column">
                                            <h3 class="odometer" data-odometer-final="<?php echo esc_html($progressState1['egens_attorneys_progress_state_number_2'])?>">&nbsp;</h3>
                                            <h5><?php echo esc_html($progressState1['egens_attorneys_progress_state_title_2'])?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                        ?>
                        <?php 
                            $progressState1 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_progress_state', 'egens_attorneys_progress_state_3');
                            if(!empty($progressState1['egens_attorneys_progress_state_title_3']) && !empty($progressState1['egens_attorneys_progress_state_number_3'])){
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-start d-flex justify-content-xl-start justify-content-center">
                                    <div class="lawyer-counter-single wow animate fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="0.10s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;">
                                        <div class="coundown d-flex flex-column">
                                            <h3 class="odometer" data-odometer-final="<?php echo esc_html($progressState1['egens_attorneys_progress_state_number_3'])?>">&nbsp;</h3>
                                            <h5><?php echo esc_html($progressState1['egens_attorneys_progress_state_title_3'])?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                        ?>
                        <?php 
                            $progressState1 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_progress_state', 'egens_attorneys_progress_state_4');
                            if(!empty($progressState1['egens_attorneys_progress_state_title_4']) && !empty($progressState1['egens_attorneys_progress_state_number_4'])){
                                ?>
                                <div class="col-lg-3 col-md-3 col-sm-3 col-6 text-start d-flex justify-content-xl-start justify-content-center">
                                    <div class="lawyer-counter-single wow animate fadeInDown animated" data-wow-duration="1.5s" data-wow-delay="0.12s" style="visibility: visible; animation-duration: 1.5s; animation-delay: 0.6s;">
                                        <div class="coundown d-flex flex-column">
                                            <h3 class="odometer" data-odometer-final="<?php echo esc_html($progressState1['egens_attorneys_progress_state_number_4'])?>">&nbsp;</h3>
                                            <h5><?php echo esc_html($progressState1['egens_attorneys_progress_state_title_4'])?></h5>
                                        </div>
                                    </div>
                                </div>
                                <?php 
                            }
                        ?>
                    </div>
                </div>  
                <div class="lawyer-short-details">
                    <h4><?php Egns_Helpers::egns_translate_with_escape_('Short Details') ?></h4>
                    <?php 
                        $siFieldset1 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_1');
                        $siFieldset2 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_2');
                        $siFieldset3 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_3');
                        $siFieldset4 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_4');
                        $siFieldset5 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_5');
                        $siFieldset6 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_6');
                        $siFieldset7 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_7');
                        $siFieldset8 = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_short_information', 'egens_attorneys_opt_fieldset_8');
                    ?>
                    <ul class="details-list">
                        <?php 
                            if(!empty($siFieldset1['egens_attorneys_short_title_1']) && $siFieldset1['egens_attorneys_short_content_1']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset1['egens_attorneys_short_title_1']);?></span>
                                    <h5><?php echo esc_html($siFieldset1['egens_attorneys_short_content_1']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset2['egens_attorneys_short_title_2']) && $siFieldset2['egens_attorneys_short_content_2']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset2['egens_attorneys_short_title_2']);?></span>
                                    <h5><?php echo esc_html($siFieldset2['egens_attorneys_short_content_2']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset3['egens_attorneys_short_title_3']) && $siFieldset3['egens_attorneys_short_content_3']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset3['egens_attorneys_short_title_3']);?></span>
                                    <h5><?php echo esc_html($siFieldset3['egens_attorneys_short_content_3']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset4['egens_attorneys_short_title_4']) && $siFieldset4['egens_attorneys_short_content_4']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset4['egens_attorneys_short_title_4']);?></span>
                                    <h5><?php echo esc_html($siFieldset4['egens_attorneys_short_content_4']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset5['egens_attorneys_short_title_5']) && $siFieldset5['egens_attorneys_short_content_5']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset5['egens_attorneys_short_title_5']);?></span>
                                    <h5><?php echo esc_html($siFieldset5['egens_attorneys_short_content_5']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset6['egens_attorneys_short_title_6']) && $siFieldset6['egens_attorneys_short_content_6']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset6['egens_attorneys_short_title_6']);?></span>
                                    <h5><?php echo esc_html($siFieldset6['egens_attorneys_short_content_6']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            if(!empty($siFieldset7['egens_attorneys_short_title_7']) && $siFieldset7['egens_attorneys_short_content_7']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset7['egens_attorneys_short_title_7']);?></span>
                                    <h5><?php echo esc_html($siFieldset7['egens_attorneys_short_content_7']);?></h5>
                                </li>
                                <?php 
                            }
                        ?>
                        <?php 
                            
                            if(!empty($siFieldset8['egens_attorneys_short_title_8']) && $siFieldset8['egens_attorneys_short_content_8']){
                                ?>
                                <li>
                                    <span><?php echo esc_html($siFieldset8['egens_attorneys_short_title_8']);?></span>
                                    <?php 
                                        if(!empty($siFieldset8['egens_attorneys_short_content_8'])){
                                            echo '<ul class="lawyer-social pt-2">';
                                            foreach ($siFieldset8['egens_attorneys_short_content_8'] as $value){ 
                                            ?>
                                                <li><a href="<?php echo esc_url($value['egens_attorneys_social_link']);?>"><i class="<?php echo esc_html($value['egens_attorneys_social_icon']);?>"></i></a></li>
                                            <?php 
                                            }
                                            echo '</ul>';
                                        }
                                    ?>
                                </li>
                                <?php 
                            }
                        ?>
                    </ul>
                </div>  
            </div>
        </div>
    </div>
</div>
<div class="row g-4">
    <div class="col-lg-3">
        <div class="nav flex-lg-column flex-md-row nav-pills gap-lg-4 gap-3 justify-content-lg-start justify-content-center align-items-center wow fadeInUp" data-wow-duration="1.5s" data-wow-delay=".2s" id="v-pills-tab" role="tablist"
            aria-orientation="vertical">
            <?php 
                $additionalInfo = Egns_Helpers::egns_post_meta_box_value('egens_attorneys_additional_tab_information', 'egens_attorneys_short_content_8');
                if(!empty($additionalInfo)){
                    $i = 1;
                    foreach($additionalInfo as $value) :
                    ?>
                        <button class="nav-link <?php if ($i == 1){echo 'active';}?>" id="v-pills-<?php echo esc_attr($i);?>-tab" data-bs-toggle="pill" data-bs-target="#v-pills-<?php echo esc_attr($i); ?>" type="button" role="tab" aria-controls="v-pills-<?php echo esc_attr($i); ?>" aria-selected="true"><?php echo esc_html($value['egens_attorneys_tab_title']); ?></button>
                    <?php 
                    $i++;
                    endforeach;
                }
            ?>
            
           
        </div>
    </div>
    <div class="col-lg-9">
        <div class="tab-content" id="v-pills-tabContent">
            <?php 
                if(!empty( $additionalInfo )){
                    $i = 1;
                    foreach($additionalInfo as $value) :
                    ?>
                    <div class="tab-pane fade  <?php if ($i == 1){echo 'show active';}?> text-lg-start text-center" id="v-pills-<?php echo esc_attr($i);?>" role="tabpanel" aria-labelledby="v-pills-<?php echo esc_attr($i);?>-tab">
                        <h3 class="lawyer-edu-title lawyer-single-heading"><?php echo esc_html($value['egens_attorneys_additional_content_title']); ?></h3>
                        <?php echo wp_kses( $value['egens_attorneys_additional_content_description'] , wp_kses_allowed_html( 'post' ) ); ?>
                    </div>
                    <?php 
                     $i++;
                    endforeach;
                }
            ?>
        </div>
    </div>
</div>