<div class="col-sm-10 col-sm-offset-1">
	<div class="col-xs-12">
		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		<h1 class="featured-event"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	</div>
	<div class="col-xs-12 col-md-9">
		<h3>Refshaleøen, Copenhagen</h3>
		<p class="entry-title">August 24-25 2014</p>
		<p><?php the_excerpt(); ?></p>
	</div>
	<div class="col-sm-12 col-md-3">
		<a class="btn btn-primary button-list pull-right" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Event Details <i class="fa fa-angle-right"></i></a>
		<a class="btn btn-primary button-list pull-right" href="#">Sign Up <i class="fa fa-angle-right"></i></a>
	</div>
</div>
