<div class="container tablet">
		<div id="destacados-wraper" class="text-left">
			<div id="content-owl">
				<div id="owl-slider" class="owl-carousel owl-theme ">
					<?php 
						$ultimos_post=new WP_Query();
						$ultimos_post->query('showposts=3');
						if($ultimos_post->have_posts()):
							while($ultimos_post->have_posts()):
								$ultimos_post->the_post();	?>
								<div class="item">
									<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
										<?php 
											if ( has_post_thumbnail() ) { 
												the_post_thumbnail( 'slider_thumb'); 
											}else{?>
												<img src="<?php echo IMAGENES; ?>/default-slider.jpg" alt="<?php the_title(); ?>">
										<?php } ?>
										<h2><?php the_title(); ?></h2>
									</a>
								</div>

						<?php endwhile;
						endif;	 
						wp_reset_query(); ?>
				</div>
				<span class="prev icon-izquierda slider-nav"></span>
				<span class="next icon-derecha slider-nav"></span>
			</div>
			
			<?php get_sidebar('destacados'); ?>
			
		</div>
	</div>
