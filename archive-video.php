<?php include('header.php'); ?>

<div class="row hidden-xs">

	<?php include( INC . '/search-filter.php' ); ?>

</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<?php 
				$i = 1;
				if (have_posts()) {
					while (have_posts()) {
						the_post(); ?>
						<?php
							get_template_part('content', 'videos' ); // uses content-videos.php
						
							if ($i % 4 == 0){
								echo "</div></div>";
								echo "<div class='row'><div class='col-xs-12'>";
							}

					$i++;
					}
					// include TDIR . '/nextprev.php';
				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
		</div>
	</div>
</div>

<div class="container">

	<?php include( 'INC' . '/pagination.php' ); ?>

</div>

<section>
	<div class="row">

		<?php include( 'INC' . '/about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>