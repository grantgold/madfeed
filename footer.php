	<section id="footer">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 col-sm-3 col-md-2">
					<div class="circle-logo">
				        <a href="<?php echo get_site_url(); ?>"><img src="<?php bloginfo('template_directory'); ?>/img/icons/mad-logo.svg" width="90px" height="90px" alt="MAD Feed"></a>
				    </div>
				</div>
				<div class="col-xs-6 col-sm-3 col-md-2 footer-title"><b>This Site</b>
					<ul class="list-unstyled">
					<li><br></li>
					<li><a href="<?php echo get_site_url(); ?>/learn">LEARN</a></li>
			        <li><a href="<?php echo get_site_url(); ?>/event">ATTEND</a></li>
			        <li><a href="http://shop.madfeed.co">SHOP</a></li>
			        <li><a href="<?php echo get_site_url(); ?>/about">ABOUT</a></li></ul>
			    </div>
			    <div class="col-xs-6 col-sm-3 col-md-2 footer-title"><b>Follow MAD</b>
					<ul class="list-unstyled">
					<li><br></li>
					<li><a href="https://twitter.com/TheMADFeed" target="_blank">Twitter</a></li>
			        <li><a href="https://www.facebook.com/MADSymposium" target="_blank">Facebook</a></li>
			        <li><a href="http://instagram.com/themadfeed" target="_blank">Instagram</a></li></ul>
			    </div>
			    <div class="col-xs-6 col-sm-3 col-md-2 footer-title"><b>Media</b>
					<ul class="list-unstyled">
					<li><br></li>
					<li><a href="http://vimeo.com/madsymposium" target="_blank">Vimeo</a></li>
			        <li><a href="http://www.youtube.com/channel/UCFyscqROV8WR3S1-IzOEG4A" target="_blank">YouTube</a></li>
			        <li><a href="https://itunes.apple.com/dk/podcast/mad-symposium/id602624887?mt=2&ign-mpt=uo=4" target="_blank">iTunes</a></li></ul>
			    </div>
			    <div class="col-xs-6 col-sm-3 col-md-2 footer-title"><b>Info</b>
					<ul class="list-unstyled">
					<li><br></li>
					<li><a href="<?php echo get_site_url(); ?>/about/#team">The Team</a></li>
			        <li><a href="<?php echo get_site_url(); ?>/about/#contact-info">Contact/Press</a></li></ul>
			    </div>
		    	<div class="col-xs-6 col-sm-3 col-md-2">
		    	<b>Get MAD email</b>
		    	<p class="subtitle medium-top-btm-padding">Subscribe to receive email notifications about news or events</p>
				<a class="btn btn-primary" href="http://eepurl.com/utvuX" target="_blank">Subscribe <i class="fa fa-angle-right"></i></a>
			</div>

			<div class="col-xs-12">
				<div class="credit">
					&copy; MAD <?php echo date("Y"); ?><br>
					Site designed and maintained by <a href="http://www.grantagold.com/" target="_blank">Grant Gold</a>.
				</div>
			</div>

		</div>
	</section>

	<?php wp_footer(); ?>
	
</body>
</html>