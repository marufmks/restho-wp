<?php

/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package restho
 */
?>

<footer  style="background-image: linear-gradient(rgba(9, 22, 29, 0.9), rgba(9, 22, 29, 0.9)), url(<?php echo (!empty(Egns_Helpers::egns_get_theme_option('footer_widget_area_background','url') ) && class_exists('CSF') ? Egns_Helpers::egns_get_theme_option('footer_widget_area_background','url'):'')  ?>);">
    <?php if ((Egns_Helpers::is_enabled(1, Egns_Helpers::egns_page_option_value('footer_widget_enable')))  && (is_active_sidebar('footer_1') || is_active_sidebar('footer_2') || is_active_sidebar('footer_3'))) : ?>
        <?php egns_footer_widgets(); ?>
    <?php endif ?>
    <?php egns_footer_copyright(); ?>
</footer>
<?php wp_footer(); ?>
</body>

</html>