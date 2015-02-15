<div id="sidebar-baner">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('destacados') ) : ?>
			<?php
				$ars = array(
					'post_type'      => 'post',
					'post_status'    => 'publish',	
					'order' => 'DESC',
				 	'orderby' => 'meta_value_num',
				 	'meta_key' => 'post_views_count',
				 	'date_query' => array(
					  	array(
					  		'column' => 'post_date_gmt',
					        'after' => '1 month ago'
					    ),
					    
				  	),

				  	'posts_per_page' => 2, 
				);
				$post_populares = new WP_Query($ars);
				//$post_populares->query('showposts='.$num_post);
				if($post_populares->have_posts()):
					while($post_populares->have_posts()):
						$post_populares->the_post();	?>
						<div class="widget-more-popular">
							<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'slider_thumb'); 
									}else{?>
										<img src="<?php echo IMAGENES; ?>/default-slider.jpg" alt="<?php the_title(); ?>">
								<?php } ?>
							</a>
							<h3>
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
						</div>
					<?php endwhile;
				endif;	 
				wp_reset_query(); ?>
		<?php endif; ?>
		
</div>