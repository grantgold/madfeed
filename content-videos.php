<div class="col-sm-6 col-md-3">
  <div class="small-top-btm-padding">
    <a class="feature-image" href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
    <p class="subtitle"><a href="#">Christian Puglisi</a></p>
    <div class="video-title">
      <h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h4>
    </div>
    <p class="byline"><a href="<?php echo get_year_link(''); ?>"><?php the_time('Y'); ?></a></p>
  </div>
</div>