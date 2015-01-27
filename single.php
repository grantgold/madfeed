<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<?php include( INC . 'meta-bar.php' ); ?>

<section id="blog">
  <?php if (vimeo_id() == TRUE) { ?>
    <section id="video">
        <iframe class="embed-responsive-item" src="//player.vimeo.com/video/<?php echo vimeo_id();?>?portrait=0&byline=0&title=0&color=006633" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      </section>
      <?php } else {
        madfeed_get_featured_image('large');
      } ?>

  <div class="container">
    <div class="row">
        <div class="col-xs-12">
          <div class="col-xs-12 col-sm-3 post-meta">
            <div class="col-xs-6 col-sm-12">
              <div class="subtitle">WRITTEN BY</div>
              <div class="contributors-meta">
                <?php echo madfeed_contributors_meta(); ?>
              </div>
              <hr>
            </div>
            <div class="col-xs-6 col-sm-12 share-meta">
              <div class="subtitle">SHARE</div>
              <?php include( INC . 'share-links.php' ); ?>
              <hr>
              <div class="body"><?php echo get_the_date(); ?></div>
            </div>
          </div>

          <div class="col-xs-12 col-sm-8">
            <?php loop(); ?>
          </div>
        </div>
    </div>
  </div>
</section>

<?php include( INC . 'related-posts.php' ); ?>
<?php include('footer.php'); ?>