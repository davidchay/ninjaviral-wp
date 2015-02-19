	<div id="goTop" class="semi-circle">
		<a id="irArriba" href="#top" class="go-to-sky icon-arriba"></a>
	</div>	
	<footer id="footer" class="footer text-center">
		<div id="menu-secundario">
			<?php 
			$footer_menu = array( 
						'theme_location' => 'footer-menu',
						'container'       => false, 
						'items_wrap' => '<ul class="menu menu-footer">%3$s</ul>',
						'fallback_cb' => false
					);
			wp_nav_menu($footer_menu); ?>
		</div>
		<span class="icon-logo ninja"></span>
		<span class="icon-ninjaviral ninjaviral"></span><br>
		Historias que inspiran diariamente <br>
		&copy; Copyright <?php echo date('Y'); ?>
	</footer>
<script type="text/javascript">
	
	post_offset = increment = <?php echo get_option( 'posts_per_page' );?>;
	total = <?php echo $wp_query->max_num_pages;?>;
	
</script>
	<!-- Include js plugin -->
	
	<?php wp_footer(); ?>
</body>
</html>