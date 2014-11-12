<?php 

ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);

// This File stores all of your funcitons.
// It should be included on your header.php file.



// Include Path
// All template files go in the /INC/ folder. 
// Use this to call those files —
// include_once( INC . 'filename.php' );
$inc = $_SERVER["DOCUMENT_ROOT"] . $_SERVER["REQUEST_URI"] . 'inc/';
define('INC', $inc);



function grant(){
	$grant = 'Grant Gold';
	echo $grant;
}

function get_grant(){
	$grant = 'Grant Gold';
	return $grant;
}


?>