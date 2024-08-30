<?php
function enqueue_externals() {
    wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/style.css' );

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
