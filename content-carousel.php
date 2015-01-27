<div>
	<div class="carousel-gradient">
		<a class="owl-item carousel-item" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
	</div>
	<div class="carousel-text">
		<div class="byline"><?php echo madfeed_contributors() ?></div>
		<div class="video-title"><h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4></div>
	</div>
</div>
