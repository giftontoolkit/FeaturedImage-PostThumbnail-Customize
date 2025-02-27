# Enabling Featured-Image (Post Thumbnail) option in Customize Section

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

if we add below function in `functions.php`.

```ruby
<?php
// Theme Setup - Featured-Image (Post Thumbnail)
function gifton_theme_setup_featured_image() {

    // Enable support for post thumbnails (featured-image)
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'gifton_theme_setup_featured_image');
?>
```

## output before above code

![Before our code](/images/before_enable_featured_image.jpg)

## output After above code

![Before our code](/images/after_enable_featured_image.jpg)
