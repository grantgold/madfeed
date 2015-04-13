<div class="col-sm-6 col-md-3">
	<div class="small-top-btm-padding">

  		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>

		<div class="thumbnail-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
		<?php 
		if (madfeed_contributors_name()) { ?>
			<div class="byline">by <?php echo madfeed_contributor_name() ?></div>
		<?php } else { }; ?>
		<p><?php the_excerpt() ?></p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><b>Read More</b></a>
	</div>
</div>