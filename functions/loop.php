<?php

function loop(){
	$i = 0;
	if (have_posts()) {
		while (have_posts()) {
			the_post(); ?>
			<?php
				get_template_part('content');
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
