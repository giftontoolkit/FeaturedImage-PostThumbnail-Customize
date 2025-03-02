<?php
// Theme Setup - Featured-Image (Post Thumbnail)
function myTM_theme_setup_featured_image() {

    // Enable support for post thumbnails (featured-image)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'myTM_theme_setup_featured_image');
?>