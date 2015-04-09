<?php 
/* Template Name: Read-and-Watch */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<div class="row hidden-xs">
</div>
<section>
	<?php 
		$do_not_duplicate = array();
		if ( !is_paged() ) { ?>
		
		<div id="blog" class="container">
			<div class="row small-top-btm-padding">
				<div class="col-xs-12">
					<?php 
						$args = array(
							'post_type' => array('post','video'),
							'category_name' => 'featured-post',
							'posts_per_page' => 1
						);
						$featured_query = new WP_Query($args);
						if ( $featured_query->have_posts() ) {
							while ( $featured_query->have_posts() ) {
								$featured_query->the_post(); $do_not_duplicate[] = $post->ID; $type = get_post_type( get_the_ID() );
								if ($type == 'post') {
									get_template_part('featured', 'post'); // uses content-posts.php
								} else {
									get_template_part('featured', 'video');  // uses content-videos.php
								}
							}

						} else {
							// get_template_part( 'content', 'none' );
						}
					?>
				</div>
			</div>
			<hr>
		</div>
	<?php } 

	if ( is_paged() ) { ?>
	<div id="page"></div>
	<?php } ?>
		
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php 
						$i = 1;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => array('post','video'),
							'paged' => $paged,
							'post__not_in' => $do_not_duplicate,
							'posts_per_page' => 24
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
						wp_reset_query();
					?>
				</div>
			</div>
			<div class="pull-right medium-top-btm-padding">
				<div class="navigation">
					<ul class="pagination">
						<li>
				<?php 
					$next_link = 'older&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>';
					$prev_link = '<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;newer';
					previous_posts_link($prev_link ,$the_query->max_num_pages); ?></li>
					<li><?php next_posts_link($next_link ,$the_query->max_num_pages); ?> </li>
					</ul>
				</div>
			</div>
	</div>
</section>
<section>
	<div class="row">
		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>

<?php include('footer.php'); ?>