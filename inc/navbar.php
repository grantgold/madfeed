<nav class="navbar navbar-default container-fluid hidden-xs" role="navigation">
  <div class="col-xs-12">
    <!-- Brand and Nav -->
    <div class="navbar-header">
      <div class="circle-logo"><a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="90px" height="90px" alt="MAD Feed"></a></div>
      <div id="mission" class="hidden-xs col-md-7 col-sm-8">A community of chefs, cooks and farmers with an appetite for knowledge.</div>
      <div class="collapse navbar-collapse hidden-xs">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo get_site_url(); ?>/video">Watch</a>
            <a href="<?php echo get_site_url(); ?>/reads">Read</a>
            <a href="<?php echo get_site_url(); ?>/event">Attend</a>
            <a href="<?php echo get_site_url(); ?>/about">About</a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.navbar-header -->
  </div><!-- /.container -->
</nav>

<!-- Mobile Nav -->
<nav class="scrolling-nav container-fluid navbar-default hidden-sm hidden-md hidden-lg">
  <div class="hidden-lg hidden-md hidden-sm">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-nav">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
  </div>
  <div class="mobile-logo">
    <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="50px" height="50px" alt="MAD Feed"></a>
  </div>
</nav>

<div class="hidden-lg hidden-md hidden-sm collapse" id="collapsed-nav">
  <ul class="mobile-nav">
    <li><a href="<?php echo get_site_url(); ?>/video">Watch</a></li>
      <li><a href="<?php echo get_site_url(); ?>/reads">Read</a></li>
      <li><a href="<?php echo get_site_url(); ?>/event">Attend</a></li>
      <li><a href="<?php echo get_site_url(); ?>/about">About</a></li>
  </ul>
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