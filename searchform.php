<form class="navbar-form pull-right" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<div class="form-group">
		<input type="text" class="form-control" placeholder="Введіть слово" value="<?php echo get_search_query() ?>" name="s" id="s">
		<div class="my-stub pull-right hidden-xs"></div>
	</div>
</form>