<?php
add_action('init', 'cptui_register_my_cpt_symposium');
function cptui_register_my_cpt_symposium() {
  register_post_type('symposium', array(
  'label' => 'Symposiums',
  'description' => '',
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'capability_type' => 'page',
  'map_meta_cap' => true,
  'hierarchical' => false,
  'rewrite' => array('slug' => 'symposium', 'with_front' => true),
  'query_var' => true,
  'has_archive' => true,
  'supports' => array('title','editor','excerpt','revisions','thumbnail','author','page-attributes','post-formats'),
  'taxonomies' => array('category','post_tag'),
  'labels' => array (
    'name' => 'Symposiums',
    'singular_name' => 'Symposium',
    'menu_name' => 'Symposiums',
    'add_new' => 'Add Symposium',
    'add_new_item' => 'Add New Symposium',
    'edit' => 'Edit',
    'edit_item' => 'Edit Symposium',
    'new_item' => 'New Symposium',
    'view' => 'View Symposium',
    'view_item' => 'View Symposium',
    'search_items' => 'Search Symposiums',
    'not_found' => 'No Symposiums Found',
    'not_found_in_trash' => 'No Symposiums Found in Trash',
    'parent' => 'Parent Symposium',
  )
  ) ); 
}