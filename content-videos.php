<div class="col-sm-6 col-md-3">
  <div class="small-top-btm-padding">
		<?php if (vimeo_id() == TRUE) { 
			$imgid = vimeo_id();
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
        <div class="feature-image video-thumbnail img-responsive">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>
        </div>
  <?php } else { ?>
  		<div class="feature-image video-thumbnail img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail(); ?></a></div>
  <?php } ?>
    <p class="subtitle"><?php echo madfeed_contributors() ?></p>
    <div class="video-title">
      <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <p class="byline"><a href="<?php echo get_year_link(''); ?>"><?php the_time('Y'); ?></a></p>
  </div>
</div>