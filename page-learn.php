<?php 
/* Template Name: Learn */
?>

<?php include('header.php'); ?>
<?php include( INC . 'navbar-content.php' ); ?>
<div class="row hidden-xs">
</div>
<section>
	<div id="blog" class="container">
		<div class="row small-top-btm-padding">
			<div class="col-xs-12">
				<?php 
					$args = array(
						'post_type' => array('post','video'),
						'posts_per_page' => 1
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); $type = get_post_type( get_the_ID() );
							if ($type == 'post') {
								get_template_part('featured', 'post'); // uses content-posts.php
							} else {
								get_template_part('content', 'videos');  // uses content-videos.php
							}
						}

					} else {
						// get_template_part( 'content', 'none' );
					}
				?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="hidden-xs fadein">
			<?php include( INC . 'search.php' ); ?>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<?php 
					$i = 1;
					$args = array(
						'post_type' => array('post','video'),
						'offset' => 1
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php
								$type = get_post_type( get_the_ID() );
								if ($type == 'post') {
									get_template_part('content', 'posts'); // uses content-posts.php
								} else {
									get_template_part('content', 'videos');  // uses content-videos.php
								}
							
								if ($i % 4 == 0){
									echo "</div></div>";
									echo "<div class='row'><div class='col-xs-12'>";
								}

						$i++;
						}
					} else {
						get_template_part( 'content' );
					}
				?>
			</div>
		</div>
	</div>
</section>
<section>
	<div class="row">
		<?php include( INC . 'about-summary.php' ); ?>
	</div>
</section>

<?php include('footer.php'); ?>