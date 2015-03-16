<?php
add_action('init', 'cptui_register_my_taxes_contributors');
function cptui_register_my_taxes_contributors() {
register_taxonomy( 'contributors',array (
  0 => 'post',
  1 => 'video',
  2 => 'event'
),
array( 'hierarchical' => true,
  'label' => 'Contributors',
  'show_ui' => true,
  'query_var' => true,
  'show_admin_column' => true,
  'labels' => array (
  'search_items' => 'Contributor',
  'popular_items' => 'Contributors',
  'all_items' => 'Contributors',
  'parent_item' => 'Contributor',
  'parent_item_colon' => 'Contributor',
  'edit_item' => 'Contributor',
  'update_item' => 'Contributor',
  'add_new_item' => 'Contributor',
  'new_item_name' => 'Contributor',
  'separate_items_with_commas' => 'Contributors',
  'add_or_remove_items' => 'Contributors',
  'choose_from_most_used' => 'Contributors',
)
) ); 
}
