<div class="col-xs-12 col-md-6">
<!-- 		<?php if (vimeo_id() == TRUE) { 
		 $imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
        <div class="feature-image img-responsive">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>

        </div>
  <?php } else { ?> -->
  		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
<!--   <?php } ?> -->
</div>
<div class="col-xs-12 col-md-6 featured-post">
	<div class="subtitle">Featured</div>
	<h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
	<?php 
	if (madfeed_contributors_name()) { ?>
		<div class="byline">by <?php echo madfeed_contributor_name() ?></div>
		<?php } else { }; ?>
	<p><?php the_excerpt(); ?></p>
	<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><b>Read More</b></a>
</div>