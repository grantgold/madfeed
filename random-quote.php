<div class="container">
	<div class="col-xs-12 medium-top-btm-padding">
		<div class="row">
			<?php 
				$i = 1;
				$args = array(
					'post_type' => 'quote',
					'posts_per_page' => 1,
					'orderby' => 'rand',
					'tax_query' => array('relation' => 'AND',
											array(
											'taxonomy' => 'contributors',
											'field'    => 'name',
											'terms'    => array( 'mad' ),
											'operator' => 'NOT IN'
											),
										),
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
						$type = get_post_type( get_the_ID() );


						get_template_part('content', 'quote' ); // uses content-contributors.php
						
							if ($i % 4 == 0){
								echo "</div></div>";
								echo "<div class='row'><div class='col-xs-12'>";
							}

					$i++;
					}
				} else {
					// get_template_part( 'content' );
				}
			?>

		</div>
	</div>
</div>