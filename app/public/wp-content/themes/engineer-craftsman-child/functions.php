<?php
function mytheme_child_enqueue_styles() {
    // Enqueue Parent Theme Style
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/glightbox/glightbox.min.css');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    // Enqueue Responsive CSS Last
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/responsive.css', array('child-style'), null, 'all');
}
add_action('wp_enqueue_scripts', 'mytheme_child_enqueue_styles');
?>