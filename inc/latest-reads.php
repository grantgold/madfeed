<div class="container">
	<div class="col-xs-12">
		<p class="section-title hidden-xs"><a href="<?php echo get_site_url(); ?>/read-and-watch">Latest Reads &amp; Talks</a></p>
		<form role="search" method="get" class="search-form pull-right" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="search-field field form-control small-search" placeholder="<?php echo esc_attr_x( 'Search the archive', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
		</form>
		<!-- <p class="view-all hidden-xs"><a href="<?php echo get_site_url(); ?>/read-and-watch">View All</a></p> -->
		<div style="clear: both;"></div>
		<hr class="hidden-xs">
		<div class="row">
			<?php 
				$i = 1;
				$args = array(
					'post_type' => array('post','video'),
					'post__not_in' => $do_not_duplicate,
					'posts_per_page' => 12,
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
						$type = get_post_type( get_the_ID() );
							if ($type == 'post') {
								get_template_part('content', 'posts'); // uses content-posts.php
							} else {
								get_template_part('content', 'videos');  // uses content-videos.php
							}
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