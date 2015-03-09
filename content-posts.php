<div class="col-sm-6 col-md-3">
	<div class="small-top-btm-padding">
		<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
        <div class="feature-image">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>
        </div>
  <?php } else { ?>
  		<div class="feature-image"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
  <?php } ?>
		<div class="thumbnail-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
		<div class="byline">by <?php echo madfeed_contributors_name() ?></div>
		<p><?php the_excerpt() ?></p>
		<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">Read More</a>
	</div>
</div>