<?php

function my_styles() {

  wp_enqueue_style('stylesheet-css', get_template_directory_uri() . '/assets/style.css', [], filemtime(get_template_directory() . '/assets/style.css'), 'all');
  wp_register_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', [], null, true);
  wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js', [], null, true);
  wp_register_script('scrollTrigger', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js', ['gsap'], null, true);
  wp_register_script('script', get_template_directory_uri() . '/assets/main.js', ['swiper', 'gsap', 'scrollTrigger'], filemtime(get_template_directory() . '/assets/main.js'), true);

  wp_enqueue_script('script');
}
add_action('wp_enqueue_scripts', 'my_styles');

add_theme_support('menus');

add_theme_support('post-thumbnails');

function display_post_thumbnail()
{
 if (has_post_thumbnail()) {
  the_post_thumbnail('');
 } else {
  echo '<img src="' . get_template_directory_uri() . '/assets/img/dummy/670x446.png" alt="Dummy Image">';
 }
}