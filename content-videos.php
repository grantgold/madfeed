<div class="col-sm-6 col-md-3">
  <div class="small-top-btm-padding">
  		<div class="feature-image img-responsive"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_post_thumbnail('medium'); ?></a></div>
    <div class="subtitle"></div>
    <div class="video-title">
      <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><i class="fa fa-play-circle"></i> &nbsp;<?php the_title(); ?></a></h4>
    </div>
    <p class="byline"><?php echo madfeed_contributor_name(); ?></p>
    <p><?php the_excerpt() ?></p>
    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><b>Watch Video</b></a>
  </div>
</div>