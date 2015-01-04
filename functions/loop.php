<?php

function loop(){
	$i = 0;
	$type = '';
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<?php
				if (empty($type)) {
					get_template_part('content', get_post_format() );
				} else {
					get_template_part('content', $type );
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
