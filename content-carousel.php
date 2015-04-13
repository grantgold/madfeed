<div>
	<div class="carousel-gradient">

		  	<a class="owl-item carousel-item img-responsive" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>

	</div>
	<div class="carousel-text">
		<?php
		if (madfeed_contributors_name()) { ?>
		<div class="byline"><?php echo madfeed_contributor_name() ?></div>
		<?php } else { }; ?>
		<div class="video-title"><h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4></div>
	</div>
</div>
