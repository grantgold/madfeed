<?php
add_action('init', 'cptui_register_my_cpt_event');
function cptui_register_my_cpt_event() {
  register_post_type('event', array(
  'label' => 'Events',
  'description' => '',
  'public' => true,
  'show_ui' => true,
  'show_in_menu' => true,
  'capability_type' => 'page',
  'map_meta_cap' => true,
  'hierarchical' => false,
  'rewrite' => array('slug' => 'event', 'with_front' => true),
  'query_var' => true,
  'has_archive' => true,
  'supports' => array('title','editor','excerpt','revisions','thumbnail','author','page-attributes','post-formats'),
  'taxonomies' => array('category','post_tag'),
  'labels' => array (
    'name' => 'Events',
    'singular_name' => 'Event',
    'menu_name' => 'Events',
    'add_new' => 'Add Event',
    'add_new_item' => 'Add New Event',
    'edit' => 'Edit',
    'edit_item' => 'Edit Event',
    'new_item' => 'New Event',
    'view' => 'View Event',
    'view_item' => 'View Event',
    'search_items' => 'Search Events',
    'not_found' => 'No Events Found',
    'not_found_in_trash' => 'No Events Found in Trash',
    'parent' => 'Parent Event',
  )
  ) ); 
}