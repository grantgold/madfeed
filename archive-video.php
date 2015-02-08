<?php 
/* Template Name: Videos */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>

<div class="hidden-sm hidden-md hidden-lg mobile-padding"></div>
<div class="row hidden-xs">

	<?php include( INC . 'search-filter.php' ); ?>

</div>

<div class="container fadein">
	<div class="row">
		<div class="col-xs-12">
			<?php 
				$i = 1;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 16,
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
			?>
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