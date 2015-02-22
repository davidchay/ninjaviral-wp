<?php
	define('DIRECTORIO', get_bloginfo('stylesheet_directory'));
	define('IMAGENES', DIRECTORIO.'/images');
	define('DIRFUNCTIONS', TEMPLATEPATH.'/functions/');
	define('INCLUYE', TEMPLATEPATH.'/inc/');

	/*esconde la barra de administracion*/
	show_admin_bar( false );

	/*Agregando scripts y estilos*/
	add_filter("wp_enqueue_scripts","scripts_y_stilos");
	function scripts_y_stilos(){
		//wp_enqueue_script( "jquery" );
		wp_deregister_script("jquery");
    	wp_register_script("jquery", get_template_directory_uri()."/js/jquery.min.js");
    	wp_enqueue_script("jquery");
		wp_register_script("main-js",  get_template_directory_uri()."/js/main.js", "jquery" );
		wp_enqueue_script("main-js");
		
		wp_enqueue_style( "main-css",  get_template_directory_uri()."/css/main.css" );

		if(is_home()){
			wp_register_script( "owl-carousel",  get_template_directory_uri()."/js/owl.carousel.min.js","jquery",true);
			wp_enqueue_script( "owl-carousel" );
			wp_register_script( "owl-config", get_template_directory_uri()."/js/owl-config.js","owl-carousel",true);
			wp_enqueue_script( "owl-config" );
			wp_enqueue_style( "carousel-css",  get_template_directory_uri()."/css/owl.carousel.css","carousel-css");
			wp_enqueue_style( "owl-theme-css",  get_template_directory_uri()."/css/owlTheme.css");
		}
		
		if(!is_single() && !is_page()){
			wp_register_script( "func-infinite-scroll",  get_template_directory_uri(). "/js/infinite-scroll.js", "jquery"  );
			wp_enqueue_script( "func-infinite-scroll" );
		}

		wp_enqueue_style('my-dynamic-css', get_stylesheet_directory_uri().'/inc/css.php');
		wp_enqueue_style( "Merriweather", '//fonts.googleapis.com/css?family=Merriweather:400,400italic,700,700italic,900italic,900,300italic,300', false, null);
		wp_enqueue_style( "Open-Sans", '//fonts.googleapis.com/css?family=Open+Sans', false, null);
	}
	/*Cargar funciones*/
	require_once (DIRFUNCTIONS.'post-views.php');
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
	      'principal-menu' => 'Menu Principal',
	      'footer-menu' => 'Menu en pie de pagina'
	    )
	  );
	}
	add_action( 'init', 'register_menus' );

	/*Activar paginacion*/
	add_theme_support( 'title-tag' );

	/*Activar thumpnails*/
	if(function_exists(add_theme_support)){
		add_theme_support( 'post-thumbnails' );
		
	}
	/*	Tamaño del thumbnais */	
	add_image_size( 'home_thumb', 350, 175,array( 'center', 'top' ) ); 
	add_image_size( 'slider_thumb', 400,250,array( 'center', 'top' ) ); 
	add_image_size( 'destacado_thumb', 666,array( 'center', 'top' ) ); 


	/*scrool infinito*/
	function wp_infinitepaginate(){
		$offset = $_POST['offset'];
		$posts_per_page  = get_option('posts_per_page');
	 	$args=array(
	 			//'post_type' => 'post',
	 			'posts_per_page'=>$posts_per_page,
                'offset'=>$offset
            );
	    # Load the posts
	    $posts=get_posts($args);
		global $post;
	    foreach ($posts as $post){
		setup_postdata($post);
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
							<a href="<?php echo get_category_link($category[0]->term_id); ?>" class="link-cat-<?php echo $category[0]->term_id;?>"><?php echo $category[0]->name;?></a><span class="desktop"> | POR <?php the_author_posts_link(); ?></span> | <span class="icon-ojo"></span> <?php echo getPostViews(get_the_ID()); ?></span>
						<h2 class="titulo_post">
							<a href="<?php the_permalink(); ?>" title="<?php the_title() ?>">
								<?php the_title(); ?>
							</a>
						</h2>
					</div>
				<?php 
			}
		}	
	    
	}
add_action('wp_ajax_infinite_scroll', 'wp_infinitepaginate');           // for logged in user
add_action('wp_ajax_nopriv_infinite_scroll', 'wp_infinitepaginate');    // if user not logged in

/*Opciones del theme*/
/*
 * Loads the Options Panel
 *
 * If you're loading from a child theme use stylesheet_directory
 * instead of template_directory
 */

define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/options-framework/' );
require_once dirname( __FILE__ ) . '/options-framework/options-framework.php';

// Loads options.php from child or parent theme
$optionsfile = locate_template( 'options.php' );
load_template( $optionsfile );

/*
 * This is an example of how to add custom scripts to the options panel.
 * This one shows/hides the an option when a checkbox is clicked.
 *
 * You can delete it if you not using that option
 */
add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );



function optionsframework_custom_scripts() { ?>

<script type="text/javascript">
jQuery(document).ready(function() {

	jQuery('#slider-on').click(function() {
  		jQuery('#section-num_post').fadeToggle(400);
  		jQuery('#section-contenido_slider').fadeToggle(400);
	});

	if (jQuery('#slider-on:checked').val() !== undefined) {
		jQuery('#section-num_post').show();
		jQuery('#section-contenido_slider').show();
	}

});
</script>

<?php
}

/*
 * This is an example of filtering menu parameters
 */

/*
function prefix_options_menu_filter( $menu ) {
	$menu['mode'] = 'menu';
	$menu['page_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_title'] = __( 'Hello Options', 'textdomain');
	$menu['menu_slug'] = 'hello-options';
	return $menu;
}

add_filter( 'optionsframework_menu', 'prefix_options_menu_filter' );
*/
?>