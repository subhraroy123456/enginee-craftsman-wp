<?php
function mytheme_child_enqueue_styles() {
    // Enqueue Parent Theme Style
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    // Enqueue Responsive CSS Last
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/responsive.css', array('child-style'), null, 'all');
}
add_action('wp_enqueue_scripts', 'mytheme_child_enqueue_styles');
?>