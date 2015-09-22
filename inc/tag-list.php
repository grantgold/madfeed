<div id="tag-list" class="collapse">
	<div class="category-styling row">
		<div class="container">
			<?php 
				$tags = get_tags();
				if ($tags) {
					foreach ($tags as $tag) {
					echo '<div class="col-xs-6 col-md-3 tag-link"><a href="' . get_tag_link( $tag->term_id ) . '" title="' . sprintf( __( "View all posts in %s" ), $tag->name ) . '" ' . '>' . $tag->name.'</a></div> ';
					}
				} else return;
			?>
		</div>
	</div>
</div>