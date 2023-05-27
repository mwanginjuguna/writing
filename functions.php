<?php

// Enqueue theme styles and scripts
function writing_theme_enqueue_scripts()
{
    // Enqueue main stylesheet
    wp_enqueue_style('writing-theme-style', get_stylesheet_uri());

    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css', array(), '5.3.0', 'all');

    // Enqueue Bootstrap JS
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '5.3.0', true);
}

add_action('wp_enqueue_scripts', 'writing_theme_enqueue_scripts');