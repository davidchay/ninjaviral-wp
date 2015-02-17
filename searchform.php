<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<p>
		<input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" size="15" />
		<input type="submit" class="btn btn-basic" id="search_submit" value="Buscar" />
	</p>
</form>