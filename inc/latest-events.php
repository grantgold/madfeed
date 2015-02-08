<div class="container">
	<div class="row">
		<div class="col-xs-12">

			<p class="section-title"><a href="<?php echo get_site_url(); ?>/event">Symposiums &amp; Talks</a></p>
			<p class="view-all"><a href="<?php echo get_site_url(); ?>/event">View All Events</a></p>
			<div style="clear: both;"></div>
			<hr>
		</div>
		<?php 
			$i = 1;
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$args = array(
				'post_type' => 'event',
				'posts_per_page' => 1,
				'paged' => $paged
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
					<?php
						get_template_part('latest', 'event' ); // uses latest-event.php
					
						if ($i % 4 == 0){
							echo "</div></div>";
							echo "<div class='row'><div class='col-xs-12'>";
						}

				$i++;
				}
			} else {
				// get_template_part( 'content', 'none' );
			}
		?>
	</div>
</div>

