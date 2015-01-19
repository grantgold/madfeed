<?php include('header.php'); ?>

<section id="blog">
  <div class="container">
    <div class="row">


      <?php if (!empty(vimeo_id())) { ?>
        <iframe class="embed-responsive-item" src="//player.vimeo.com/video/<?php echo vimeo_id();?>?portrait=0&byline=0&title=0&color=006633" width="100%" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
      <?php } else {
        madfeed_get_featured_image('large');
      } ?>
      

      <div class="col-xs-12 col-sm-10 col-sm-offset-2">
        <?php loop(); ?>
      </div>
    </div>
  </div>
</section>

<?php include( INC . 'share-links.php' ); ?>

<?php include( INC . 'related-posts.php' ); ?>


<?php include('footer.php'); ?>