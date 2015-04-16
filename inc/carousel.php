<div id="carousel-package" class="hidden">
	<div class="madfeed-carousel small-top-btm-padding">
		<div class="first owl-carousel">
			<?php 
					$category = get_category_by_slug('featured-home');
					$featured = $category->term_id;
					$carousel_duplicates = array();
					$args = array(
						'post_type' => 'video',
						'orderby' => 'rand',
						'cat' => -$featured,
						'posts_per_page' => 10
					);
					$the_query = new WP_Query($args);
					if ( $the_query->have_posts() ) {
						while ( $the_query->have_posts() ) {
							$the_query->the_post(); $carousel_duplicates[] = $post->ID; $type = get_post_type( get_the_ID() );

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
						'post__not_in' => $carousel_duplicates,
						'cat' => -$featured,
						'orderby' => 'rand',
						'posts_per_page' => 10
					);
					$second_query = new WP_Query($args);
					if ( $second_query->have_posts() ) {
						while ( $second_query->have_posts() ) {
							$second_query->the_post(); ?>
							<?php
								get_template_part('content', 'carousel' ); // uses content-carousel.php
						}?>
						<div class="carousel-item blank">
							<div class="carousel-text">
								<div class="video-title"><h4><a href="<?php echo get_site_url(); ?>/video">More Videos ></a></h4></div>
							</div>
						</div>
						<?php

					} else {
						// get_template_part( 'content', 'none' );
					}
				?>
		</div>
	</div>
	<div class="carousel-prev"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/icons/chevron.png"/></a></div>
	<div class="carousel-next"><a href="#"><img src="<?php echo get_template_directory_uri();?>/img/icons/chevron.png"/></a></div>
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

			$(window).load(function() {
				$('#carousel-package').removeClass('hidden');
				$('#carousel-package').addClass('fadein');
			});
		})(jQuery);

	</script>