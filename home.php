<?php 
	// This is the HOMEPAGE
?>

<?php include('header.php'); ?>

<?php include( INC . 'navbar.php' ); ?>

<section class="hidden-xs">
	<div class="container">
		<div class="row">
			<?php include( INC . 'topics.php' ); ?>
		</div>
	</div>
	<div class="row">

		<?php include( INC . 'carousel.php' ); ?>

	</div>
</section>
<section>
	<div class="container">
		
		<div class="row">
		<div class="col-xs-12">

			<p class="section-title">Latest Reads</p>
			<p class="view-all"><a href="#">View All</a></p>
			<div style="clear: both;"></div>
			<hr>

		<?php include( INC . 'latest-reads.php' ); ?>
		<?php include( INC . 'latest-reads.php' ); ?>
		</div>
		</div>

	</div>
</section>
<section>
	<div class="container large-top-btm-padding">

		<?php include( INC . 'latest-event.php' ); ?>

	</div>
</section>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>


<?php include('footer.php'); ?>
