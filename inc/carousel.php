<div id="madfeed-carousel" class="small-top-btm-padding">
	<div class="first owl-carousel">
		<?php 
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 6
				);
				$the_query = new WP_Query($args);
				if ( $the_query->have_posts() ) {
					while ( $the_query->have_posts() ) {
						$the_query->the_post(); ?>
						<?php
							get_template_part('content', 'carousel' ); // uses content-carousel.php
					}?>
					<div class="carousel-item blank"></div>
					<?php

				} else {
					// get_template_part( 'content', 'none' );
				}
			?>
	</div>
</div>
<div id="madfeed-carousel">
	<div class="second owl-carousel">
		<div class="carousel-item blank"></div>
		<?php 
				$args = array(
					'post_type' => 'video',
					'posts_per_page' => 6,
					'offset' => 6
				);
				$second_query = new WP_Query($args);
				if ( $second_query->have_posts() ) {
					while ( $second_query->have_posts() ) {
						$second_query->the_post(); ?>
						<?php
							get_template_part('content', 'carousel' ); // uses content-carousel.php
					}?>
					<div class="carousel-item blank"></div>
					<?php

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
						items:4.5,
					    loop:true,
					    margin:15,
					    nav:false,
					    autoplay:true,
					    autoplayTimeout:1000,
					    autoplayHoverPause:true,
					    lazyLoad:true,
					    responsiveClass:true				 
					});
					owl1.trigger('owl.play', 4200);
			});
			$(document).ready(function(){
				var owl2 = $('.second.owl-carousel');
					owl2.owlCarousel({
						items: 4.5,
					    loop:true,
					    margin:15,
					    nav:false,
					    autoplay:true,
					    autoplayTimeout:1000,
					    autoplayHoverPause:true,
					    lazyLoad:true,
					    responsiveClass:true

					});
					owl2.trigger('owl.play', 6500);
			});
		})(jQuery);
	</script>