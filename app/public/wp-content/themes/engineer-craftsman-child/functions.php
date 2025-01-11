<?php
function mytheme_child_enqueue_styles() {
    wp_enqueue_style( 'bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css');
    wp_enqueue_style( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css');
    wp_enqueue_style( 'glightbox', get_template_directory_uri() . '/glightbox/glightbox.min.css');
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
    wp_enqueue_style('responsive-style', get_stylesheet_directory_uri() . '/responsive.css', array('child-style'), null, 'all');



    wp_enqueue_script( 'jqueryy', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.0/jquery.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'swiper-bundle-min', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'iconify-icon', 'https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js', array('jquery'), '', true);
    wp_enqueue_script( 'glightbox', get_template_directory_uri() . '/glightbox/glightbox.min.js', array('jquery'), '', true);

    
    wp_enqueue_script( 'waypoints-js', get_template_directory_uri() . '/edit-js/waypoints.js', array('jquery'), '', true);
    wp_enqueue_script( 'counterup-js', get_template_directory_uri() . '/edit-js/counterup.js', array('jquery'), '', true);
    wp_enqueue_script( 'edit-js', get_template_directory_uri() . '/edit-js/edit-js.js', array('jquery'), '', true);
}
add_action('wp_enqueue_scripts', 'mytheme_child_enqueue_styles');




if ( ! function_exists( 'theme_setup' ) ) {
    function theme_setup() {
        add_theme_support( 'title-tag' );
        add_theme_support( 'post-formats' );
        add_theme_support( 'post-thumbnails' ); 
    }
}
add_action( 'after_setup_theme', 'theme_setup' );

add_theme_support( 'custom-header' );
add_theme_support( 'custom-background' );


?>

