<div class="meta-bar hidden-xs">
	<div class="col-sm-12">
	  <div id="meta-title" class="col-sm-8 entry-title pull-left">
      <?php 
      if (madfeed_contributors_name()) { ?>
	     <?php madfeed_short_title(); ?>&nbsp;&nbsp;<span class="byline"> by <?php echo madfeed_contributors_name(); ?></span>
       <?php } else {
        madfeed_short_title();
       } ?>
	  </div>
	  <div class="col-sm-3 subtitle">
	      <?php include( INC . 'share-links.php' ); ?> 
	  </div>
	  <div class="col-sm-1 button pull-right">

      <?php if(get_previous_post()) {
            previous_post('%','Next', 'no');
            } else {
            ?> <a href="<?php echo get_site_url(); ?>/reads">More</a> 
            <?php } ?>
	  </div>
	</div> 
</div>

<script>

  jQuery(function(){
    viewport_height()
    setContent()

      jQuery(document).scroll(function(){ 
          scroll_check()
      });
      jQuery(window).resize(function(){ 
          viewport_height()
          setContent()
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
    if(jQuery(document).scrollTop() > jQuery('#post-title').offset().top - jQuery(window).height() + jQuery('#post-title').height() && jQuery(document).scrollTop() < jQuery('.entry-content').height() + jQuery('#related-posts').height() ) 
          {    
              jQuery('.meta-bar').addClass('shrink');
          }
          else
          {
              jQuery('.meta-bar').removeClass('shrink');
          }
  }

  function setContent() {
    var metabarHeight = 70;
    var contentElement = document.getElementById('meta-title');
    var contentHeight = contentElement.offsetHeight;
    if (metabarHeight - contentHeight > 0) {
        contentElement.style.position = 'relative';
        contentElement.style.top = ((metabarHeight / 2) - (contentHeight / 2) - 4) + 'px';
    }
    else {
        contentElement.style.position = 'static';
    }
  }
</script>