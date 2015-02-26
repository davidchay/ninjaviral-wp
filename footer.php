
	<div id="goTop" class="semi-circle">
		<a id="irArriba" href="#top" class="go-to-sky icon-arriba"></a>
	</div>	
	<footer id="footer" class="footer text-center">
		<div id="menu-secundario" class="desktop">
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
	<?php 
		$google_analytics=of_get_option('google_analytics', 'UA-XXXXX-X');
		if(!$google_analytics)
			$google_analytics="UA-XXXXX-X";
	?>
	<script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','<?php echo $google_analytics; ?>','auto');ga('send','pageview');
    </script>
</body>
</html>