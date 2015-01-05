<?php

function loop(){
	$i = 0;
	$type = get_post_type( get_the_ID() );
	// echo $type;
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<?php
				if (is_post_type_archive('video')) {
					get_template_part('content', 'videos' ); // uses content-videos.php
				} else if ($type == 'page' || $type == 'post') {
					get_template_part('content');  // uses content.php
				} else {
					get_template_part('content', $type ); // uses content-TYPE.php
				}
			?>
		<?php
		$i++;
		}
		// include TDIR . '/nextprev.php';
	} else {
		// get_template_part( 'content', 'none' );
	}
}

?>
