<div>
	<div class="carousel-gradient">
		<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
			<a class="owl-item carousel-item img-resposive" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>
		<?php } else { ?>
		  	<a class="owl-item carousel-item img-responsive" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php } ?>
	</div>
	<div class="carousel-text">
		<?php
		if (madfeed_contributors_name()) { ?>
		<div class="byline"><?php echo madfeed_contributor_name() ?></div>
		<?php } else { }; ?>
		<div class="video-title"><h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4></div>
	</div>
</div>
