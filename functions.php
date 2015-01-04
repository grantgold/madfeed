<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

include_once 'functions/wp_enqueue_script.php';

include_once 'functions/beta.php';
include_once 'functions/loop.php';
// include_once 'functions/images.php';
// include_once 'functions/related-link.php';
// include_once 'functions/kicker.php';

include_once 'functions/videos.php';



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



// Debugging Notes
// echo INC;
// print_r(INC);




?>