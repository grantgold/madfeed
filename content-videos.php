<div class="col-sm-6 col-md-3">
  <div class="small-top-btm-padding">
		<?php if (vimeo_id() == TRUE) { 
			// $imgid = vimeo_id();
   //    $img_url = $image_json->$imgid['image_url'];
			$hash = unserialize(file_get_contents("http://vimeo.com/api/v2/video/$imgid.php"));
		?>
        <div class="feature-image img-responsive">
          <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $hash[0]['thumbnail_large']; ?>"></a>
<!--           <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><img src="<?php echo $img_url ?>"></a> -->
        </div>
  <?php } else { ?>
  		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
  <?php } ?>
    <div class="subtitle"></div>
    <div class="video-title">
      <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-play-circle"></i> &nbsp;<?php the_title(); ?></a></h4>
    </div>
    <p class="byline"><?php echo madfeed_contributor_name(); ?></p>
    <p><?php the_excerpt() ?></p>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><b>Watch Video</b></a>
  </div>
</div>