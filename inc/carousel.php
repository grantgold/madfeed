<div id="madfeed-carousel" class="small-top-btm-padding">
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
</div>
<div id="madfeed-carousel">
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
</div>
	<script>
		jQuery(document).ready(function(){
			var owl1 = jQuery('.first.owl-carousel');
				owl1.owlCarousel({
					itemsCustom : [
				        [0, 0],
				        [450, 0],
				        [600, 1.5],
				        [700, 1.5],
				        [1000, 2.5],
				        [1100, 2.4],
				        [1200, 2.8],
				        [1400, 3.5],
				        [1600, 3.5]
				      ],
				    responsive : {
					    // breakpoint from 0 up
					    0 : {
					        option1 : value,
					        option2 : value,
					        ...
					    },
					    // breakpoint from 480 up
					    480 : {
					        option1 : value,
					        option2 : value,
					        ...
					    },
					    // breakpoint from 768 up
					    768 : {
					        option1 : value,
					        option2 : value,
					        ...
					    }
					}
					center:true,
				    loop:true,
				    margin:0,
				    nav:false,
				    autoplay:true,
				    autoplayTimeout:1000,
				    autoplayHoverPause:true,
				    lazyLoad:true,
    			});
				owl1.trigger('owl.play', 4000);
		  		jQuery(".first.owl-carousel").owlCarousel();
		});
	</script>
	<script>
		jQuery(document).ready(function(){
			var owl2 = jQuery('.second.owl-carousel');
				owl2.owlCarousel({
					rtl:true,
					center:true,
				    items:3.5,
				    loop:true,
				    margin:0,
				    nav:false,
				    autoplay:true,
				    autoplayTimeout:1000,
				    autoplayHoverPause:true
				});
				owl2.trigger('owl.play',5000);
			  	jQuery(".second.owl-carousel").owlCarousel();
		});
	</script>