<aside class="sidebar">
		<ul class="text-left">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar() ) : ?>
			<li>
				<form method="get" id="searchform" action="<?php	bloginfo('url'); ?>/">
					<p>
						<input type="text" value="<?php echo wp_specialchars($s,1); ?>" name="s" id="s" size="15" />
						<input type="submit" id="search_submit" value="Search" />
					</p>
				</form>
			</li>
		<?php endif; ?>
		</ul>
</aside>