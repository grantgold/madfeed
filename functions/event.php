<?php
add_action('init', 'cptui_register_my_taxes_event');
function cptui_register_my_taxes_event() {
register_taxonomy( 'events',array (
  0 => 'event',
  1 => 'video'
),
array( 'hierarchical' => true,
  'label' => 'Events',
  'show_ui' => true,
  'query_var' => true,
  'show_admin_column' => true,
  'labels' => array (
  'search_items' => 'Event',
  'popular_items' => 'Events',
  'all_items' => 'Events',
  'parent_item' => 'Event',
  'parent_item_colon' => 'Event',
  'edit_item' => 'Event',
  'update_item' => 'Event',
  'add_new_item' => 'Event',
  'new_item_name' => 'Event',
  'separate_items_with_commas' => 'Events',
  'add_or_remove_items' => 'Events',
  'choose_from_most_used' => 'Events',
)
) ); 
}
