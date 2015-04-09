<nav class="scrolling-nav container-fluid navbar-default navbar-content hidden-xs" role="navigation">
  <div class="col-xs-12">
    <!-- Brand and Mobile Nav -->
    <div class="navbar-header">
      <div class="circle-logo">
        <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="90px" height="90px" alt="MAD Feed"></a>
      </div>
    </div>
    <div class="collapse navbar-collapse">
        <ul class="navbar-nav-content">
          <a href="<?php echo get_site_url(); ?>/read-and-watch">Read &amp; Watch</a>
          <a href="<?php echo get_site_url(); ?>/event">Attend</a>
          <a href="http://store.madfeed.co">Shop</a>
          <a href="<?php echo get_site_url(); ?>/about">About</a>
        </ul>
    </div>
  </div>
</nav>

<!-- Mobile Nav -->
<nav class="scrolling-nav container-fluid navbar-default hidden-sm hidden-md hidden-lg">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-nav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  <div class="mobile-logo">
    <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="50px" height="50px" alt="MAD Feed"></a>
  </div>
</nav>
<div class="hidden-lg hidden-md hidden-sm collapse" id="collapsed-nav">
  <div class="mobile-nav">
    <li><a href="<?php echo get_site_url(); ?>/read-and-watch">Read <br>&amp; Watch</a></li>
      <li><a href="<?php echo get_site_url(); ?>/event">Attend</a></li>
      <li><a href="http://new.madfeed.co">Shop</a></li>
      <li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
  </div>

</div>

<script>
  jQuery(function(){
      jQuery(window).scroll(function(){  
          if(jQuery(document).scrollTop() > 200)
          {    
              jQuery('.scrolling-nav').addClass("drop");
          }
          else
          {
              jQuery('.scrolling-nav').removeClass("drop");
          }
      });
  });
</script>