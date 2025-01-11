<?php
function mytheme_enqueue_styles() {
    // wp_enqueue_style('mytheme-style', get_stylesheet_uri());
    // wp_enqueue_style('parent-responsive-style', get_template_directory_uri() . '/responsive.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
?>