<?php include('header.php'); ?>

<div class="row hidden-xs">

	<?php include( 'INC' . '/search-filter.php' ); ?>

</div>

<div class="container">

	<div class="row">
	<div class="col-xs-12">

	<?php include( 'INC' . '/latest-reads.php' ); ?>
	<?php include( 'INC' . '/latest-reads.php' ); ?>
	<?php include( 'INC' . '/latest-reads.php' ); ?>
	<?php include( 'INC' . '/latest-reads.php' ); ?>

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