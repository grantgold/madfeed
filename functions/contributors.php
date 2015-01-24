<?php
add_action('init', 'cptui_register_my_taxes_contributors');
function cptui_register_my_taxes_contributors() {
register_taxonomy( 'contributors',array (
  0 => 'post',
  1 => 'video',
  // 2 => 'page',
  // 3 => 'symposium',
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



// Add term page
function madfeed_taxonomy_add_new_meta_field() {
// this will add the custom meta field to the add new term page
?>
  <div class="form-field">
    <label for="contributor_meta[twitter]"><?php _e( 'Twitter Username @', 'madfeed' ); ?></label>
    <input type="text" name="contributor_meta[twitter]" id="contributor_meta[twitter]" value="">
    <p class="description"><?php _e( 'Example: @TheMADFeed','madfeed' ); ?></p>
  </div>
<?php
}
add_action( 'contributors_add_form_fields', 'madfeed_taxonomy_add_new_meta_field', 10, 2 );



// Edit term page
function madfeed_taxonomy_edit_meta_field($term) {
 
  // put the term ID into a variable
  $t_id = $term->term_id;
 
  // retrieve the existing value(s) for this meta field. This returns an array
  $contributor_meta = get_option( "taxonomy_$t_id" ); ?>
  <tr class="form-field">
  <th scope="row" valign="top"><label for="contributor_meta[twitter]"><?php _e( 'Twitter Username @', 'madfeed' ); ?></label></th>
    <td>
      <input type="text" name="contributor_meta[twitter]" id="contributor_meta[twitter]" value="<?php echo esc_attr( $contributor_meta['twitter'] ) ? esc_attr( $contributor_meta['twitter'] ) : ''; ?>">
      <p class="description"><?php _e( 'Example: TheMADFeed','madfeed' ); ?></p>
    </td>
  </tr>
<?php
}
add_action( 'contributors_edit_form_fields', 'madfeed_taxonomy_edit_meta_field', 10, 2 );

// Save extra taxonomy fields callback function.
function save_taxonomy_custom_meta( $term_id ) {
  if ( isset( $_POST['contributor_meta'] ) ) {
    $t_id = $term_id;
    $contributor_meta = get_option( "taxonomy_$t_id" );
    $cat_keys = array_keys( $_POST['contributor_meta'] );
    foreach ( $cat_keys as $key ) {
      if ( isset ( $_POST['contributor_meta'][$key] ) ) {
        $contributor_meta[$key] = $_POST['contributor_meta'][$key];
      }
    }
    // Save the option array.
    update_option( "taxonomy_$t_id", $contributor_meta );
  }
}  
add_action( 'edited_contributors', 'save_taxonomy_custom_meta', 10, 2 );  
add_action( 'create_contributors', 'save_taxonomy_custom_meta', 10, 2 );