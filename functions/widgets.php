<?php 
class Posts_recientes extends WP_Widget {
	function Posts_recientes() {
		// procesos efectivos, reales del widget
		 $widget_ops = array('classname' => 'Posts recientes', 'description' => "Muestra los post mas recientes" );
        $this->WP_Widget('Posts_recientes', "Posts recientes", $widget_ops);
	}

	function form($instance) {
		$title=esc_attr($instance['title']);
		$num_post=esc_attr($instance['num_post']);
		$mostrar_fecha=$instance['mostrar_fecha'] ? 'true' : 'false';
		
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Title:') ?>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>">
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('num_post'); ?>">
				<?php _e('Posts a mostrar:')?> 
				<select value="<?php echo $num_post; ?>" class="widefat" id="<?php echo $this->get_field_id('num_post'); ?>" name="<?php echo $this->get_field_name('num_post') ?>">
					<?php 
						for ($i=1; $i < 11; $i++) { 
							if($num_post==$i){	?>
							<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
							<?php 
							}else{ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php }
						}
					?>	
				</select>
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('mostrar_fecha'); ?>">
				<input type="checkbox" class="widefat" id="<?php echo $this->get_field_id('mostrar_fecha') ?>" <?php checked($instance['mostrar_fecha'], 'on'); ?> name="<?php echo $this->get_field_name('mostrar_fecha'); ?>" >
				<?php _e('Mostrar fecha')?> 
			</label>
		</p>
		<?php 
	}

	function update($new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=strip_tags($new_instance['title']);
		$instance['num_post']=strip_tags($new_instance['num_post']);
		$instance['mostrar_fecha']=$new_instance['mostrar_fecha'];
		return $instance;
	}

	function widget($args, $instance) {
		extract($args);
		$title=apply_filters('widget_title',$instance['title']);
		$num_post=$instance['num_post'];
		$mostrar_fecha = $instance['mostrar_fecha'] ? 'true' : 'false';
		echo $before_widget;
		if($title)
			echo $before_title.$title.$after_title;
			
				$ultimos_post=new WP_Query();
				$ultimos_post->query('showposts='.$num_post);
				if($ultimos_post->have_posts()):
					while($ultimos_post->have_posts()):
						$ultimos_post->the_post();	?>
						<div class="widget-last-post">
							<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
								<?php 
									if ( has_post_thumbnail() ) { 
										the_post_thumbnail( 'home_thumb'); 
									}else{?>
										<img src="<?php echo IMAGENES; ?>/default-slider.jpg" alt="<?php the_title(); ?>">
								<?php } ?>
							</a>
							<h3>
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<?php 
							if($mostrar_fecha === 'true'): ?>
								<em class="float-left date">
									<?php the_time(' j F , Y'); ?>
								</em>
							<?php endif; //cierra el if mostrar fecha ?>
						</div>
					<?php endwhile;
				endif;	 
				wp_reset_query(); ?>

		<?php 
		echo $after_widget;

	}

}
register_widget('Posts_recientes');
/*
Post mas vistos widget
*/
class Mas_vistos extends WP_Widget {
	function Mas_vistos() {
		// procesos efectivos, reales del widget
		$widget_ops = array('classname' => 'Los mas vistos', 'description' => "Post mas vistos" );
        $this->WP_Widget('Mas_vistos', "Post mas vistos", $widget_ops);
	}

