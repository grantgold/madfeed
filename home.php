<?php 
/* Template Name: Home */
?>

<?php include('header.php'); ?>

<?php include( INC . 'navbar-content.php' ); ?>


<div class="hidden-sm hidden-md hidden-lg mobile-padding"></div>
<section class="hidden-xs">
	<div class="row">
	
		<?php include( INC . 'carousel.php' ); ?>

	</div>
</section>
<section class="visible-xs">
	<div class="row">
		<div class="mobile-header"><img src="<?php echo get_template_directory_uri();?>/img/illo/better_meal.svg"></div>
	</div>
</section>
<section id="featured" class="fadein">
	<div class="container">

		<?php include( 'featured-home.php' ); ?>

	</div>
</section>
<section id="reads" class="fadein">

	<?php include( INC . 'latest-reads.php' ); ?>
	
</section>
<section id="contributors">

		<?php include( 'random-quote.php' ); ?>

</section>
<section id="events" class="fadein">
	<div class="container">

		<?php include( INC . 'latest-events.php' ); ?>

	</div>
</section>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>
