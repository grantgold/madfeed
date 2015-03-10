<?php 
/* Template Name: Contributors */
?>
<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>
<div class="container fadein">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
				<?php 
					$i = 1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => array('post','video'),
						'posts_per_page' => 24,
						'paged' => $paged
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php
								get_template_part('content', 'contributors' ); // uses content-contributors.php
							
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
	</div>
	<?php numeric_posts_nav($the_query); ?>
</div>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>