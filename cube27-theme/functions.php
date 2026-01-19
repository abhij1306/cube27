<?php
/**
 * Cube27 functions and definitions
 *
 * @package Cube27
 */

function cube27_scripts()
{
    // Enqueue the main stylesheet (style.css) - mostly for theme info
    wp_enqueue_style('cube27-style', get_stylesheet_uri());

    // Enqueue the site's main CSS
    wp_enqueue_style('cube27-main-css', get_template_directory_uri() . '/css/styles.css', array(), '1.0.0');

    // Enqueue Google Fonts
    wp_enqueue_style('cube27-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap', array(), null);

    // Enqueue the site's main JS
    wp_enqueue_script('cube27-main-js', get_template_directory_uri() . '/js/main.js', array(), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'cube27_scripts');

function cube27_setup()
{
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title.
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages.
    add_theme_support('post-thumbnails');

    // Register Navigation Menus
    register_nav_menus(array(
        'menu-1' => esc_html__('Primary', 'cube27'),
    ));
}
add_action('after_setup_theme', 'cube27_setup');
