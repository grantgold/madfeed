<?php
add_action( 'add_meta_boxes', 'event_date_add' );
function event_date_add() {
  $types = array( 'event' );

  foreach( $types as $type ) {
    add_meta_box( 'event-date-id', 'Event Date', 'event_date', $type, 'normal', 'high' );
  }
}

function event_date( $post ) {
  $values = get_post_custom( $post->ID );
  $url = isset( $values['event_date_url'] ) ? esc_attr( $values['event_date_url'][0] ) : '';
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );?>

  <style type="text/css" media="screen">
    #event_date_box{}
    #event_date_box label,
    #event_date_box input,
    #event_date_box small{}
    #event_date_box label{
      padding:0 2px;
    }
    #event_date_url{
      width:100%;
    }
    #event_date_box small{
      padding:0 3px;
      color:#999;
    }
  </style>
  <div id="event_date_box">
    <p>
      <label for="event_date_url">Event Date</label><br />
      <input type="text" name="event_date_url" id="event_date_url" value="<?php echo $url; ?>" /><br />
      <small>e.g. August 24-25, 2015</small>
    </p>
  </div>
  
  <?php }

add_action( 'save_post', 'cd_event_date_save' );
function cd_event_date_save( $post_id ) {
  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  
  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
  
  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post', $post_id ) ) return;
  
  // now we can actually save the data
  $allowed = array( 
    'a' => array( // on allow a tags
      'href' => array() // and those anchords can only have href attribute
    )
  );
  
  // Probably a good idea to make sure your data is set
  if( isset( $_POST['event_date_url'] ) )
    update_post_meta( $post_id, 'event_date_url', wp_kses( $_POST['event_date_url'], $allowed ));
} 

add_action( 'add_meta_boxes', 'event_location_add' );
function event_location_add() {
  $types = array( 'event' );

  foreach( $types as $type ) {
    add_meta_box( 'event-location-id', 'Event Location', 'event_location', $type, 'normal', 'high' );
  }
}

function event_location( $post ) {
  $values = get_post_custom( $post->ID );
  $url = isset( $values['event_location_url'] ) ? esc_attr( $values['event_location_url'][0] ) : '';
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );?>

  <style type="text/css" media="screen">
    #event_location_box{}
    #event_location_box label,
    #event_location_box input,
    #event_location_box small{}
    #event_location_box label{
      padding:0 2px;
    }
    #event_location_url{
      width:100%;
    }
    #event_location_box small{
      padding:0 3px;
      color:#999;
    }
  </style>
  <div id="event_location_box">
    <p>
      <label for="event_location_url">Event Location</label><br />
      <input type="text" name="event_location_url" id="event_location_url" value="<?php echo $url; ?>" /><br />
      <small>e.g. Refshaleøen, Copenhagen</small>
    </p>
  </div>
  
  <?php }

add_action( 'save_post', 'cd_event_location_save' );
function cd_event_location_save( $post_id ) {
  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  
  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
  
  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post', $post_id ) ) return;
  
  // now we can actually save the data
  $allowed = array( 
    'a' => array( // on allow a tags
      'href' => array() // and those anchords can only have href attribute
    )
  );
  
  // Probably a good idea to make sure your data is set
  if( isset( $_POST['event_location_url'] ) )
    update_post_meta( $post_id, 'event_location_url', wp_kses( $_POST['event_location_url'], $allowed ));
}