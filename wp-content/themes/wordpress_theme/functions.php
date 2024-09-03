<?php
function wordpress_theme_support()
{
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'wordpress_theme_support');
function wordpress_theme_menus()
{
    $locations = Array(
        'primary' => "Desktop Primary Left Sidebar",
        'footer' => "Footer Menu Items"
    );
    register_nav_menus($locations);
}
add_action('init', 'wordpress_theme_menus');
function wordpress_theme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wordpress_theme_style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
    wp_enqueue_style('wordpress_theme_base', get_template_directory_uri() . "/assets/css/base.css", array('wordpress_theme_style'), $version, 'all');
}
add_action('wp_enqueue_scripts', 'wordpress_theme_register_styles');
function wordpress_theme_register_scripts()
{
    wp_enqueue_script('wordpress_theme_main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wordpress_theme_register_scripts');
?>