<?php 
function optionsframework_option_name() {
	return 'options-framework-theme';
}
function optionsframework_options() {
	// Pull all the categories into an array
			$color_categories = array();
			$color_categories_obj = get_categories();
			foreach ($color_categories_obj as $category) {
				$color_categories[$category->cat_ID] = $category->cat_name;
			}

			// Pull all the categories into an array
			$options_categories = array();
			$options_categories_obj = get_categories();
			foreach ($options_categories_obj as $category) {
				$options_categories[$category->cat_ID] = $category->cat_name;
			}
			$reciente=array(
					'recientes'=>'RECIENTES'
			);
			$masvisto=array(
				'semana'=>'DE LA SEMANA',
				'mes'=>'DEL MES',
				'anio'=>'DEL AÑO',
			);
			$optionGroup=array(
					'RECIENTES'=>$reciente,
					'MAS VISTO'=>$masvisto,
					'CATEGORIAS'=>$options_categories
			);
			$cantidadpost=array();	
			for ($i=2; $i < 8; $i++) { 
				$cantidadpost[$i]=$i;	
			}
	/********************* 
		GENREALES
	**********************/
	$options[] = array(
     'name' => __('General', 'options_framework_theme'),
     'type' => 'heading');

		//Cambio del logo
			$options[] = array(
			    'name' => __('Logo', 'options_check'),
			    'desc' => __('Selecciona la imagen de logo a mostrar en la web.', 'options_check'),
			    'id' => 'logo_uploader',
			    'type' => 'upload');

			$options[] = array(
			    'name' => __('Google analytics', 'options_check'),
			    'desc' => __('Introduce el codigo de seguimiento de google analytics.', 'options_check'),
			    'id' => 'google_analytics',
			    'placeholder' => 'UA-XXXXX-X',
			    'class' => 'mini',
				'type' => 'text');
			$wp_editor_settings = array(
				'wpautop' => true, // Default
				'textarea_rows' => 5,
				'tinymce' => array( 'plugins' => 'wordpress' )
			);
			$options[] = array(
				'name' => __( 'Adsense: Skyscraper horizontal grande (970 x 90)', 'theme-textdomain' ),
				'desc' => __( 'Introduce el codigo de Adsense para el anuncio en la parte superior. Skyscraper (970 x 90)', 'theme-textdomain' ),
				'id' => 'anuncio_970x90',
				'type' => 'editor',
				'settings' => $wp_editor_settings
			);
	/********************* 
		Social
	**********************/
	$options[] = array(
     'name' => __('Redes Sociales', 'options_framework_theme'),
     'type' => 'heading');

			$options[] = array(
			    'name' => __('URL Facebook', 'options_check'),
			    'desc' => __('Introduce la url de facebook.', 'options_check'),
			    'id' => 'url_facebook',
			    'placeholder' => 'http://www.facebook.com/',
			    'type' => 'text');

			$options[] = array(
			    'name' => __('URL Twitter', 'options_check'),
			    'desc' => __('Introduce la url de twitter.', 'options_check'),
			    'id' => 'url_twitter',
			    'placeholder' => 'http://www.twitter.com/',
			    'type' => 'text');

			$options[] = array(
			    'name' => __('URL Pinterest', 'options_check'),
			    'desc' => __('Introduce la url de pinterest.', 'options_check'),
			    'id' => 'url_pinterest',
			    'placeholder' => 'http://www.pinterest.com/',
			    'type' => 'text');

			$options[] = array(
			    'name' => __('URL LinkedIn', 'options_check'),
			    'desc' => __('Introduce la url de linkedin.', 'options_check'),
			    'id' => 'url_linkedin',
			    'placeholder' => 'http://www.linkedin.com/',
			    'type' => 'text');

			$options[] = array(
			    'name' => __('URL RSS', 'options_check'),
			    'desc' => __('Introduce la url de RSS.', 'options_check'),
			    'id' => 'url_rss',
			    'std' => get_bloginfo_rss('rss2_url'),
			    'placeholder' => get_bloginfo_rss('rss2_url'),
			    'type' => 'text');

			
	/********************* 
		Social
	**********************/
	$options[] = array(
     'name' => __('Categorias', 'options_framework_theme'),
     'type' => 'heading');
	

			foreach ($color_categories as $id_cat => $name_cat) {
				$options[] = array(
					'name' => __( $name_cat, 'theme-textdomain' ),
					'desc' => __( "Selecciona el color del enlace de la categoria ".$name_cat, 'theme-textdomain' ),
					'id'=>'link-cat-'.$id_cat,
					'type' => 'color'
				);
			}
	/********************* 
		Slider
	**********************/
	$options[] = array(
     'name' => __('Slider', 'theme-textdomain'),
     'type' => 'heading');

	/*$options[] = array(
     'name' => __('Sdlkdjldkjdljdlider', 'theme-textdomain'),
     'type' => 'info');*/
			
			
			$options[] = array(
				'name' => __( 'Activar slider', 'theme-textdomain' ),
				'desc' => __( 'Marca si deseas activar el slider', 'theme-textdomain' ),
				'id' => 'slider-on',
				'std' => '1',
				'type' => 'checkbox'
			);

			$options[] = array(
					'name' => __( 'Post a mostrar', 'theme-textdomain' ),
					'desc' => __( 'Selecciona el numero de post a mostrar en el slider', 'theme-textdomain' ),
					'id' => 'num_post',
					'type' => 'select',
					'std' => '3',
					'class' => 'hidden',
					'options' => $cantidadpost
				);

			if ( $optionGroup ) {
				$options[] = array(
					'name' => __( 'Selecciona una opción', 'theme-textdomain' ),
					'desc' => __( 'Selelcciona el tipo de contenido para el slider', 'theme-textdomain' ),
					'id' => 'contenido_slider',
					'type' => 'selectgroup',
					'std' => 'mes',
					'class' => 'hidden',
					'options' => $optionGroup
				);
			}

	
	/********************* 
		Comentarios facebook
	**********************/
	$options[] = array(
     'name' => __('Comentarios de facebook', 'options_framework_theme'),
     'type' => 'heading');

			$options[] = array(
			    'name' => __('Aplication ID', 'options_check'),
			    'desc' => __('Introduce el ID de tu aplicacion de facebook.', 'options_check'),
			    'id' => 'aplication_id',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');

			$options[] = array(
			    'name' => __('ID usuario facebook', 'options_check'),
			    'desc' => __('Introduce el ID de tu cuenta de usuario para administrar los comentarios de facebook.', 'options_check'),
			    'id' => 'id_facebook_1',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');
			$options[] = array(
			    'name' => __('ID usuario facebook', 'options_check'),
			    'desc' => __('Introduce el ID de tu cuenta de usuario para administrar los comentarios de facebook.', 'options_check'),
			    'id' => 'id_facebook_2',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');
			$options[] = array(
			    'name' => __('ID usuario facebook', 'options_check'),
			    'desc' => __('Introduce el ID de tu cuenta de usuario para administrar los comentarios de facebook.', 'options_check'),
			    'id' => 'id_facebook_3',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');
			$options[] = array(
			    'name' => __('ID usuario facebook', 'options_check'),
			    'desc' => __('Introduce el ID de tu cuenta de usuario para administrar los comentarios de facebook.', 'options_check'),
			    'id' => 'id_facebook_4',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');
			$options[] = array(
			    'name' => __('ID usuario facebook', 'options_check'),
			    'desc' => __('Introduce el ID de tu cuenta de usuario para administrar los comentarios de facebook.', 'options_check'),
			    'id' => 'id_facebook_5',
			    'placeholder' => 'xxxxxxxxxx',
			    'class' => 'mini',
				'type' => 'text');
	return $options;
}

?>