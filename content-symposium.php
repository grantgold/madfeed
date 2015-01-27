<section id="symposium">
  <?php if (vimeo_id() == TRUE) { ?>
        <iframe class="embed-responsive-item" src="//player.vimeo.com/video/<?php echo vimeo_id();?>?portrait=0&byline=0&title=0&color=006633" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <?php } else {
        madfeed_get_featured_image('large');
      } ?>
</section>

<section id="profile">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        
        <div class="col-xs-12 col-sm-3 post-meta">
          <div class="col-xs-6 col-sm-12 profile-image">
            <img class="img-responsive" src="http://placehold.it/200x200" />
            <div class="post-meta contributors-meta"><?php echo madfeed_contributors_meta(); ?></div>
            <hr>
          </div>
          <div class="col-xs-6 col-sm-12">
            <div class="subtitle">SHARE</div>
            <?php include( INC . 'share-links.php' ); ?>
          </div>
        </div>

        <div class="col-xs-12 col-sm-9">
          <article class="entry">
            <div class="entry-hed">
              <h1><?php the_title(); ?></h1>
            </div>
            <div class="event-date">MAD • 2014</div>
            <div class="entry-content blogpost">
              <?php the_content(); ?>
            </div>
            
            <div class="entry-meta">

            </div>
          </article>
        </div>

      </div>
    </div>
  </div>
</section>