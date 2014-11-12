<?php include('header.php'); ?>

<section id="blog">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2">

				<article class="entry">
					
					<div class="entry-media">
						<img src="http://placehold.it/1200x600" class="img-responsive"/>
					</div>

					<div class="entry-hed">
						<h1><?php echo get_grant(); ?></h1>
					</div>

					<div class="entry-content">
						THE_CONTENT
						<img src="http://placehold.it/200x200" class="img-responsive pull-right"/>
						<p>!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<p>!Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					</div>
					
					<div class="entry-meta">

					</div>
				</article>

			</div>
		</div>
	</div>
</section>

<?php include( 'INC' . '/related-posts.php' ); ?>


<?php include('footer.php'); ?>