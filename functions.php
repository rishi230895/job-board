<?php
function enqueue_externals() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css' );
    wp_enqueue_style('jb-custom-style', get_stylesheet_directory_uri() . '/assets/css/jb-custom-style.css' );


    wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/assets/script/main.js' );
}
add_action('wp_enqueue_scripts', 'enqueue_externals');

function dequeue_parent_styles() {

    wp_dequeue_style("twenty-twenty-one-style");
    wp_deregister_style("twenty-twenty-one-style");
    wp_dequeue_style("wp-block-library");
    wp_dequeue_style("classic-theme-styles");
    wp_dequeue_style("global-styles");
    wp_dequeue_style("wc-blocks-vendors-style");
    wp_dequeue_style("wc-blocks-style");
    wp_dequeue_style("twenty-twenty-one-print-style");

}
add_action("wp_print_styles", "dequeue_parent_styles");



// Theme options page Start

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title'    => __('Theme General Settings', 'job-board'),
        'menu_title'    => __('Theme Settings', 'job-board'),
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'manage_options',
        'redirect'      => false // Set to false to avoid redirecting to the first sub-page
    ));

}


// Register the sub-pages under the parent options page
if (function_exists('acf_add_options_sub_page')) {

    acf_add_options_sub_page(array(
        'page_title'  => __('Header', 'job-board'),
        'menu_title'  => __('Header', 'job-board'),
        'parent_slug' => 'theme-general-settings',
        'capability'  => 'manage_options',
        'menu_slug'   => 'home-page',
    ));

    acf_add_options_sub_page(array(
        'page_title'  => __('Footer', 'job-board'),
        'menu_title'  => __('Footer', 'job-board'),
        'parent_slug' => 'theme-general-settings',
        'capability'  => 'manage_options',
        'menu_slug'   => 'footer',
    ));

}

//Theme options page End



