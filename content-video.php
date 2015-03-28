<section id="video">
  <div class="entry-media embed-responsive embed-responsive-4by3">
    <iframe class="embed-responsive-item" src="//player.vimeo.com/video/<?php echo vimeo_id();?>?portrait=0&byline=0&title=0&color=006633" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
  </div>
</section>

<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        
        <div class="col-xs-12 col-sm-3 post-meta hidden-xs">
          <div class="row col-xs-6 col-sm-12">
            <div class="row">
              <div class="profile-image img-responsive"><?php echo madfeed_contributors_image(); ?></div>
              <div class="post-meta contributors-meta">
                <?php echo madfeed_contributors_name(); ?>
                <p class="byline"><?php echo madfeed_contributors_bio(); ?></p>
                <?php echo madfeed_contributors_twitter(); ?>
              </div>
              <hr>
            </div>
            <div class="row col-xs-6 col-sm-12">
              <div class="row">
                <div class="subtitle">SHARE</div>
                <?php include( INC . 'share-links.php' ); ?>
              </div>
            </div>
          </div>
        </div>

        <div class="col-xs-12 col-sm-9">
          <article class="entry">
            <div id="post-title" class="entry-hed">
              <div class="visible-xs">
                <div class="contributor-meta-card">
                  <div class="contributors-image-mobile pull-left"><?php echo madfeed_contributors_image();?></div>
                  <div class="contributors-meta contributors-meta-mobile pull-left">
                    <?php echo madfeed_contributors_name(); ?>
                    <?php echo madfeed_contributors_bio(); ?>
                    <?php echo madfeed_contributors_twitter(); ?>
                  </div>
                </div>
              </div>
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="event-date"><?php madfeed_event_date(); ?></div>
            <div class="entry-content blogpost">
              <?php the_content(); ?>
            </div>
          </article>
        </div>

      </div>
    </div>
  </div>
</section>