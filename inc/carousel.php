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
		(function($) {
			$(document).ready(function(){
				var owl1 = $('.first.owl-carousel');
					owl1.owlCarousel({
						items:3.5,
						center:true,
					    loop:true,
					    margin:15,
					    nav:false,
					    animateOut:'fadeOut',
					    autoplay:true,
					    autoplayTimeout:1000,
					    autoplayHoverPause:true,
					    lazyLoad:true,
					    responsiveClass:true,
					    responsive:{
					        0:{
					            items:1
					        },
					        600:{
					            items:3
					        },
					        1000:{
					            items:5
					        }
					    }
					});
					owl1.trigger('owl.play', 4000);
			});
			$(document).ready(function(){
				var owl2 = $('.second.owl-carousel');
					owl2.owlCarousel({
						items: 3.5,
						center:true,
					    loop:true,
					    margin:15,
					    nav:false,
					    autoplay:true,
					    autoplayTimeout:1000,
					    autoplayHoverPause:true,
					    lazyLoad:true,
					    responsiveClass:true
					});
					owl2.trigger('owl.play',5500);
			});
		})(jQuery);
	</script>