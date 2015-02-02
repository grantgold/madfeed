<?php 
/* Template Name: Home */
?>

<?php include('header.php'); ?>

<div id="navigation">
<?php include( INC . 'navbar.php' ); ?>
</div>

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
<section id="reads">
	<?php include( INC . 'latest-reads.php' ); ?>
</section>
<section id="events">
	<div class="container large-top-btm-padding">

		<?php include( INC . 'latest-events.php' ); ?>

	</div>
</section>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>

<?php include('footer.php'); ?>
