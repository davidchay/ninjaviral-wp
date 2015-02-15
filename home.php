<?php get_header(); ?>
<?php 
	if(is_home()){ 
		include(TEMPLATEPATH.'/slider_post.php'); 
	} 
?>
	<div id="container-post-home" class="container margin-v text-left">
		<?php
			if(have_posts()):
				while(have_posts()):
					the_post();	?>
					<div id="post-<?php the_ID(); ?>" <?php post_class('post_home'); ?> >
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
							<figure  >
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail('home_thumb'); 
									}else{?>
										<img src="<?php echo IMAGENES; ?>/default-slider.jpg"  alt="<?php the_title(); ?>">
								<?php } ?>
							</figure>
						</a>
						<span class="info-post tablet mayus">
							<?php $category=get_the_category( $post_id ); ?>
							<a href="<?php echo get_category_link($category[0]->term_id); ?>" class="link_cat_<?php echo $category[0]->term_id;?>"><?php echo $category[0]->name;?></a><span class="desktop"> | POR <?php the_author_posts_link(); ?></span> | <span class="icon-ojo"></span> <?php echo getPostViews(get_the_ID()); ?></span>
						<h2 class="titulo_post">
							<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>
				<?php endwhile; ?>
			<?php else: ?>
				<p><?php  _e('No se encontro ninguna entrada en este sitio, lo sentimos!'); ?> </p>
			<?php endif; ?>
	</div><!--  finaliza articulos home -->
<script type="text/javascript">
	post_offset = increment = <?php echo get_option( 'posts_per_page' );?>;
</script>
<?php get_footer();