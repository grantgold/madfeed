<div class="col-xs-12 col-md-6">

  		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('large'); ?></a></div>

</div>
<div class="col-xs-12 col-md-6 featured-post">
	<div class="subtitle">Featured Video</div>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-play-circle"></i> &nbsp;<?php the_title(); ?></a></h1>
	<?php
	if (madfeed_contributors_name()) { ?>
		<div class="byline">by <?php echo madfeed_contributor_name() ?></div>
		<?php } else { }; ?>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><b>Watch video</b></a>
</div>