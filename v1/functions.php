<?php
// Theme Setup - Featured-Image (Post Thumbnail)
function gifton_theme_setup_featured_image() {

    // Enable support for post thumbnails (featured-image)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gifton_theme_setup_featured_image');
?>