<?php

function load_assets() {
  wp_register_style('site_title_font', '//fonts.googleapis.com/css2?family=Nunito:wght@600;700&display=swap');
  wp_enqueue_style('site_title_font');

  wp_register_style('site_body_font', '//fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap');
  wp_enqueue_style('site_body_font');

  wp_register_style('main_css', get_theme_file_uri('/build/style-index.css'));
  wp_enqueue_style('main_css');

  wp_register_script('main_js', get_theme_file_uri('/build/index.js'), array(), '1.0', true);
  wp_enqueue_script('main_js');
}

add_action('wp_enqueue_scripts', 'load_assets');

function enable_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'enable_features');

function add_nav_menu_locations() {
  register_nav_menus(array(
    'header_menu' => esc_html__('Header Menu'),
    'footer_page_menu' => esc_html__('Footer Page Menu'),
    'footer_services_menu_1' => esc_html__('Footer Services Menu 1'),
    'footer_services_menu_2' => esc_html__('Footer Services Menu 2'),
    'footer_services_menu_3' => esc_html__('Footer Services Menu 3'),
    'footer_services_menu_4' => esc_html__('Footer Services Menu 4'),
  ));
}

add_action('after_setup_theme', 'add_nav_menu_locations');

function add_custom_image_sizes() {
  add_image_size('best_business_award', 250, 200, true);
}

add_action('after_setup_theme', 'add_custom_image_sizes');

// Exclude node_modules folder when creating the export bundle

function exclude_files_from_export($exclude_filters) {
  // Path is relative to themes folder
  $exclude_filters[] = 'tomken-dental-theme/node_modules';
  return $exclude_filters;
}

add_filter('ai1wm_exclude_themes_from_export', 'exclude_files_from_export');