<?php
//silence

/**

 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 */

function my_theme_styles()
{
  wp_enqueue_style('sara_laboration1', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'my_theme_styles');


function minStyleFunktion()
{
  wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
}

function my_theme_setup()
{
  add_theme_support('post-thumbnails');
  add_theme_support('menus');
}
add_action('after_setup_theme', 'my_theme_setup'); //För att invänta rätt plats i produktionen
