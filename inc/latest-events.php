<div class="container">
	<div class="col-xs-12">
		<div class="row">
		<p class="section-title"><a href="<?php echo get_site_url(); ?>/event">Symposiums &amp; Talks</a></p>
		<p class="view-all"><a href="<?php echo get_site_url(); ?>/event">View All Events</a></p>
		<div style="clear: both;"></div>
		<hr>
		<?php 
			$args = array(
				'post_type' => 'event',
				'post__not_in' => $do_not_duplicate,
				'posts_per_page' => 1
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
					<?php
						get_template_part('featured', 'event' ); // uses content-carousel.php
				}?>
				<?php

			} else {
				// get_template_part( 'content', 'none' );
			}
		?>
		</div>
	</div>
</div>

