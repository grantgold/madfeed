<?php

// These are the additional image sizes that will be cut when adding an image to WP

// add_image_size('NAME', WIDTH, HEIGHT, true/false CONSTRAIN PROPORTIONS );

add_image_size('w75', 75, 75, true ); // 75 pixels wide x 75 pixels tall



// These are the sizes that show up in the Admin
$madfeed_imgsizes = array(
  "w75S" => __("Thumb (75)")
);

function madfeed_custom_image_choose( $args ) {
  global $_wp_additional_image_sizes;
  // make the names human friendly by removing dashes and capitalising
  foreach( $_wp_additional_image_sizes as $key => $value ) {
    $custom[ $key ] = ucwords( str_replace( '-', ' ', $key ) );
  }
  return array_merge( $args, $custom );
}
add_filter( 'image_size_names_choose', 'madfeed_custom_image_choose' );






// // Automatically set the featured image when there is an image in the post
// function wpforce_featured() {
// 	global $post;
//   if (!empty($post->ID)) {
//     $already_has_thumb = has_post_thumbnail($post->ID);
//     if (!$already_has_thumb)  {
//       $attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
//       if ($attached_image) {
//         foreach ($attached_image as $attachment_id => $attachment) {
//           set_post_thumbnail($post->ID, $attachment_id);
//         }
//       }
//     }
//   }
// }  //end function
// add_action('the_post', 'wpforce_featured');
// add_action('save_post', 'wpforce_featured');
// add_action('draft_to_publish', 'wpforce_featured');
// add_action('new_to_publish', 'wpforce_featured');
// add_action('pending_to_publish', 'wpforce_featured');
// add_action('future_to_publish', 'wpforce_featured');


function madfeed_get_featured_image($size){
	global $post;
	if ( has_post_thumbnail() ) {
		$thumb = get_the_post_thumbnail( $post->ID, $size);
		$thumb = preg_replace( '/(width|height)="\d*"\s/', "", $thumb ); // Removes height & width
		$thumb = str_replace( 'class="', 'class="img-responsive ', $thumb );
		if (is_single()) {
			echo '<div class="photo '.$size.'">' . $thumb . '</div>';
		} else {
			echo '<div class="photo '.$size.'"><a href="' . get_permalink() . '">' . $thumb . '</a></div>';
		}
		
	}
}



// // Controls the Image HTML by modifying the WordPress Image shortcode.
// // http://codex.wordpress.org/Function_Reference/add_filter
function new_img_shortcode_filter($val, $attr, $content = null) {

	extract(shortcode_atts(array(
		'id'	=> '',
		'align'	=> '',
		'width'	=> '',
		'caption' => '',
		'src' => ''
	), $attr));
  
  $find = 'attachment_';
  $cust_id = str_replace($find, '', $id);
  $post_custom = get_post_custom($cust_id);
  // $isrc = $src;
  
  // if ( 1 > (int) $width || empty($caption) ) {
  //   return $val;
  // }

	$capid = '';
	if ( $id ) {
		$id = esc_attr($id);
		$capid = 'id="figcaption_'. $id . '" ';
		$id = 'id="' . $id . '"';
	}

  
  $raw = do_shortcode( $content );
  $img = preg_replace( '/(width|height)="\d*"\s/', "", $raw); // Removes Height and Width from images
  $img = str_replace('class="', 'class="img-responsive ', $img); // adds in the .img-responsive class to all images
  if ($width == 75 || $width == 163 ) { // if image doesn't need a caption
    return '<div class="photo w'.(0 + (int) $width).'">' . $img . '</div>';
  } else { // all other images
    return '<div class="photo w'.(0 + (int) $width).'">' . $img . '<p class="caption">' . $caption . '</p></div>';
  }
}
add_filter('img_caption_shortcode', 'new_img_shortcode_filter',10,3);


?>