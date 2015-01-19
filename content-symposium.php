<section id="symposium">
  <div class="container">
    <div class="row">

      <!-- Profile Image -->
      <div class="col-xs-12 col-sm-2">

        <div class="row">
        <div class="col-xs-6 col-sm-12 profile-image">
            <img class="img-responsive" src="http://placehold.it/200x200" />
        </div>
        <div class="col-xs-6 col-sm-12 profile">
          <div class="profile-name">Daniel Klein &amp; Mirra Fine</div>
          <div class="profile-title">Psychologist, USA</div>
        </div>
        </div>

      </div>

      <!-- Content -->
      <div class="col-xs-12 col-sm-10">

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
</section>

<?php include( INC . 'share-links.php' ); ?>