<div class="col-xs-12">
	<div class="row">
		<div class="col-xs-12 col-md-6">
			<div class="img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		</div>
		<div class="col-xs-12 col-md-6">
			<h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
			<h3><?php echo get_event_location() ?></h3>
			<p class="entry-title"><?php echo get_event_date() ?></p>
			<p><?php the_excerpt(); ?></p>
			<a class="btn btn-primary button-list" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Event Details <i class="fa fa-angle-right"></i></a>
			<a class="btn btn-primary button-list" href="#">Sign Up <i class="fa fa-angle-right"></i></a>
		</div>
	</div>
</div>