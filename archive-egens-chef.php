<?php get_header() ?>

<?php
get_template_part('template-parts/breadcrumbs/breadcrumb-archive');
?>

<div class="chef-experties-area pt-120 mb-120">
    <div class="container">
        <div class="row justify-content-center g-lg-5 gy-5">
            <?php
            $query = new \WP_Query(
                array(
                    'post_type'      => 'egens-chef',
                    'posts_per_page' => -1,
                )
            );
            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    $designationn = get_post_meta(get_the_ID(), 'egens_chef_designation', true);
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="cooking-expart-wrap">
                            <div class="exparts-img">
                                <?php the_post_thumbnail() ?>
                                <div class="social-area">
                                    <div class="share-icon">
                                        <i class="bx bx-share-alt"></i>
                                    </div>
                                    <ul>
                                        <?php
                                        $socialllist = get_post_meta(get_the_ID(), 'egens_chef_short_information', true);
                                        $socilas = $socialllist['egens_chef_opt_fieldset_8']['egens_chef_short_content_8'];
                                        foreach ($socilas as $socila) {
                                        ?>
                                            <?php if (!empty($socila['egens_chef_social_icon'])) :   ?>
                                                <li><a href="<?php echo esc_url($socila['egens_chef_social_link']['url']) ?>"><i class='<?php echo esc_html($socila['egens_chef_social_icon']) ?>'></i></a></li>
                                            <?php endif ?>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                            <div class="exparts-content text-center">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                <?php if (!empty($designationn['project_d'])) :   ?>
                                    <p><?php echo esc_html($designationn['project_d']) ?></p>
                                <?php endif ?>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            wp_reset_postdata();
            ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>