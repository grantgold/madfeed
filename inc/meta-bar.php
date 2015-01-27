<script>
  $(function(){
      $(window).scroll(function(){  
          if($(document).scrollTop() > 100)
          {    
              $('#meta-bar').addClass("shrink");
          }
          else
          {
              $('#meta-bar').removeClass("shrink");
          }
      });
  })​;
</script>

<div id="meta-bar" class="hidden-xs">
	<div class="col-sm-12">
	  <div class="col-sm-7 pull-left">
	    <?php the_title(); ?>&nbsp;&nbsp;<span class="byline"> by <?php echo madfeed_contributors() ?></span>
	  </div>
	  <div class="col-sm-3 subtitle">
	      <?php include( INC . 'share-links.php' ); ?> 
	  </div>
	  <div class="col-sm-2 button pull-right">
	    <?php previous_post('%','Hello Anna', 'no'); ?>
	  </div>
	</div> 
</div>