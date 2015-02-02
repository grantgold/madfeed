<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid col-xs-12">
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

      <a class="circle-logo" href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="90px" height="90px" alt="MAD Feed"></a>
      <div id="mission" class="hidden-xs col-md-7 col-sm-8">A community of chefs, cooks and farmers with an appetite for knowledge.</div>

      <div class="collapse navbar-collapse hidden-xs">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo get_site_url(); ?>/video">Watch</a>
            <a href="#">Read</a>
            <a href="<?php echo get_site_url(); ?>/event">Attend</a>
            <a href="#">About</a>
          </li>
        </ul>
      
      </div><!-- /.navbar-collapse -->

    <!-- Hidden mobile nav -->
      <div class="hidden-lg hidden-md hidden-sm collapse" id="collapsed-nav">
        <ul class="mobile-nav">
          <li><a href="<?php echo get_site_url(); ?>/video">Watch</a></li>
            <li><a href="#">Read</a></li>
            <li><a href="<?php echo get_site_url(); ?>/event">Attend</a></li>
            <li><a href="#">About</a></li>
        </ul>
      
      </div><!-- /.navbar-collapse -->

    </div><!-- /.navbar-header -->
  </div><!-- /.container -->
</nav>