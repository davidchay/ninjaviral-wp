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
			<?php 
					/*Obtener las entradas mas detacadas de la semana*/
					$args = array(
					  'order' => 'DESC',
					  'orderby' => 'meta_value_num',
					  'meta_key' => 'post_views_count',
					  'date_query' => array(
					    array(
					      'column' => 'post_date_gmt',
					      //'after' => '1 week ago',
					      'after' => '1 day ago'
					    )
					  )
					);
					$post_destacados = new WP_Query( $args );
					$post_destacados->query('showposts=2');
				?>

			<div id="sidebar-baner">
				<?php 
					if($post_destacados->have_posts):
						while ($post_destacados->have_posts):
							$post_destacados->the_post();	
						
				?>
					<div class="post-destacado">
						<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>">
							<?php 
								if ( has_post_thumbnail() ) { 
									the_post_thumbnail( 'destacado_thumb'); 
								}else{?>
									<img src="<?php echo IMAGENES; ?>/thumnail.jpg" alt="<?php the_title(); ?>">
							<?php } ?>
							<h2><?php the_title(); ?></h2>
						</a>
					</div>
				<?php 
						endwhile;
					else:?>
					<div class="post-destacado">
						<?php 
							if ( has_post_thumbnail() ) { 
								the_post_thumbnail( 'destacado_thumb'); 
							}else{?>
								<img src="<?php echo IMAGENES; ?>/thumnail.jpg" alt="titutlo del articulo">
						<?php } ?>
						<h2>Aun no hay post destacados</h2>
					
					</div>
					
				<?php
					endif;
					wp_reset_query();	
				?>
			</div>
		</div>
	</div>
