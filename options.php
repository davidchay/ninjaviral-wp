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
     'name' => __('Slider', 'options_framework_theme'),
     'type' => 'heading');
	
	/********************* 
		Comentarios facebook
	**********************/
	$options[] = array(
     'name' => __('Comentarios de facebook', 'options_framework_theme'),
     'type' => 'heading');

	return $options;
}

?>