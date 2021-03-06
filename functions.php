<?php 
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once 'functions/wp_enqueue_script.php';
include_once 'functions/loop.php';
include_once 'functions/videos.php';
include_once 'functions/events.php';
include_once 'functions/event.php';
include_once 'functions/quotes.php';
include_once 'functions/contributors.php';
include_once 'functions/related-video.php';
include_once 'functions/event-details.php';

// include_once 'functions/beta.php';

include_once 'functions/images.php';

// Variables
$tdir = get_template_directory_uri();
define('TDIR', $tdir);

$theme = get_template_directory_uri();
define('THEME', $theme);

$root = get_template_directory();
define('ROOT', $root);

// Includes Path
$inc = $root . '/inc/';
define('INC', $inc);


// Hide WP Admin Bar
add_filter('show_admin_bar', '__return_false');

// Adds Post Formats
// add_theme_support( 'post-formats', array( 'aside', 'gallery', 'image',  'video', 'audio', 'chat', 'status', 'quote', 'link') );





if (!is_admin()) {
  // If Logged In, Add DRAFTS to Query
  if ( is_user_logged_in() ) {
    add_action( 'pre_get_posts', 'add_my_post_status_to_query' );
    function add_my_post_status_to_query( $query ) {
      if ( is_home() && $query->is_main_query() || is_feed())
        $query->set(
          'post_status', array('publish', 'pending', 'draft', 'future', 'private', 'inherit')
        );
      return $query;
    }
  }
}



// Entry Meta
if ( ! function_exists( 'madfeed_entry_meta' ) ) :
function madfeed_entry_meta($id) {
  $author = get_the_author();
  $author_user = get_the_author_meta( 'user_login' );
  $author_link = get_author_posts_url(get_the_author_meta( 'ID' ));
  echo '<span class="author_img"><img class="hidden" src="'.TDIR.'/img/team/'.$author_user.'.png" alt="'.$author.'"> By '.$author.' | ';

  madfeed_entry_date();

  if ( is_user_logged_in() ) {
    $edit = get_edit_post_link($id);
    echo ' | <a href="'.$edit.'" class="">edit</a>';
  }

  if (is_single()){
    // Translators: used between list items, there is a space after the comma.
    $tag_list = get_the_tag_list( '', __( ', ', 'twentythirteen' ) );
    if ( $tag_list ) {
      echo ' <span class="tags-links pull-right">' . $tag_list . '</span>';
    }
  }
}
endif;

function madfeed_quote(){
  $content = get_the_content();
  $content = apply_filters('the_content', $content);
  $content = str_replace(']]>', ']]>', $content);
  echo $content;
}

function madfeed_short_title(){
  $thetitle = get_the_title();
  $getlength = strlen($thetitle);
  $thelength = 48;
  echo substr($thetitle, 0, $thelength);
  if ($getlength > $thelength) echo "...";
}

// CATEGORY
function madfeed_category(){
  if (!is_category()) {
    foreach((get_the_category()) as $category) {
      if ($category->cat_name !== 'Uncategorized') {
        echo ' <a href="' . get_category_link( $category->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $category->name ) . '" ' . '>' . $category->name.'</a> ';
      }
    }
  }
}

// DATE
if ( ! function_exists( 'madfeed_entry_date' ) ) :
function madfeed_entry_date( $echo = true ) {
  $date = '<a class="date" href="'.get_permalink().'" title="'.the_title_attribute( 'echo=0' ).'" rel="bookmark"><time class="dt-published published entry-date rel_time" datetime="'.get_the_date('c').'"><span>'.get_the_time('F j, Y g:i a').'</span></time></a>';
  echo $date;
  return $date;
}
endif;

function madfeed_get_event(){
  $post_id = get_the_ID();
  $terms = get_the_terms( $post_id, 'events' );
  return $terms;
}

function madfeed_event_date(){
  $terms = madfeed_get_event();
  if ($terms && ! is_wp_error( $terms ) ) {
    foreach ($terms as $term) {
      $name = $term->name;
      if ($name) {
        echo $name;  
      } else return;
    }
  } else {
    return;
  }
}

function madfeed_get_contributors(){
  $post_id = get_the_ID();
  $terms = get_the_terms( $post_id, 'contributors' );
  return $terms;
}

function madfeed_featured_speaker(){
  $terms = madfeed_get_contributors();
  $i = 1;
  if ($terms && ! is_wp_error( $terms ) ) {
    foreach ($terms as $term) {
      $name = $term->name;
      $image = get_field('profile_image', $term);
      $bio = get_field('bio', $term);

      $featured_speaker = '<div class="col-xs-6 col-sm-3 medium-top-btm-padding"><div><img src="'.$image.'"></div><div><b>'.$name.'</b></div><p class="byline">'.$bio.'</p></div>';
      echo $featured_speaker;
      if ($i % 4 == 0){
          echo "</div></div></div>";
          echo "<div class='row'><div class='contributor'><div class='col-xs-12'>";
        }
      $i++;
    }
  } else {
    return;
  }
}

