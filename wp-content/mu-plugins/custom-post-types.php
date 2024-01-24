<?php

function register_patient_review_post_type() {
  $args = array(
    'labels' => array(
      'name' => 'Patient Reviews',
      'singular_name' => 'Patient Review',
      'all_items' => 'All Reviews',
      'add_new' => 'Add New Review',
      'add_new_item' => 'Add New Review',
      'edit_item' => 'Edit Review',
      'search_items' => 'Search Reviews'
    ), 
    'public' => true,
    'has_archive' => true,
    'show_in_rest' => true,
    'menu_icon' => 'dashicons-star-filled',
    'supports' => array('title', 'editor', 'thumbnail'),
    'rewrite' => array(
      'slug' => 'patient_reviews'
    )
  );

  register_post_type('patient_review', $args);
}

add_action('init', 'register_patient_review_post_type');