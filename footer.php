	<footer class="footer text-center">
		Historias que inspiran diariamente <br>
		<span class="icon-logo ninja"></span>
		<span class="icon-ninjaviral ninjaviral"></span>
		<br>&copy; Copyright <?php date('Y'); ?>	
	</footer>
<script type="text/javascript">
	post_offset = increment = <?php echo get_option( 'posts_per_page' );?>;
	total = <?php echo $wp_query->max_num_pages;?>;
</script>
	<!-- Include js plugin -->
	<script src="<?php echo bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<?php wp_footer(); ?>
</body>
</html>