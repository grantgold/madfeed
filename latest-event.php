<div class="col-xs-12 col-md-6">
	<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
</div>
<div class="col-xs-12 col-md-6">
	<p class="subtitle"><?php echo get_event_location() ?></p>
	<h2 class="featured-event"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
	<?php echo get_event_date() ?>
	<?php the_excerpt(); ?>
	<a class="btn btn-primary" ref="#">Sign Up <i class="fa fa-angle-right"></i></a>
</div>
