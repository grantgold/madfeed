<section id="video">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-sm-10 col-sm-offset-1">
        <div class="entry-media">

          <iframe src="//player.vimeo.com/video/<?php echo vimeo_id();?>?color=006633" width="100%" height="500" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

        </div>
      </div>
    </div>
  </div>
</section>

<section id="profile">
  <div class="container">
    <div class="row">

      <!-- Profile Image -->
      <div class="col-xs-12 col-sm-2">
        <img src="http://placehold.it/200x200" class="img-responsive pull-right"/>
      </div>

      <!-- Content -->
      <div class="col-xs-12 col-sm-10">

        <article class="entry">
          
          <div class="entry-hed">
            <h1><?php the_title(); ?></h1>
          </div>

          <div class="entry-content">
            <?php the_content(); ?>
          </div>
          
          <div class="entry-meta">

          </div>
        </article>

      </div>
    </div>
  </div>
</section>