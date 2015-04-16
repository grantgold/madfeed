<article>
  <div class="container">
<!--     
    <?php 
    if (in_category('streaming')) { ?>
      <div class="feature-image text-center">
        <iframe src="http://cdnapi.kaltura.com/p/361531/sp/36153100/embedIframeJs/uiconf_id/28822851/partner_id/361531?iframeembed=true&playerId=kaltura_player_1428503147&entry_id=1_5gmgrhel&flashvars[streamerType]=auto" width="640" height="390" allowfullscreen webkitallowfullscreen mozAllowFullScreen frameborder="0" style="width: 800px; height: 480px; margin-top: 50px;" itemprop="video" itemscope itemtype="http://schema.org/VideoObject">
          <span itemprop="name" content="MHstream 9"></span>
          <span itemprop="description" content=""></span>
          <span itemprop="duration" content="0"></span>
          <span itemprop="thumbnail" content="https://cdnsecakmi.kaltura.com/p/361531/sp/36153100/thumbnail/entry_id/1_5gmgrhel/version/0"></span>
          <span itemprop="width" content="640"></span>
          <span itemprop="height" content="390"></span>
        </iframe>
      </div>
    <?php } else {
      madfeed_get_featured_image('large');
    } ?>
 -->
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

        <?php
        if (madfeed_get_contributors()) { ?>
        <div class="col-xs-12">
          <div class="row">
            <div class="section-title">Featured Speakers</div>
              <?php 
                  get_template_part('featured', 'speaker' ); // uses featured-speaker.php
              ?>
          </div>
        </div>
        <?php } else {return;} ?>
    </div>
  </div>

</artcile>