<section id="related-posts">
	<div class="container">
		<div class="row small-top-btm-padding">
			<div class="col-xs-12">
				<div class="section-title"><h3>Related Posts</h3></div>
				<div style="clear: both;"></div>
				<hr>
				<?php 
					$i = 1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 4,
						'paged' => $paged
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
</section>