<?php

function get_page_template_name(){
	if ( is_page() && $current_template = get_page_template_slug( get_queried_object_id() ) ){
    $templates = wp_get_theme()->get_page_templates();
    return $template_name = $templates[$current_template];
    return <<< EOF
    <h6 class="w_template_name">$template_name</h6>
EOF;
  }
}



// Gets the name of the current page template and makes it lowercase.
// For use as the ID of the 'main' sections
// Note: Page Templates should be named with this in mind
// 'Documents' not 'Documents and Pages'
function page_template_id(){
  if ( is_page() && $current_template = get_page_template_slug( get_queried_object_id() ) ){
    $templates = wp_get_theme()->get_page_templates();
    $template_name = strtolower($templates[$current_template]);
    echo $template_name;
  }
}

// Gets an array of page templates used in the theme
function page_templates(){
  return $templates = wp_get_theme()->get_page_templates();
}

function page_templates_list(){
  $templates = page_templates();
  foreach ($templates as $t) {
    echo <<< EOF
    <li><a href="#">$t</a></li>
EOF;
  }
}

function page_hed(){
  $template_name = get_page_template_name();
  $title = get_the_title( $ID );
  echo <<< EOF
  <div class="row">
    <div class="col-xs-12">
      <div class="whed">
        <h6 class="w_template_name">$template_name</h6>
        <h1>$title</h1>
      </div>
    </div>
  </div>
EOF;
}


// lists out all the Pages by custom page template type
// excludes the pages that are not assigned a custom page template
function pages_by_template(){
  $templates = page_templates();
  foreach ($templates as $f => $t) {
    $pages = get_pages(array(
      'meta_key' => '_wp_page_template',
      'meta_value' => $f
    ));
    if (!empty($pages)) {
      echo '<div><h6>' . $t .'</h6>';
      foreach($pages as $page){
        $permalink = get_permalink( $page->ID );
        echo <<< EOF
        <h5><a href="$permalink">$page->post_title</a></h5>
EOF;
      }
      echo '</div>';
    }
  }
}


?>