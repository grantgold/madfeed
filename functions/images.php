<?php

// These are the additional image sizes that will be cut when adding an image to WP

// add_image_size('NAME', WIDTH, HEIGHT, true/false CONSTRAIN PROPORTIONS );

add_image_size('w75', 75, 75, true ); // 75 pixels wide x 75 pixels tall
add_image_size('w480', 480, 360, true );
add_image_size('w640', 640, 480, true );
add_image_size('w1024', 1024, 768, true );
add_image_size('w1280', 1280, 960, true );


// These are the sizes that show up in the Admin
$madfeed_imgsizes = array(
  "w75" => __("Thumb (75)"),
  "w480" => __("Standard (480)"),
  "w640" => __("Featured (640)"),
  "w1024" => __("Large (1024)"),
  "w1280" => __("Fullscreen (1280)")
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


function madfeed_get_featured_image($size){
	global $post;
	if ( has_post_thumbnail() ) {
		$thumb = get_the_post_thumbnail( $post->ID, $size);
		$thumb = preg_replace( '/(width|height)="\d*"\s/', "", $thumb ); // Removes height & width
		$thumb = str_replace( 'class="', 'class="img-responsive ', $thumb );
		if (is_single()) {
			echo '<div class="feature-image photo '.$size.'">' . $thumb . '</div>';
		} else {
			echo '<div class="feature-image photo '.$size.'"><a href="' . get_permalink() . '">' . $thumb . '</a></div>';
		}
		
	}
}

function madfeed_get_social_image() {
  global $post;
  if ( has_post_thumbnail() ) {
    $thumb = get_the_post_thumbnail( $post->ID, 'large' );
    $str = array('<img src="', '"' );
    $preg = array('/class="[\s\S]+"\s/', '/(width|height)="\d*"\s/', '/alt="[\s\S]+"\s/' );
    $thumb = preg_replace( $preg, '', $thumb );
    $thumb = str_replace( $str, '', $thumb );
    print_r($thumb);
  }
}

add_filter('embed_oembed_html', 'wrap_embed_with_div', 10, 4);
add_filter('video_embed_html', 'wrap_embed_with_div' );

function wrap_embed_with_div($html, $url, $attr, $post_id) {
  $return = '<div class="video-container">' . $html . '</div>';
  return $return;
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
    return '<div class="photo w'.(0 + (int) $width).'">' . $img . '</div><br>';
  } else if ($width < 280) {
    '<div class="row"><div class="pull-left photo w'.(0 + (int) $width).'">' . $img . '</div></div><br>';
  } else { // all other images
    return '<div class="row photo-caption"><div class="hidden-xs col-sm-2"><div class="caption">' . $caption . '</div></div><div class="col-xs-12 col-sm-10"><div class="photo w'.(0 + (int) $width).'">' . $img . '</div></div><div class="visible-xs col-xs-12"><div class="caption">' . $caption . '</div></div></div><br>';
  }
}
add_filter('img_caption_shortcode', 'new_img_shortcode_filter', 10, 3);


?>