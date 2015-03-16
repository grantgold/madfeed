<section>
	<div class="container">
		<hr>
		<div class="btn-toolbar small-top-btm-padding">
			<div class="btn-group hidden-xs">
				<input type="text" class="form-control" placeholder="Search">
			</div>
			<div class="btn-group">
					<button class="btn btn-primary dropdown-toggle" id="topics" type="button" data-toggle="dropdown" aria-expanded="false">
					    Topics <span class="caret"></span>
				</button>
					  <ul class="dropdown-menu" role="menu" aria-labelledby="topics">
					  	<li><a href="#">All Topics</a></li>
					  	<li class="divider"></li>
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
			<div class="btn-group hidden-xs">
			    <button class="btn btn-primary dropdown-toggle" id="eventlist" type="button" data-toggle="dropdown" aria-expanded="false">
						    Events <span class="caret"></span>
				</button>
						<ul class="dropdown-menu" role="menu" aria-labelledby="events">
					  		<li><a href="#">All Events</a></li>
						  	<li class="divider"></li>
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
		</div>
	</div>
</section>