<div id="search-module" class="container">
	<div class="col-sm-12">
		<form role="search" method="get" class="search-form small-top-btm-padding" action="<?php echo home_url( '/' ); ?>">
			<label>
				<input type="search" class="search-field field form-control" placeholder="<?php echo esc_attr_x( 'Search the archive', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
			</label>
			<input type="submit" class="btn-primary search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
			<div class="category-toggle pull-right">
				<a data-toggle="collapse" href="#category-list">Search Categories <i class="fa fa-caret-down"></i></a>
			</div>
		</form>
	</div>

</div>