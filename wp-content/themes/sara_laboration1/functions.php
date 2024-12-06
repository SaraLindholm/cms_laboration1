<?php

function labb1_gratis_cleanup_head()
{
  remove_action('wp_head', 'wp_oembed_add_host_js');
  remove_filter('oembed_dataparse', 'wp_filter_pre_oembed_result', 10);
  remove_action('rest_api_init', 'wp_oembed_register_route');
  remove_filter('embed_oembed_discover', '__return_false');
  remove_action('wp_head', 'wp_oembed_add_discovery_links');
  remove_action('wp_head', 'wp_oembed_add_js_api');
  wp_dequeue_style('wp-block-library');
  wp_dequeue_style('wp-block-library-theme');
  wp_dequeue_style('wc-block-style');
  wp_dequeue_style('global-styles');
  remove_action('wp_head', 'rsd_link');
  remove_action('wp_head', 'wp_generator');
  remove_action('wp_head', 'feed_links', 2);
  remove_action('wp_head', 'feed_links_extra', 3);
  remove_action('wp_head', 'wlwmanifest_link');
  remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0);
  remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
  remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);
  remove_action('wp_head', 'print_emoji_detection_script', 7);
  wp_dequeue_style('classic-theme-styles');
  remove_action('wp_head', 'rest_output_link_wp_head');
}

add_action('wp_enqueue_scripts', 'labb1_gratis_cleanup_head', 100);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rel_canonical');


function sl_after_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
  add_theme_support('title-tag');
  add_theme_support('widgets');
  remove_theme_support('widgets-block-editor');
}


add_action('after_setup_theme', 'sl_after_theme_setup'); //För att invänta rätt plats i produktionen

function sl_widgets_init()
{
  register_sidebar(array(
    'name' => 'Footer-Kort om oss',
    'id' => 'footer-about',
    'description' => 'Kort om oss',
    'before_widget' => '<div class="col-xs-12 col-sm-6 col-md-4">', // Anpassad HTML för varje widget
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'name' => 'Footer-Kontaktuppgifter',
    'id' => 'footer-contact',
    'description' => 'Kontaktuppgifter',
    'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'name' => 'Footer-Social media',
    'id' => 'footer-social',
    'description' => 'Social media',
    'before_widget' => '<div class="col-xs-12 col-sm-3 col-md-3 col-md-offset-1">',
    'after_widget' => '</div>',
    'before_title' => '<h4>',
    'after_title' => '</h4>',
  ));


  register_sidebar(array(
    'name' => 'Blogg-Sök',
    'id' => 'aside-sok',
    'description' => 'Sök',
    'before_widget' => '', // Anpassad HTML för varje widget
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => 'Blogg-Sidor',
    'id' => 'aside-sidor',
    'description' => 'Sidor',
    'before_widget' => '<li class="page_item">', // Anpassad HTML för varje widget
    'after_widget' => '</li>',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => 'Blogg-Arkiv',
    'id' => 'aside-arkiv',
    'description' => 'Sidor',
    'before_widget' => '', // Anpassad HTML för varje widget
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  register_sidebar(array(
    'name' => 'Blogg-Kategorier',
    'id' => 'aside-kategori',
    'description' => 'Kategorier',
    'before_widget' => '', // Anpassad HTML för varje widget
    'after_widget' => '',
    'before_title' => '<h2>',
    'after_title' => '</h2>',
  ));

  // Ta bort omslutande <div> på Widgets
  function customize_widget_nav_menu_args($args)
  {
    $args['container'] = false;
    return $args;
  }
  add_filter('widget_nav_menu_args', 'customize_widget_nav_menu_args');
}
add_action('widgets_init', 'sl_widgets_init');



function my_theme_style()
{
  $myStyle = get_stylesheet_directory_uri() . '/css' . '/style.css';
  wp_enqueue_style('my-theme-style',  $myStyle);
}
add_action('wp_enqueue_scripts', 'my_theme_style');


function my_theme_enqueue_styles()
{
  wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css');
  wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css');
  wp_enqueue_style('style', get_template_directory_uri() . '/css/style.css');
  wp_enqueue_script('jquery');
  wp_enqueue_script('custom-script', get_template_directory_uri() . '/js/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


//för att styra antal ord som visas i inläggets sammanfattning samt avslutar med en tom sträng,
add_filter('excerpt_length', function () {
  return 66;
});
add_filter('excerpt_more', function () {
  return '';
});
