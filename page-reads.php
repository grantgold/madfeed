<?php 
/* Template Name: Reads */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<div class="row hidden-xs">
</div>
<section>
	<div id="blog" class="container">
		<div class="row small-top-btm-padding">
			<div class="col-xs-12">
				<?php 
					$args = array(
						'post_type' => 'post',
						'posts_per_page' => 1
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php
								get_template_part('featured', 'post' ); // uses content-carousel.php
						}?>
						<?php

					} else {
						// get_template_part( 'content', 'none' );
					}
				?>
			</div>
		</div>
	</div>
<!-- 	<?php include( INC . 'filter-posts.php' ); ?> -->
	<div class="container">
		<div class="row">
		<div class="col-xs-12">
			<hr>
		<?php 
				$i = 1;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 16,
					'offset' => 1,
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
<section>
	<div class="row">
		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>

<?php include('footer.php'); ?>