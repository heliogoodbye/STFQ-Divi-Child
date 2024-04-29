<?php
function divi_child_enqueue_styles() {
    // Enqueue parent theme stylesheet
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    // Enqueue child theme stylesheet
    wp_enqueue_style('child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'divi_child_enqueue_styles');

// Define a function to get the current year
function get_current_year() {
    return date('Y');
}

// Register the shortcode
add_shortcode('current_year', 'display_current_year');

// Define the function to display the current year
function display_current_year() {
    return get_current_year();
}
?>
