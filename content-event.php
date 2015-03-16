  <section>
    <?php madfeed_get_featured_image('large'); ?>
  </div>

  <div id="event" class="col-xs-12 col-sm-6">
    <article class="medium-top-btm-padding">
      <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
      <h3><?php echo get_event_location() ?></h3>
      <p class="entry-title"><?php echo get_event_date() ?></p>
      <a class="btn btn-primary" ref="#">Sign Up <i class="fa fa-angle-right"></i></a>
    </article>
  </div>
</div>
<div id="event" class="container">
    <div class="col-xs-12 col-sm-6">
      <div class="row">
        <div class="section-title">Speakers</div>
      </div>

    </div>
    <div class="col-xs-12 col-sm-6">
      <div class="row">
        <div class="section-title">About the event</div>
        <div style="clear: both;"></div>
        <div class="entry-content blogpost">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
</div>
