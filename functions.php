<?php
	define('DIRECTORIO', get_bloginfo('stylesheet_directory'));
	define('IMAGENES', DIRECTORIO.'/images');
	define('DIRFUNCTIONS', TEMPLATEPATH.'/functions/');

	/*Cargar funciones*/
	require_once (DIRFUNCTIONS.'post-views.php');
	require_once (DIRFUNCTIONS.'post-relacionados.php');
	require_once (DIRFUNCTIONS.'widgets.php');

	/*Registrar sidebar*/
	if(function_exists('register_sidebar')){
		register_sidebar(
			array(
				'name' => 'sidebar',
				'before_widget' => '<li id="%1$s" class="widget %2$s">',
				'after_widget' => '</li>',
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
	add_theme_support( 'post-thumbnails' );
	/*	Tamaño del thumbnais */	
	add_image_size( 'home_thumb', 600, 300,array( 'center', 'top' ) ); 
	add_image_size( 'slider_thumb', 1360,704,array( 'center', 'top' ) ); 
	add_image_size( 'destacado_thumb', 666,array( 'center', 'top' ) ); 
?>