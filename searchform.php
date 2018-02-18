<div class="header-searchbar group">
	<form id='searchform' name="search" method="get" action="<?php echo home_url('/'); ?>" role="search">
		<input type="search" id='search_text' name="s" placeholder="Buscar..." value="<?php echo esc_attr( get_search_query() ); ?>">
		<div class="search-icon">
			<i class="fa fa-search search_input"><input type="submit" id='search_submit' name="submit" value="" /></i>
		</div>
	</form>
</div>

