<?php
	define('DIRECTORIO', get_bloginfo('stylesheet_directory'));
	define('IMAGENES', DIRECTORIO.'/images');
	define('DIRFUNCTIONS', TEMPLATEPATH.'/functions/');

	/*esconde la barra de administracion*/
	show_admin_bar( false );

	/*Cargar funciones*/
	require_once (DIRFUNCTIONS.'post-views.php');
	require_once (DIRFUNCTIONS.'post-relacionados.php');
	require_once (DIRFUNCTIONS.'widgets.php');

	/*Registrar sidebar*/
	if(function_exists('register_sidebar')){
		register_sidebar(
			array(
				'name' => 'sidebar',
				'id' => 'sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
				'before_title' => '<h3 class="widgettitle">',
				'after_title' => '</h3>',
			));
		register_sidebar(
			array(
				'name' => 'Destacados',
				'id'=>'destacados',
				'before_widget' => '<div id="%1$s" class="widget %2$s">',
				'after_widget' => '</div>',
				'before_title' => '<h3 class="widgettitle">',
				'after_title' => '</h3>',
			));
	}
	/*Registrar menu*/
	function register_menus() {
	  register_nav_menus(
	    array(
	      'principal-menu' => __( 'Menu Principal' ),
	      'extra-menu' => __( 'Extra Menu' )
	    )
	  );
	}
	add_action( 'init', 'register_menus' );

	/*Activar thumpnails*/
	if(function_exists(add_theme_support)){
		add_theme_support( 'post-thumbnails' );
		
	}
	/*	Tamaño del thumbnais */	
	add_image_size( 'home_thumb', 350, 175,array( 'center', 'top' ) ); 
	add_image_size( 'slider_thumb', 400,250,array( 'center', 'top' ) ); 
	add_image_size( 'destacado_thumb', 666,array( 'center', 'top' ) ); 


	/*scrool infinito*/
	function load_more(){
		$offset =$_POST['offset'];
		$number_of_posts = get_option( "posts_per_page");
		$args = array(
			"posts_per_page"=>$number_of_posts,
			"offset"=>$offset,
			'post_type' => 'post',
			'post_status'      => 'publish',
			'suppress_filters' => true 
			);
		$posts = get_posts($args);
		foreach($posts as $post){
			setup_postdata( $post );
			global $post;
			if($post){
			?>
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
			<?php
			}
		}
		die();
	}

	add_action("wp_ajax_nopriv_load_more","load_more");
	add_action("wp_ajax_load_more","load_more");
?>