function madfeed_contributors_name(){
  $terms = madfeed_get_contributors();
  if ($terms && ! is_wp_error( $terms ) ) {
    $contributor_names = array();
    foreach ($terms as $term) {
      $name = $term->name;
      $contributor_names[] = $name; 
    }
    $contributors = join( "<br><br>", $contributor_names );
    return $contributors;
  } else {
    return;
  }
}

function madfeed_contributor_name(){
  $terms = madfeed_get_contributors();
  if ($terms && ! is_wp_error( $terms ) ) {
    $contributor_names = array();
    foreach ($terms as $term) {
      $name = $term->name;
      $contributor_names[] = $name; 
    }
    return $contributor_names[0];
  } else {
    return;
  }
}

function madfeed_contributors_bio(){
  $terms = madfeed_get_contributors();
  if ($terms && ! is_wp_error( $terms ) ) {
    foreach ($terms as $term) {
      $bio = get_field('bio', $term);
      if ($bio) {
        echo $bio;  
      } else continue;
    }
  } else {
    return;
  }
}

function madfeed_contributors_twitter(){
  $terms = madfeed_get_contributors();
  if ($terms && ! is_wp_error( $terms ) ) {
    $contributor_twitters = array();
    foreach ($terms as $term) {
      $twitter = get_field('twitter_name', $term);
      if ($twitter) {
        $contributor_twitters[] = '<a class="twitter-name" href="http://twitter.com/'. $twitter .'">&#64;' . $twitter . '</a>';  
      }
      $twitters = join( "<br><br>", $contributor_twitters );
      return $twitters;
    }
  } else {
    return;
  }
}

// get contributors terms with images
function madfeed_contributors_image(){
  $terms = madfeed_get_contributors();
  if ( $terms && ! is_wp_error( $terms ) ) : 
    foreach ( $terms as $term ) {
      $image = get_field('profile_image', $term);
      if ($image) {
        return '<img src="'.$image.'"/>';
      } else {
        return;
      }
    }  
endif;
}

// The Excerpt
function entry_excerpt(){
  $e = get_the_excerpt() . ' <p><a class="more" href="'. get_permalink( get_the_ID() ) . '">Read&nbsp;More</a></p>';
  echo $e;
}

function new_excerpt_more( $more ) {
  return '';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );


function custom_excerpt_length( $length ) {
  return 35;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );


// Add Featured Image
add_theme_support( 'post-thumbnails' ); 

// Get the Vimeo ID
function vimeo_id(){
  $id = get_post_meta( get_the_ID(), 'related_video_url', true );
  return $id;
}

function get_event_date(){
  $date = get_post_meta( get_the_ID(), 'event_date_url', true );
  return $date;
}

function get_event_location(){
  $location = get_post_meta( get_the_ID(), 'event_location_url', true );
  return $location;
}

function numeric_posts_nav($the_query) {
  if( is_singular() )
    return;

  /** Stop execution if there's only 1 page */
  if( $the_query->max_num_pages <= 1 )
    return;
  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
  $max   = intval( $the_query->max_num_pages );

  /** Add current page to the array */
  if ( $paged >= 1 )
    $links[] = $paged;

  /** Add the pages around the current page to the array */
  if ( $paged >= 3 ) {
    $links[] = $paged - 1;
    $links[] = $paged - 2;
  }

  if ( ( $paged + 2 ) <= $max ) {
    $links[] = $paged + 2;
    $links[] = $paged + 1;
  }

  echo '<div class="navigation"><ul class="pagination">' . "\n";

  /** Previous Post Link */
  if ( get_previous_posts_link() )
    printf( '<li>%s</li>' . "\n", get_previous_posts_link() );

  /** Link to first page, plus ellipses if necessary */
  if ( ! in_array( 1, $links ) ) {
    $class = 1 == $paged ? ' class="active"' : '';

    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

    if ( ! in_array( 2, $links ) )
      echo '<li>…</li>';
  }

  /** Link to current page, plus 2 pages in either direction if necessary */
  sort( $links );
  foreach ( (array) $links as $link ) {
    $class = $paged == $link ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
  }

  /** Link to last page, plus ellipses if necessary */
  if ( ! in_array( $max, $links ) ) {
    if ( ! in_array( $max - 1, $links ) )
      echo '<li>…</li>' . "\n";

    $class = $paged == $max ? ' class="active"' : '';
    printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
  }

  /** Next Post Link */
  if ( get_next_posts_link() )
    printf( '<li>%s</li>' . "\n", get_next_posts_link() );

  echo '</ul></div>' . "\n";

}

// Debugging Notes
// echo INC;
// print_r(INC);