<?php

function delami_scripts()
{

    // wp_enqueue_style('bootstrap', get_theme_file_uri() . '/styles/bootstrap.min.css', NULL, microtime(), "all");
    // wp_enqueue_style('open-iconic-bootstrap', get_theme_file_uri() . '/styles/open-iconic/font/css/open-iconic-bootstrap.min.css', NULL, microtime(), "all");
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime(), "all");
    // wp_enqueue_style('fonts', get_theme_file_uri('/assets/fonts/stylesheet.css'), NULL, microtime(), "all");
    // wp_enqueue_script('jquery-3.5.1', get_theme_file_uri('/js/jquery-3.5.1.min.js'), NULL, microtime(), true);

    // wp_enqueue_script('popper', get_theme_file_uri('/js/popper.min.js'), NULL, microtime(), true);
    // wp_enqueue_script('bootstrap', get_theme_file_uri('/js/bootstrap.min.js'), NULL, microtime(), true);
    // wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
}

add_action('wp_enqueue_scripts', 'delami_scripts');

?>