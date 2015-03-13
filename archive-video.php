<?php 
/* Template Name: Videos */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>

<div class="visible-xs mobile-padding"></div>
<div class="row hidden-xs fadein">

	<?php include( INC . 'search-filter.php' ); ?>

</div>

<div class="container fadein">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
			<?php 
				$i = 1;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 8,
					'paged' => $paged
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
							get_template_part('content', 'videos' ); // uses content-videos.php
						
							if ($i % 4 == 0){
								echo "</div></div>";
								echo "<div class='row'><div class='col-xs-12'>";
							}

					$i++;
					}
				} else {
					// get_template_part( 'content', 'none' );
				}
				wp_reset_query();
			?>
		</div>
		</div>
	</div>
	<?php numeric_posts_nav($the_query); ?>
</div>

<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>