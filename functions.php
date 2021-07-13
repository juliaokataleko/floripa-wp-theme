<?php

// Adding the CSS and JS files

function kt_setup() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@1,300&family=Roboto+Slab:wght@200&family=Roboto:ital,wght@1,300&display=swap');
    wp_enqueue_style('fontawesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css');
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime()); // all
    wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
    wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js');
}

add_action('wp_enqueue_scripts', 'kt_setup');

// Adding theme support

function kt_init() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    // Html files
    add_theme_support('html5', [
        'comment-list',
        'comment-form',
        'search-form'
    ]);
}

add_action('after_setup_theme', 'kt_init');
