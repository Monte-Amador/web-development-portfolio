<?php
function _themename_assets() {
  wp_enqueue_style( '_themename-stylesheet', get_template_directory_uri() . '/dist/css/bundle.css', array(), '1.0.0', 'all' );
  
  wp_enqueue_style( '_themename-fontawesome', get_template_directory_uri() . '/dist/css/4_libraries/fontawesome-all.css', array(), '1.0.0', 'all' );

  wp_enqueue_script( '_themename-slick', get_template_directory_uri() . '/dist/js/slick.js', array('jquery'));

  wp_enqueue_script( '_themename-bundle', get_template_directory_uri() . '/dist/js/bundle.js', array('jquery'), '1.0.0', true);
  
  
}
add_action('wp_enqueue_scripts', '_themename_assets');

register_nav_menu( 'primary', 'Primary Menu' );

// Support Featured Images
add_theme_support( 'post-thumbnails' );

// Support Title
add_theme_support( 'title-tag' );

// Support Custom Logo
add_theme_support( 'custom-logo', array(
    'height' => 170,
    'width'  => 500,
) );

// Custom Post Type
function create_basic_custom_post() {
  register_post_type( 'basic-custom-post',
      array(
      'labels' => array(
  'name' => __( 'Simple Custom Post' ),
  'singular_name' => __( 'Simple Custom Post' ),
      ),
      'public' => true,
      'has_archive' => true,
      'supports' => array(
  'title',
  'editor',
  'thumbnail',
  'custom-fields'
      )
  ));
}
add_action( 'init', 'create_basic_custom_post' );