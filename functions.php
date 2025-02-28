<?php
function my_theme_enqueue_styles() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');



function my_theme_setup() {
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'my-custom-theme'),
    ));
    add_theme_support('widgets');
}
add_action('after_setup_theme', 'my_theme_setup');




function my_theme_enqueue_scripts() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('custom-js', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_scripts');




function my_custom_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails'); 
    add_theme_support('custom-logo'); 
    add_theme_support('align-wide'); // Supports full-width blocks in Gutenberg
}
add_action('after_setup_theme', 'my_custom_theme_setup');


if (!is_admin()) {
    add_filter('show_admin_bar', '__return_true');
}

?>


