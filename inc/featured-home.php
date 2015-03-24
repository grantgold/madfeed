<div class="container">
	<div class="row small-top-btm-padding">
		<div class="col-xs-12">
			<?php 
				$do_not_duplicate = array();
				$args = array(
					'post_type' => array('post','video', 'event'),
					'category_name' => 'featured-home',
					'posts_per_page' => 1
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); $do_not_duplicate[] = $post->ID; $type = get_post_type( get_the_ID() );
						if ($type == 'post') {
							get_template_part('featured', 'post'); // uses content-posts.php
						} else if ($type == 'video') {
							get_template_part('featured', 'video');  // uses content-videos.php
						} else {
							get_template_part('featured', 'event');
						}
					}

				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
		</div>
	</div>
</div>