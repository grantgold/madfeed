<div class="container">
	<div class="col-xs-12">
		<div class="row">
		<p class="section-title"><a href="<?php echo get_site_url(); ?>/event">Symposiums &amp; Talks</a></p>
		<p class="view-all"><a href="<?php echo get_site_url(); ?>/event">View All Events</a></p>
		<div style="clear: both;"></div>
		<hr>
			<?php 
				$i = 1;
				$args = array(
					'post_type' => 'event',
					'posts_per_page' => 1
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<div class="row">
							<div class="col-xs-12 col-md-6">
									<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
							</div>
							<div class="col-xs-12 col-md-6">
								<p class="subtitle"><?php echo get_event_location() ?></p>
								<h2 class="featured-event"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
								<p><?php echo get_event_date() ?></p>
								<?php the_excerpt(); ?>
								<!-- <a class="btn btn-primary" ref="#">Sign Up <i class="fa fa-angle-right"></i></a> -->
							</div>
						</div>
						<?php
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
</div>

