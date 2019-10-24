<?php
/**
 * wp-test-theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package wp-test-theme
 */

add_action( 'wp_head', 'wp_enqueue_scripts');
add_action('wp_footer', 'wp_scripts_theme');
add_action('after_setup_theme', 'register_my_menu');

add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'main_style', get_template_directory_uri());
    wp_enqueue_style( 'style', get_template_directory_uri(). '/scss/style.css');
});

function wp_scripts_theme() {
    wp_enqueue_script('init', get_template_directory_uri() . '/js/jquery.main.js');
}

function register_my_menu() {
    register_nav_menu( 'main_menu', 'top_menu' );
}

//register acf_options
if( function_exists('acf_add_options_page') ) {
    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));
    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));
}