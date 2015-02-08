<div class="col-xs-12">
  <div id="event" class="col-xs-12 col-sm-5">
    <?php madfeed_get_featured_image('large'); ?>
  </div>

  <div id="event" class="col-xs-12 col-sm-7">
    <article class="entry">
      <div class="entry-hed">
        <h1><?php the_title(); ?></h1>
      </div>
      <div class="event-date"><?php echo get_event_date() ?></div>
      <div class="entry-content blogpost">
        <?php the_content(); ?>
      </div>
      <div class="entry-meta"></div>
    </article>
  </div>
</div>