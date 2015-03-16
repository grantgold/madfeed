<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		</div>
		<div class="col-xs-12 col-md-6">
			<p class="subtitle"><?php echo get_event_location() ?></p>
			<h1 class="featured-event"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<?php echo get_event_date() ?>
			<?php the_excerpt(); ?>
			<div class="medium-top-btm-padding">
				<a class="btn btn-primary button-list" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Event Details <i class="fa fa-angle-right"></i></a>
				<a class="btn btn-primary button-list" href="#">Sign Up <i class="fa fa-angle-right"></i></a>
			</div>
		</div>
	</div>
</div>