<?php
add_action( 'add_meta_boxes', 'related_video_add' );
function related_video_add() {
  add_meta_box( 'related-video-id', 'Related Video', 'related_video', 'video', 'normal', 'high' );
}

function related_video( $post ) {
  $values = get_post_custom( $post->ID );
  $url = isset( $values['related_video_url'] ) ? esc_attr( $values['related_video_url'][0] ) : '';
  wp_nonce_field( 'my_meta_box_nonce', 'meta_box_nonce' );?>

  <style type="text/css" media="screen">
    #related_video_box{}
    #related_video_box label,
    #related_video_box input,
    #related_video_box small{}
    #related_video_box small strong{
      background: yellow;
    }
    #related_video_box label{
      padding:0 2px;
    }
    #related_video_url{
      width:100%;
    }
    #related_video_box small{
      padding:0 3px;
      color:#999;
    }
  </style>
  <div id="related_video_box">
    <p>
      <label for="related_video_url">Vimeo ID</label><br />
      <input type="text" name="related_video_url" id="related_video_url" value="<?php echo $url; ?>" /><br />
      <small>e.g. http://vimeo.com/<strong>114680357</strong></small>
    </p>
  </div><!-- #related_video_box -->
  
  <?php }

add_action( 'save_post', 'cd_meta_box_save' );
function cd_meta_box_save( $post_id ) {
  // Bail if we're doing an auto save
  if( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
  
  // if our nonce isn't there, or we can't verify it, bail
  if( !isset( $_POST['meta_box_nonce'] ) || !wp_verify_nonce( $_POST['meta_box_nonce'], 'my_meta_box_nonce' ) ) return;
  
  // if our current user can't edit this post, bail
  if( !current_user_can( 'edit_post' ) ) return;
  
  // now we can actually save the data
  $allowed = array( 
    'a' => array( // on allow a tags
      'href' => array() // and those anchords can only have href attribute
    )
  );
  
  // Probably a good idea to make sure your data is set
  if( isset( $_POST['related_video_url'] ) )
    update_post_meta( $post_id, 'related_video_url', wp_kses( $_POST['related_video_url'], $allowed ));
}