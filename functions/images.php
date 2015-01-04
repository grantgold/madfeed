<?php
// This sets the 3 different DEFAULT WordPress sizes to the 3 sizes that best fit in the posts and pages

// Add filters here
// update_option('thumbnail_size_w', 75);
// update_option('thumbnail_size_h', 75);
// update_option('thumbnail_crop', 1);

// update_option('medium_size_w', 214);
// update_option('medium_size_h', 9999);
// update_option('medium_crop', 0);

// update_option('large_size_w', 900);
// update_option('large_size_h', 9999);
// update_option('large_crop', 0);

// These are the additional image sizes that will be cut when adding an image to WP
// add_image_size('w50', 50, 50, true );         // 50 pixels wide x 50 pixels tall
add_image_size('w75', 75, 75, true );        // 75 pixels wide x 75 pixels tall
add_image_size('w163', 163, 9999, false );    //163 pixels wide (and unlimited height)
// add_image_size('w214', 214, 9999, false );    //214 pixels wide (and unlimited height)
add_image_size('w376', 376, 9999, false);     //376 pixels wide (and unlimited height)
add_image_size('w610', 610, 9999, false);     //600 pixels wide (and unlimited height)
add_image_size('w770', 770, 9999, false);     //600 pixels wide (and unlimited height)
add_image_size('w1024', 1024, 9999, false);     //600 pixels wide (and unlimited height)

// These are the sizes that show up in the Admin
$psfc_imgsizes = array(
  "w75S" => __("Thumb (75)"),
  "w163" => __("Wide Thumb (w163)"),
  // "w214" => __("Small (w214)"),
  "w376" => __("Medium (w376)"),
  "w600" => __("Large Fit (w610)"),
  "w770" => __("Large Wide (w770)"),
  "w1024" => __("Jumbo (w1024)")
);

function custom_image_sizes($sizes) {
  global $psfc_imgsizes;
  $newimgsizes = array_merge($sizes, $psfc_imgsizes);
  return $newimgsizes;
}
add_filter('image_size_names_choose', 'custom_image_sizes');

// add_image_size( 'homepage-thumb', 280, 180, true ); //(cropped)







// // Automatically set the featured image when there is an image in the post
function wpforce_featured() {
	global $post;
	$already_has_thumb = has_post_thumbnail($post->ID);
	if (!$already_has_thumb)  {
		$attached_image = get_children( "post_parent=$post->ID&post_type=attachment&post_mime_type=image&numberposts=1" );
		if ($attached_image) {
			foreach ($attached_image as $attachment_id => $attachment) {
				set_post_thumbnail($post->ID, $attachment_id);
			}
		}
	}
}  //end function
add_action('the_post', 'wpforce_featured');
add_action('save_post', 'wpforce_featured');
add_action('draft_to_publish', 'wpforce_featured');
add_action('new_to_publish', 'wpforce_featured');
add_action('pending_to_publish', 'wpforce_featured');
add_action('future_to_publish', 'wpforce_featured');





function psfc_get_featured_image($size){
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