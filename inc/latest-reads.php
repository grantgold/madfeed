<div class="container">
	
	<div class="row">
	<div class="col-xs-12">

		<p class="section-title"><a href="<?php echo get_site_url(); ?>/reads">Latest Reads</a></p>
		<p class="view-all"><a href="<?php echo get_site_url(); ?>/reads">View All</a></p>
		<div style="clear: both;"></div>
		<hr>

	<?php 
			$i = 1;
			$args = array(
				'post_type' => 'post',
				'posts_per_page' => 8,
			);
			$the_query = new WP_Query($args);
			if ( $the_query->have_posts() ) {
				while ( $the_query->have_posts() ) {
					$the_query->the_post(); ?>
					<?php
						get_template_part('content', 'posts' ); // uses content-posts.php
					
						if ($i % 4 == 0){
							echo "</div></div>";
							echo "<div class='row'><div class='col-xs-12'>";
						}

				$i++;
				}
			} else {
				get_template_part( 'content' );
			}
		?>
	</div>
	</div>

</div>