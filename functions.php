<?php
function git_theme_name_scripts() {
    // Enqueue Styles
    wp_enqueue_style('style-name-one', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-name-six', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_style('style-name-two', get_template_directory_uri() . '/css/aos.css', array(), '1.0.0', 'all');
    wp_enqueue_style('style-name-four', get_template_directory_uri() . '/css/owl.carousel.min.css');
    wp_enqueue_style('style-name-five', get_template_directory_uri() . '/css/owl.theme.default.min.css');
    wp_enqueue_style('style-name-three', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');

    // Enqueue Scripts
    wp_enqueue_script('script-name-one', get_template_directory_uri() . '/js/jquery-3.7.1.min.js');
    wp_enqueue_script('script-name-two', get_template_directory_uri() . '/js/bootstrap.bundle.min.js');
    wp_enqueue_script('script-name-three', get_template_directory_uri() . '/js/aos.js');
    wp_enqueue_script('script-name-five', get_template_directory_uri() . '/js/owl.carousel.min.js');
    wp_enqueue_script('script-name-four', get_template_directory_uri() . '/js/script.js');
}

add_action('wp_enqueue_scripts', 'git_theme_name_scripts');

add_theme_support('post-thumbnails');

// add for contact form 7 auto p tag removed
add_filter('wpcf7_autop_or_not', '__return_false');

// Theme Option Function
include_once('inc/theme_function.php');
// Widget Register Function
include_once('inc/widget_register.php');
//  Custom Post Type Function
include_once('inc/custom_post_type.php');
// include bootstrap navwalker
//include_once ('/inc/class-wp-bootstrap-navwalker.php');