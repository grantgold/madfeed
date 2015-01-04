<?php

// REGISTER THE Video POST TYPE
add_action('init', 'cptui_register_my_cpt_video');
function cptui_register_my_cpt_video() {
register_post_type('video', array(
'label' => 'Videos',
'description' => '',
'public' => true,
'show_ui' => true,
'show_in_menu' => true,
'capability_type' => 'post',
'map_meta_cap' => true,
'hierarchical' => false,
'rewrite' => array('slug' => 'video', 'with_front' => true),
'query_var' => true,
'has_archive' => true,
'supports' => array('title','editor','excerpt','revisions','thumbnail','author'),
'taxonomies' => array('category','post_tag'),
'labels' => array (
  'name' => 'Videos',
  'singular_name' => 'Video',
  'menu_name' => 'Videos',
  'add_new' => 'Add Video',
  'add_new_item' => 'Add New Video',
  'edit' => 'Edit',
  'edit_item' => 'Edit Video',
  'new_item' => 'New Video',
  'view' => 'View Video',
  'view_item' => 'View Video',
  'search_items' => 'Search Videos',
  'not_found' => 'No Videos Found',
  'not_found_in_trash' => 'No Videos Found in Trash',
  'parent' => 'Parent Video',
)
) ); }

?>