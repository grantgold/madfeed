<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>

<section id="event">
<!-- 	<div class="container"> -->
		<div class="row">
			<?php loop(); ?>
		</div>
<!-- 	</div> -->
</section>

<section id="related-posts">
	<div class="container">
		<div class="row small-top-btm-padding">
			<div class="col-xs-12">
				<p class="section-title"><a href="<?php echo get_site_url(); ?>/event">More Events</a></p>
				<p class="view-all"><a href="<?php echo get_site_url(); ?>/event">View All</a></p>
				<div style="clear: both;"></div>
				<hr>
				<div class="row">
				<?php 
					$i = 1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'event',
						'posts_per_page' => 4,
						'paged' => $paged
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php
								get_template_part('content', 'events' ); // uses content-events.php
							
								if ($i % 2 == 0){
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
	</div>
</section>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>


<?php include('footer.php'); ?>