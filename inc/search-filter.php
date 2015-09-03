<section>
	<div class="container">
		<div class="btn-toolbar small-top-btm-padding col-sm-12">
			<div class="btn-group">
				<form action="/" method="get">
				<input id="search" type="text" class="field form-control" value="<?php the_search_query(); ?>" name="s" placeholder="Search">
			</div>
			<div class="btn-group hidden-sm">
					<button class="btn btn-primary dropdown-toggle" id="topics" type="button" data-toggle="dropdown" aria-expanded="false">
					    Topics <span class="caret"></span>
				</button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="topics">
					    <?php 
								$terms = get_terms('category'); 
								if ($terms && ! is_wp_error( $terms ) ) {
									foreach ($terms as $term) {
										$name = $term->name;
										$event = '<li><a href="'. get_term_link( $term, 'category' ) . '">' . $name . '</a></li>';
										echo $event;
									}
								} else return;
							?>
					  </ul>
			</div>
			<div class="btn-group hidden-sm">
			    <button class="btn btn-primary dropdown-toggle" id="eventlist" type="button" data-toggle="dropdown" aria-expanded="false">
						    Events <span class="caret"></span>
				</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="events">
						    <?php 
								$terms = get_terms('events'); 
								if ($terms && ! is_wp_error( $terms ) ) {
									foreach ($terms as $term) {
										$name = $term->name;
										$event = '<li><a href="'. get_term_link( $term, 'event' ) . '">' . $name . '</a></li>';
										echo $event;
									}
								} else return;
							?>
						    <li><a href="#">MAD Mondays</a></li>
						</ul>
			</div>
				<input type="submit" class="btn btn-primary" id="searchsubmit" value="<?php esc_attr_e( 'Search', 'shape' ); ?>" />
		</div>
	</div>
</section>