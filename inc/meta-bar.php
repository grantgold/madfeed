<div id="meta-bar" class="hidden-xs">
	<div class="col-sm-12">
	  <div class="col-sm-7 entry-title pull-left">
	    <?php the_title(); ?>&nbsp;&nbsp;<span class="byline"> by <?php echo madfeed_contributors() ?></span>
	  </div>
	  <div class="col-sm-3 subtitle">
	      <?php include( INC . 'share-links.php' ); ?> 
	  </div>
	  <div class="col-sm-2 button pull-right">
	    <?php previous_post('%','Read Next', 'no'); ?>
	  </div>
	</div> 
</div>

<script>
  jQuery(function(){
      jQuery(window).scroll(function(){  
          if(jQuery(document).scrollTop() > 200)
          {    
              jQuery('#meta-bar').addClass("shrink");
          }
          else
          {
              jQuery('#meta-bar').removeClass("shrink");
          }
      });
  });
</script>