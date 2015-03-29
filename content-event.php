<article>
  <div class="container">
    <?php madfeed_get_featured_image('large'); ?>
  </div>
  <div class="container">
      <div id="event-card" class="col-xs-12">
        <div>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <h4><?php echo get_event_location() ?></h4>
          <p class="byline"><?php echo get_event_date() ?></p>
          <!-- <a class="btn btn-primary" ref="#">Sign Up <i class="fa fa-angle-right"></i></a> -->
        </div>
    </div>

    <div class="container">
        <div class="col-xs-12 col-sm-9">
          <div class="row">
            <div class="section-title">About the event</div>
            <div style="clear: both;"></div>
            <div class="entry-content blogpost">
              <?php the_content(); ?>
            </div>
          </div>
        </div>

        <div class="col-xs-12">
          <div class="row">
            <div class="section-title">Featured Speakers</div>
              <?php 
                  get_template_part('featured', 'speaker' ); // uses featured-speaker.php
              ?>
          </div>
        </div>
    </div>
  </div>

</artcile>