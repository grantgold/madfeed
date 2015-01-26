<div class="col-sm-6 col-md-3">
	<div class="small-top-btm-padding">
		<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
		<div class="entry-title"><h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4></div>
		<div class="byline">by <?php echo madfeed_contributors() ?></div>
		<p><?php the_excerpt() ?></p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
	</div>
</div>