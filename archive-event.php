<?php include('header.php'); ?>
<?php include( INC . 'navbar.php' ); ?>

<div class="visible-xs mobile-padding"></div>

<div class="container">
	<div class="row small-top-btm-padding">
		<div class="col-xs-12">
			<div class="row">
			<?php 
				$args = array(
					'post_type' => 'event',
					'posts_per_page' => 1
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
							get_template_part('featured', 'event' ); // uses content-carousel.php
					}?>
					<?php

				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<div class="row">
			<div class="col-xs-12">
				<p class="section-title">More Events</p>
				<div style="clear: both;"></div>
				<hr>
			</div>
				<?php 
					$i = 1;
					$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$args = array(
						'post_type' => 'event',
						'posts_per_page' => 8,
						'offset' => 1,
						'paged' => $paged
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); ?>
							<?php
								get_template_part('content', 'events' ); // uses content-events.php
							
								if ($i % 2 == 0){
									echo "</div></div>";
									echo "<div class='row'><div class='col-xs-12'>";
								}

						$i++;
						}
					} else {
						// get_template_part( 'content', 'none' );
					}
				?>
			</div>
			</div>
	</div>
	<div class="pull-right medium-top-btm-padding">
		<div class="navigation">
			<ul class="pagination">
				<li>
		<?php 
			$next_link = 'older&nbsp;&nbsp;<i class="fa fa-arrow-right"></i>';
			$prev_link = '<i class="fa fa-arrow-left"></i>&nbsp;&nbsp;newer';
			previous_posts_link($prev_link ,$the_query->max_num_pages); ?></li>
			<li><?php next_posts_link($next_link ,$the_query->max_num_pages); ?> </li>
			</ul>
		</div>
	</div>
</div>

<section>
	<div class="row">

		<?php include( INC . 'about-summary.php' ); ?>

	</div>
</section>

<?php include('footer.php'); ?>