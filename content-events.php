<div class="col-xs-12 col-sm-6">
	<div class="small-top-btm-padding">
		<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		<div class="thumbnail-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
		<p class="byline"><?php echo get_event_date() ?></p>
		<p><?php the_excerpt(); ?></p>
	</div>
</div>