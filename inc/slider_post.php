<?php 
$num_post=of_get_option('num_post','no entry');
$contenido_slider=of_get_option('contenido_slider','no entry');
switch ($contenido_slider) {
	case 'semana':
			$arg = array(
					'post_type'      => 'post',
					'post_status'    => 'publish',	
					'order' => 'DESC',
				 	'orderby' => 'meta_value_num',
				 	'meta_key' => 'post_views_count',
				 	'date_query' => array(
					  	array(
					  		'column' => 'post_date_gmt',
					        'after' => '1 week ago'
					    ),
					    
				  	),
				  	'posts_per_page' => $num_post, 
				);
		break;
	case 'mes':
			$args = array(
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

			  	'posts_per_page' => $num_post, 
			);
	break;
	case 'anio':
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',	
				'order' => 'DESC',
			 	'orderby' => 'meta_value_num',
			 	'meta_key' => 'post_views_count',
			 	'date_query' => array(
				  	array(
				  		'column' => 'post_date_gmt',
				        'after' => '1 year ago'
				    ),
				    
			  	),
			  	'posts_per_page' => $num_post, 
			);
	break;
	case 'recientes':
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',	
				'order' => 'DESC',
			 	'posts_per_page' => $num_post, 
			);
	break;
	default:
		if(!empty($contenido_slider)){
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',	
				'order' => 'DESC',
				'cat'=>$contenido_slider,
			 	'posts_per_page' => $num_post, 
			);
		}
		else {
			
			$args = array(
				'post_type'      => 'post',
				'post_status'    => 'publish',	
				'order' => 'DESC',
			 	'posts_per_page' => $num_post, 
			);	
		}
	break;
}

?>
<div class="container tablet">
	<div id="destacados-wraper" class="text-left">
			<div id="content-owl">
				<div id="owl-slider" class="owl-carousel owl-theme ">
					<?php 
						
						
						$slider_post=new WP_Query($args);
						if($slider_post->have_posts()):
							while($slider_post->have_posts()):
								$slider_post->the_post();	?>
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
