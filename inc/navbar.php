<nav class="navbar navbar-default" role="navigation">
  <div class="container-fluid">
    <!-- Brand and Mobile Nav -->
    <div class="navbar-header">
      <nav class="hidden-lg hidden-md hidden-sm">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsed-nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="navbar-brand mobile-brand"><a class="brand-text" href="<?php echo get_site_url(); ?>">MAD</a></div>
      </nav>

      <div class="navbar-brand circle-text hidden-xs"><a href="<?php echo get_site_url(); ?>">MAD</a></div>
      <div id="mission" class="hidden-xs col-lg-8 col-sm-10">A community of chefs, cooks and farmers with an appetite for knowledge.</div>



      <div class="collapse navbar-collapse hidden-xs">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?php echo get_site_url(); ?>/video">Watch</a>
            <a href="#">Read</a>
            <a href="#">Attend</a>
            <a href="#">About</a>
          </li>
        </ul>
      
      </div><!-- /.navbar-collapse -->

    <!-- Hidden mobile nav -->
      <div class="hidden-lg hidden-md hidden-sm collapse" id="collapsed-nav">
        <ul class="mobile-nav">
          <li><a href="<?php echo get_site_url(); ?>/video">Watch</a></li>
            <li><a href="#">Read</a></li>
            <li><a href="#">Attend</a></li>
            <li><a href="#">About</a></li>
        </ul>
      
      </div><!-- /.navbar-collapse -->

    </div><!-- /.navbar-header -->
  </div><!-- /.container -->
</nav>