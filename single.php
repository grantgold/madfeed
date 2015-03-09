<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<?php include( INC . 'meta-bar.php' ); ?>

<section id="mobile-cover-card" class="visible-xs">
  <div id="card-content">
    <div class="container mobile-padding mobile-cover">
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php echo madfeed_contributors_image(); ?>
    </div>
    <div class="contributors-meta">by <?php echo madfeed_contributors_name(); ?></div>
  </div>
</section>


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
          <div class="row">
          <div class="col-sm-3 post-meta hidden-xs">
            <div class="col-sm-12">
              <div class="subtitle">WRITTEN BY</div>
              <div class="contributors-meta">
                <?php echo madfeed_contributors_name(); ?>
                <?php echo madfeed_contributors_twitter(); ?>
              </div>
              <hr>
            </div>
            <div class="hidden-xs col-sm-12 share-meta">
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
  </div>
</section>

<script>
  function getWindowHeight() {
      var windowHeight = 0;
      if (typeof(window.innerHeight) == 'number') {
          windowHeight = window.innerHeight;
      }
      else {
          if (document.documentElement && document.documentElement.clientHeight) {
              windowHeight = document.documentElement.clientHeight;
          }
          else {
              if (document.body && document.body.clientHeight) {
                  windowHeight = document.body.clientHeight;
              }
          }
      }
      return windowHeight;
  }
  function setCard() {
    var card;
    if (document.getElementById) {
      var windowHeight = getWindowHeight();
      card = document.getElementById('mobile-cover-card');
      card.style.height = windowHeight;
    } else {

    }
    return card.style.height;
  }
  function setCardContent() {
    if (document.getElementById) {
      var cardHeight = setCard();
      if (cardHeight > 0) {
        var contentElement = document.getElementById('card-content');
        var cardHeight = contentElement.offsetHeight;
        if (windowHeight - cardHeight > 0) {
            contentElement.style.position = 'relative';
            contentElement.style.top = ((windowHeight / 2) - (cardHeight / 2)) + 'px';
        }
        else {
            contentElement.style.position = 'static';
        }
      }
    }
  }
  window.onload = function() {
      setCardContent();
  }
  window.onresize = function() {
      setCardContent();
  }
  </script>

<?php include( INC . 'related-posts.php' ); ?>
<?php include('footer.php'); ?>