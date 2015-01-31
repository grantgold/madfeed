<nav id="scrolling-nav" class="container-fluid navbar-default navbar-content" role="navigation">
  <div class="col-xs-12">
    <!-- Brand and Mobile Nav -->
    <div class="navbar-header">
      <nav class="hidden-lg hidden-md hidden-sm">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </nav>

      <div class="circle-logo">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="90px" height="90px" alt="MAD Feed"></a>
      </div>

    <!-- Hidden mobile nav -->
      

    </div>

    <div class="collapse navbar-collapse hidden-xs">
        <ul class="navbar-nav-content">
          <a href="<?php echo get_site_url(); ?>/video">Watch</a>
          <a href="#">Read</a>
          <a href="#">Attend</a>
          <a href="#">About</a>
        </ul>
      
    </div>

  </div><!-- /.container -->
  <div class="hidden-lg hidden-md hidden-sm collapse" id="collapsed-nav">
        <ul class="mobile-nav">
          <a href="<?php echo get_site_url(); ?>/video">Watch</a>
            <li><a href="#">Read</a></li>
            <li><a href="#">Attend</a></li>
            <li><a href="#">About</a></li>
        </ul>
      
      </div>
</nav>
<!-- 
<script>
  jQuery(function(){
      jQuery(window).scroll(function(){  
          if(jQuery(document).scrollTop() > 200)
          {    
              jQuery('#scrolling-nav').addClass("drop");
          }
          else
          {
              jQuery('#scrolling-nav').removeClass("drop");
          }
      });
  });
</script> -->