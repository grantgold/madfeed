<div id="carousel-package">
	<div class="madfeed-carousel small-top-btm-padding">
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
	<div class="madfeed-carousel">
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
	<div class="carousel-prev fadeinSlow"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/icons/chevron.png"/></a></div>
	<div class="carousel-next fadeinSlow"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/icons/chevron.png"/></a></div>
</div>
	<script>
		(function($) {
			$(document).ready(function(){
				var owl1 = $('.first.owl-carousel');
					owl1.owlCarousel({
						items:5,
					    loop:true,
					    margin:15,
					    slideSpeed:800,
					    nav:false,
					    autoplay:false,
					    lazyLoad:true,
					    responsiveClass:true				 
					});
				$('.carousel-next').click(function() {
					owl1.trigger('owl.next');
				});
				$('.carousel-prev').click(function() {
					owl1.trigger('owl.prev');
				});
			});
			$(document).ready(function(){
				var owl2 = $('.second.owl-carousel');
					owl2.owlCarousel({
						items: 5,
					    loop:true,
					    margin:15,
					    slideSpeed:1000,
					    nav:false,
					    autoplay:false,
					    lazyLoad:true,
					    responsiveClass:true
					});
				$('.carousel-next').click(function() {
					owl2.trigger('owl.next');
				});
				$('.carousel-prev').click(function() {
					owl2.trigger('owl.prev');
				});
			});
		})(jQuery);

	</script>