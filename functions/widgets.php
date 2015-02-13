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
		<?php 
	}

	function update($new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=strip_tags($new_instance['title']);
		$instance['num_post']=strip_tags($new_instance['num_post']);
		return $instance;
	}

	function widget($args, $instance) {
		extract($args);
		$title=apply_filters('widget_title',$instance['title']);
		$num_post=$instance['num_post'];
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
		<?php 
	}

	function update($new_instance, $old_instance) {
		$instance=$old_instance;
		$instance['title']=strip_tags($new_instance['title']);
		$instance['num_post']=strip_tags($new_instance['num_post']);
		return $instance;
	}

	function widget($args, $instance) {
		extract($args);
		$title=apply_filters('widget_title',$instance['title']);
		$num_post=$instance['num_post'];
		echo $before_widget;
		if($title)
			echo $before_title.$title.$after_title;
				$date = array(
					  	array(
					  	  'column' => 'post_date_gmt',
					      'after' => '1 day ago',
					    ),
				  	);
				$ars = array(
				  'order' => 'DESC',
				  'orderby' => 'meta_value_num',
				  'meta_key' => 'post_views_count',
				  'date_query' => $date,
				  	'posts_per_page' => 3, 
				);
				$post_populares = new WP_Query($ars);
				//$post_populares->query('showposts='.$num_post);
				if($post_populares->have_posts()):
					while($post_populares->have_posts()):
						$post_populares->the_post();	?>
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
							<?php echo getPostViews(get_the_ID()); ?>
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