<?php $prefix = 'egens_chef'; ?>
<div class="chef-details-area pt-120 mb-120">
    <div class="container">
        <div class="row align-items-center g-lg-5 gy-5 mb-60">
            <div class="col-lg-6">
                <div class="chef-introduction">
                    <div class="chef-name">
                        <?php $about_info = get_post_meta(get_the_ID(), $prefix . '_about', true);
                        $head_title = $about_info[$prefix . '_opt_fieldset_1'][$prefix . '_heading_title'];
                        ?>
                        <?php if (!empty($head_title)) : ?>
                            <h3><?php echo esc_html__($head_title, 'restho') ?></h3>
                        <?php endif ?>
                        <h2><?php the_title(); ?></h2>
                    </div>
                    <div class="about-chef">
                        <?php the_content(); ?>
                        <div class="chef-contact">
                            <ul>
                                <?php
                                $about_titles = $about_info[$prefix . '_opt_fieldset_1'][$prefix . '_about_repeater'];
                                ?>
                                <?php foreach ($about_titles as $key => $item) {
                                    if (!empty($item[$prefix . '_about_text'])) {
                                        echo ($key == 3) ? '</ul><ul> <li>' . wp_kses($item[$prefix . '_about_text'], wp_kses_allowed_html('post')) . '</li>' :
                                            '<li>' . wp_kses($item[$prefix . '_about_text'], wp_kses_allowed_html('post')) . '</li>';
                                    }
                                    $key++;
                                } ?>
                            </ul>
                        </div>
                        <div class="social-area">
                            <?php
                            $socialllist = get_post_meta(get_the_ID(), $prefix . '_short_information', true);
                            $social_heading = $socialllist[$prefix . '_opt_fieldset_8'][$prefix . '_social_heading'];

                            ?>
                            <?php if (!empty($social_heading)) : ?>
                                <h3><?php echo esc_html__($social_heading, 'restho') ?></h3>
                            <?php endif ?>
                            <ul class="social-link d-flex align-items-center justify-content-center">
                                <?php
                                $socilas = $socialllist[$prefix . '_opt_fieldset_8'][$prefix . '_short_content_8'];
                                foreach ($socilas as $socila) {
                                ?>
                                    <?php if (!empty($socila[$prefix . '_social_icon'])) :   ?>
                                        <li><a href="<?php echo esc_url($socila[$prefix . '_social_link']['url']) ?>"><i class='<?php echo esc_html($socila[$prefix . '_social_icon']) ?>'></i></a></li>
                                    <?php endif ?>

                                <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="divider">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icon/chef-dt-shape.svg" alt="<?php echo esc_attr__('chef-dt-shape', 'restho') ?>">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="chef-dt-img">
                    <?php
                    if (has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="row g-lg-5 gy-5">
            <div class="col-lg-6">
                <div class="chef-skills">
                    <?php $skill_info = get_post_meta(get_the_ID(), $prefix . '_skill', true);
                    $skill_head_title = $skill_info[$prefix . '_opt_fieldset_3'][$prefix . '_skill_heading_title'];
                    $skill_head_desc = $skill_info[$prefix . '_opt_fieldset_3'][$prefix . '_skill_description'];
                    ?>
                    <?php if (!empty($skill_head_title)) : ?>
                        <h3><?php echo esc_html__($skill_head_title, 'restho') ?></h3>
                    <?php endif ?>
                    <?php if (!empty($skill_head_desc)) : ?>
                        <p><?php echo wp_kses($skill_head_desc, wp_kses_allowed_html('post')) ?></p>
                    <?php endif ?>
                    <ul class="skills-bar-container">
                        <?php
                        $skill_all = $skill_info[$prefix . '_opt_fieldset_3'][$prefix . '_skill_repeater'];
                        foreach ($skill_all as $skill) {
                        ?>
                            <li style="margin: 80px 0px;">
                                <div class="skillbar clearfix " data-percent="<?php echo esc_html($skill[$prefix . '_skill_percentage'] . '%') ?>">
                                    <?php if (!empty($skill[$prefix . '_skill_text'])) : ?>
                                        <div class="skillbar-title"><span><?php echo esc_html__($skill[$prefix . '_skill_text']) ?></span></div>
                                    <?php endif ?>
                                    <div class="skillbar-bar"></div>
                                    <?php if (!empty($skill[$prefix . '_skill_percentage'])) : ?>
                                        <div class="skill-bar-percent Count"><?php echo esc_html($skill[$prefix . '_skill_percentage']) ?></div>
                                    <?php endif ?>
                                </div>
                            </li>
                        <?php
                        }
                        ?>

                    </ul>
                </div>
            </div>
            <!-- end testing -->
            <div class="col-lg-6">
                <div class="chef-dt-counter">
                    <div class="row justify-content-center g-4">
                        <?php $counter_info = get_post_meta(get_the_ID(), $prefix . '_counter', true);
                        $counter_list = $counter_info[$prefix . '_opt_fieldset_4'][$prefix . '_counter_repeater'];
                        ?>
                        <?php
                        foreach ($counter_list as $counter) {
                        ?>
                            <div class="col-xxl-6 col-lg-12 col-md-6 col-sm-6 col-12">
                                <div class="counter-single">
                                    <div class="counter-icon">
                                        <?php if (!empty($counter[$prefix . '_counter_icon']['url'])) : ?>
                                            <img src="<?php echo esc_url($counter[$prefix . '_counter_icon']['url']) ?>" alt="<?php echo esc_attr__('image', 'restho') ?>">
                                        <?php endif ?>
                                    </div>
                                    <div class="coundown">
                                        <div class="d-flex align-items-center gap-2">
                                            <?php if (!empty($counter[$prefix . '_counter_number'])) : ?>
                                                <h3 class="odometer odometer-auto-theme" data-odometer-final="<?php echo esc_attr($counter[$prefix . '_counter_number']) ?>"><?php echo esc_html('0') ?></h3>
                                                <span><?php echo esc_html('+') ?></span>
                                            <?php endif ?>
                                        </div>
                                        <?php if (!empty($counter[$prefix . '_counter_text'])) : ?>
                                            <p><?php echo wp_kses($counter[$prefix . '_counter_text'], wp_kses_allowed_html('post')) ?></p>
                                        <?php endif ?>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="chef-video-area mb-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="video-img">
                    <?php $video_info = get_post_meta(get_the_ID(), $prefix . '_video', true);
                    $video_title = $video_info[$prefix . '_opt_fieldset_5'][$prefix . '_video_text'];
                    $video_img = $video_info[$prefix . '_opt_fieldset_5'][$prefix . '_video_image'];
                    $video_file = $video_info[$prefix . '_opt_fieldset_5'][$prefix . '_video_source'];
                    ?>
                    <?php if (!empty($video_img['url'])) : ?>
                        <img class="img-fluid" src="<?php echo esc_url($video_img['url']) ?>" alt="<?php echo esc_attr__('chef-dt-video-bg', 'restho') ?>">
                    <?php endif ?>
                    <div class="video-content">
                        <div class="video-icon">
                            <?php if (!empty($video_file['url'])) : ?>
                                <a class="gallery2-img" data-fancybox="gallery" href="<?php echo esc_url($video_file['url']) ?>"><i class="bi bi-play-circle"></i></a>
                            <?php endif ?>
                        </div>
                        <?php if (!empty($video_title)) : ?>
                            <h3><?php echo esc_html__($video_title, 'restho') ?></h3>
                        <?php endif ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>