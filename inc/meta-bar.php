<div class="meta-bar hidden-xs">
	<div class="col-sm-12">
	  <div class="col-sm-8 entry-title pull-left">
	    <?php the_title(); ?>&nbsp;&nbsp;<span class="byline"> by <?php echo madfeed_contributors() ?></span>
	  </div>
	  <div class="col-sm-2 subtitle">
	      <?php include( INC . 'share-links.php' ); ?> 
	  </div>
	  <div class="col-sm-2 button pull-right">

      <?php if(get_previous_post()) {
            previous_post('%','Read Next', 'no');
            } else {
            ?> <a href="<?php echo get_site_url(); ?>/reads">Read More</a> 
            <?php } ?>
	  </div>
	</div> 
</div>

<div class="mobile-meta-bar col-sm-12 visible-xs">
    <div class="col-sm-8 byline pull-left">
      by <?php echo madfeed_contributors() ?>
    </div>
    <div class="col-sm-2 button pull-right">

      <?php if(get_previous_post()) {
            previous_post('%','Read Next', 'no');
            } else {
            ?> <a href="<?php echo get_site_url(); ?>/reads">Read More</a> 
            <?php } ?>
    </div>
</div>

<script>

  jQuery(function(){
    viewport_height()
      jQuery(document).scroll(function(){ 
          scroll_check()
      });
      jQuery(window).resize(function(){ 
          viewport_height()
      });
  });
  jQuery('button.navbar-toggle').click(function(){
      jQuery('.mobile-meta-bar').toggleClass('shrink');
    });

  function viewport_height() {
    if(jQuery('#post-title').offset().top < jQuery(window).height() - jQuery('#post-title').height())
          {    
              jQuery('.meta-bar').addClass('shrink');
          }
          else
          {
              jQuery('.meta-bar').removeClass('shrink');
          }
  }
  
  function scroll_check() {
    if(jQuery(document).scrollTop() > jQuery('#post-title').offset().top - jQuery(window).height() + jQuery('#post-title').height() && jQuery(document).scrollTop() < jQuery('.entry-content').height() + 220 ) 
          {    
              jQuery('.meta-bar').addClass('shrink');
          }
          else
          {
              jQuery('.meta-bar').removeClass('shrink');
          }
  }
</script>