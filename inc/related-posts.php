<section id="related-posts">
	<div class="container">
		<div class="row small-top-btm-padding">
			<div class="col-xs-12">
				<div class="section-title"><h3>Related Posts</h3></div>
				<div style="clear: both;"></div>
				<hr>
				<div class="row">
				<?php 
					$do_not_duplicate[] = $post->ID;
					$i = 1;
					$tags = get_the_tags($post->ID);
					$args = array();
					if ($tags) {
					$tag_ids = array();
					foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
						$args=array(
						'post_type' => array('post','video'),
						'tag__in' => $tag_ids,
						'post__not_in' => array($post->ID),
						'post__not_in' => $do_not_duplicate,
						'orderby' => 'rand',
						'posts_per_page'=> 4, // Number of related posts that will be displayed.
						'caller_get_posts'=>1,
						'orderby'=>'rand' // Randomize the posts
						);
					}
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
						$secondargs=array(
						'post_type' => array('post','video'),
						'post__not_in' => array($post->ID),
						'post__not_in' => $do_not_duplicate,
						'orderby' => 'rand',
						'posts_per_page'=> 4, // Number of related posts that will be displayed.
						'caller_get_posts'=>1,
						'orderby'=>'rand' // Randomize the posts
						);
						$the_query = new WP_Query($secondargs);
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
						}else {}
					}
				?>
			</div>
			</div>
		</div>
	</div>
</section>