	function form($instance) {
		$title=esc_attr($instance['title']);
		$num_post=esc_attr($instance['num_post']);
		$num_fecha=esc_attr($instance['num_fecha']);
		$tipo_fecha=esc_attr($instance['tipo_fecha']);
		$mostrar_fecha=$instance['mostrar_fecha'] ? 'true' : 'false';
		$mostrar_vistas=$instance['mostrar_vistas'] ? 'true' : 'false';
		$tipoFecha=array(
				'week'=>'Semana(s)',
				'month'=>'Mes(es)',
				'year'=>'Año(s)'
			);
		?>
		<p>
			<label for="<?php echo $this->get_field_id('title'); ?>">
				<?php _e('Title:') ?>
				<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title ?>">
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('num_post'); ?>">
				<?php _e('Posts a mostrar:')?> 
				<select value="<?php echo $num_post; ?>" class="widefat" id="<?php echo $this->get_field_id('num_post'); ?>" name="<?php echo $this->get_field_name('num_post') ?>">
					<?php 
						for ($i=1; $i < 11; $i++) { 
							if($num_post==$i){	?>
							<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
							<?php 
							}else{ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php }
						}
					?>	
				</select>
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('num_post'); ?>">
				<?php _e('Posts mas vistos, en los ultimos...')?> 
			</label>
			<p>
				<select value="<?php echo $num_fecha; ?>" class="widefat" id="<?php echo $this->get_field_id('num_fecha'); ?>" name="<?php echo $this->get_field_name('num_fecha') ?>">
					<?php 
						for ($i=1; $i < 13; $i++) { 
							if($num_fecha==$i){	?>
							<option value="<?php echo $i; ?>" selected="selected"><?php echo $i; ?></option>
							<?php 
							}else{ ?>
							<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
						<?php }
						}
					?>	
				</select>
			</p>
			<p>
				<select value="<?php echo $tipo_fecha; ?>" class="widefat" id="<?php echo $this->get_field_id('tipo_fecha'); ?>" name="<?php echo $this->get_field_name('tipo_fecha') ?>">
					<?php 
					foreach ($tipoFecha as $key => $value) {
						if($tipo_fecha===$key){	?>
							<option value="<?php echo $key; ?>" selected="selected"><?php echo $value; ?></option>
							<?php 
						}else{ ?>
							<option value="<?php echo $key; ?>"><?php echo $value; ?></option>
					<?php 
						}
					}	
					?>	
				</select>
			</p>	
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('mostrar_fecha'); ?>">
				<input type="checkbox" class="widefat" id="<?php echo $this->get_field_id('mostrar_fecha') ?>" <?php checked($instance['mostrar_fecha'], 'on'); ?> name="<?php echo $this->get_field_name('mostrar_fecha'); ?>" >
				<?php _e('Mostrar fecha')?> 
			</label>
		</p>
		<p>
			<label for="<?php echo $this->get_field_id('mostrar_vistas'); ?>">
				<input type="checkbox" class="widefat" id="<?php echo $this->get_field_id('mostrar_vistas') ?>" <?php checked($instance['mostrar_vistas'], 'on'); ?> name="<?php echo $this->get_field_name('mostrar_vistas'); ?>" >
				<?php _e('Mostrar visitas')?> 
			</label>
		</p>
		<?php 
	}

	function update($new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=strip_tags($new_instance['title']);
		$instance['num_post']=strip_tags($new_instance['num_post']);
		$instance['num_fecha']=strip_tags($new_instance['num_fecha']);
		$instance['tipo_fecha']=strip_tags($new_instance['tipo_fecha']);
		$instance['mostrar_fecha']=$new_instance['mostrar_fecha'];
		$instance['mostrar_vistas']=$new_instance['mostrar_vistas'];
		return $instance;
	}

	function widget($args, $instance) {
		extract($args);
		$title=apply_filters('widget_title',$instance['title']);
		$num_post=$instance['num_post'];
		$num_fecha=$instance['num_fecha'];
		$tipo_fecha=$instance['tipo_fecha'];
		$mostrar_fecha = $instance['mostrar_fecha'] ? 'true' : 'false';
		$mostrar_vistas = $instance['mostrar_vistas'] ? 'true' : 'false';
		echo $before_widget;
		if($title)
			echo $before_title.$title.$after_title;
				$ars = array(
					'post_type'      => 'post',
					'post_status'    => 'publish',	
					'order' => 'DESC',
				 	'orderby' => 'meta_value_num',
				 	'meta_key' => 'post_views_count',
				 	'date_query' => array(
					  	array(
					  		'column' => 'post_date_gmt',
					        'after' => $num_fecha.' '.$tipo_fecha.' ago'
					    ),
					    
				  	),

				  	'posts_per_page' => $num_post, 
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
										the_post_thumbnail( 'home_thumb'); 
									}else{?>
										<img src="<?php echo IMAGENES; ?>/default-slider.jpg" alt="<?php the_title(); ?>">
								<?php } ?>
							</a>
							<h3>
								<a href="<?php the_permalink();?>" title="<?php the_title(); ?>">
									<?php the_title(); ?>
								</a>
							</h3>
							<?php 
							if($mostrar_fecha === 'true'): ?>
								<em class="float-left date">
									<?php the_time(' j F , Y'); ?>
								</em>
							<?php endif; //cierra el if mostrar fecha 
							if($mostrar_vistas === 'true'): ?>
								<em class="float-right date">
									<span class="icon-ojo"></span>	<?php echo getPostViews(get_the_ID()); ?>
								</em>
							<?php endif; ?>	
						</div>
					<?php endwhile;
				endif;	 
				wp_reset_query(); ?>

		<?php 
		echo $after_widget;

	}

}
register_widget('Mas_vistos');
?>