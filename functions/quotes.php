<?php
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Quotes",
		"singular_name" => "Quote",
		);

	$args = array(
		"labels" => $labels,
		"description" => "Quote for display in random feed on homepage.",
		"public" => true,
		"show_ui" => true,
		"has_archive" => false,
		"show_in_menu" => true,
		"exclude_from_search" => true,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "quote", "with_front" => true ),
		"query_var" => true,
						"supports" => array( "editor" ),		"taxonomies" => array( "contributors" )	);
	register_post_type( "quote", $args );

// End of cptui_register_my_cpts()
}
?>