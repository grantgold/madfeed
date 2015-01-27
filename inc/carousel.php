<section id="madfeed-carousel">
	<div class="first owl-carousel">
		<?php 
				$i = 1;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 0,
					'paged' => $paged
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
							get_template_part('content', 'carousel' ); // uses content-carousel.php
					$i++;
					}
				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
	</div>
</section>
<section id="madfeed-carousel">
	<div class="second owl-carousel">
		<?php 
				$i = 1;
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 0,
					'paged' => $paged
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
							get_template_part('content', 'carousel' ); // uses content-carousel.php
					$i++;
					}
				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
	</div>
</section>
	<script>
		jQuery(document).ready(function(){
			var owl = jQuery('.first.owl-carousel');
				owl.owlCarousel({
					center:true,
				    items:3.5,
				    loop:true,
				    margin:0,
				    nav:false,
				    autoplay:true,
				    autoplayTimeout:1000,
				    autoplayHoverPause:true,
				    lazyLoad:true
    			});
				owl.trigger('owl.play', 4000);
		  		jQuery(".first.owl-carousel").owlCarousel();
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			var owl = jQuery('.second.owl-carousel');
				owl.owlCarousel({
					center:true,
				    items:3.5,
				    loop:true,
				    margin:0,
				    nav:false,
				    autoplay:true,
				    autoplayTimeout:1000,
				    autoplayHoverPause:true
				});
				owl.trigger('owl.play',5000);
			  	jQuery(".second.owl-carousel").owlCarousel();
		});
	</script>