<?php 
/* Template Name: Initiative */
?>
<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<div class="row large-top-btm-padding hidden-xs">
</div>
<div class="container initiative fadein">
	<?php loop(); ?>
</div>
<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<script>

jQuery(function() {
	jQuery('img').addClass('img-responsive');
});

</script>

<?php include('footer.php'); ?>