<?php
if ( ! function_exists( 'theme_setup' ) ) :
  function theme_setup() {
    add_theme_support('title-tag');

    add_theme_support( 'post-thumbnails' );
  }
endif;
add_action( 'after_setup_theme', 'theme_setup' );

function theme_enqueue_page_styles() {
  wp_enqueue_style( 'global-style', get_template_directory_uri() . './assets/css/main.css', array(), '1.0');

  if ( is_front_page() ) {
    wp_enqueue_style( 'home-style', get_template_directory_uri() . '/assets/css/home-page.css', array('global-style'), '1.0' );
  }
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_page_styles' );