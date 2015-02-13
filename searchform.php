<form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
	<p>
		<input type="text" value="<?php echo wp_specialchars($s,1); ?>" name="s" id="s" size="15" />
		<input type="submit" class="btn btn-basic" id="search_submit" value="Buscar" />
	</p>
</form>