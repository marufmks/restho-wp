<?php 
    $project_category = Egns_Helpers::egns_find_project_categories('corelaw-project-category');
    $get_category_slug = '';
    $get_category_name = '';
    $count = 1;
    foreach ($project_category as $key => $value) {
        $get_category_slug .= $value->slug.' ';
    }
    foreach ($project_category as $key => $value) {
        $get_category_name .= $value->name;
        if($count != count($project_category)){
            $get_category_name .=  ' | ';
        }
        $count++;
    }
?>

<div class="col-md-6 col-lg-4 col-xl-4 project-single-item <?php echo esc_html($get_category_slug); ?> ">
    <div class="single-portfolio">
        <div class="portfolio-data">
            <a href="<?php esc_url( the_permalink() ) ?>">
                <?php if( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail('egns-project-grid'); ?>
                <?php endif ?>
            </a>
        </div>
        <div class="portfolio-inner">
            <span><?php echo esc_html($get_category_name) ?></span>
            <a href="<?php esc_url( the_permalink() ) ?>"><h4><?php Egns_Helpers::egns_translate_with_escape_( the_title() ) ?></h4></a>
            <div class="portfolio-hover">
                <a href="<?php esc_url( the_permalink() ) ?>" class="case-btn"><?php Egns_Helpers::egns_translate_with_escape_('Case Study') ?></a>
                <a data-lightbox="image1" href="<?php esc_url( the_post_thumbnail_url() ) ?>"><i class="fas fa-search"></i></a>
            </div>
        </div>
    </div>
</div>
