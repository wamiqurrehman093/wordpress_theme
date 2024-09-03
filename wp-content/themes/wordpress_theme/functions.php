<?php
function wordpress_theme_support()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'wordpress_theme_support');
function wordpress_theme_register_styles()
{
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('wordpress_theme-style', get_template_directory_uri() . "/style.css", array(), $version, 'all');
}
add_action('wp_enqueue_scripts', 'wordpress_theme_register_styles');
function wordpress_theme_register_scripts()
{
    wp_enqueue_script('wordpress_theme-main', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wordpress_theme_register_scripts');
?>