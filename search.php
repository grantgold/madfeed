<?php 
/* Template Name: Search Results */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<section>
<div class="search-padding"></div>
	<?php 
	get_search_form( 'true' );
	if ( is_paged() ) { ?>
	<div id="page"></div>
	<?php } ?>
<?php include( INC . 'tag-list.php' ); ?>
		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<?php 

						$i = 1;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$args = array(
							'post_type' => array('post','video'),
							's' => get_search_query(),
							'paged' => $paged,
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
							include( INC . 'no-results.php' );
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
							<li><?php next_posts_link($next_link ,$the_query->max_num_pages); ?> 
						</li>
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