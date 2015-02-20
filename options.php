<?php 
function optionsframework_option_name() {
	return 'options-framework-theme';
}
function optionsframework_options() {
 	$options = array();

	/********************* 
		GENREALES
	**********************/
	$options[] = array(
     'name' => __('Configuración General', 'options_framework_theme'),
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
		AVANZADAS
	**********************/
	$options[] = array(
	     'name' => __('Configuración Avanzada', 'options_framework_theme'),
	     'type' => 'heading' );

			$options[] = array(
				'name' => __( 'Check to Show a Hidden Text Input', 'theme-textdomain' ),
				'desc' => __( 'Click here and see what happens.', 'theme-textdomain' ),
				'id' => 'example_showhidden',
				'type' => 'checkbox'
			);

			$options[] = array(
				'name' => __( 'Hidden Text Input', 'theme-textdomain' ),
				'desc' => __( 'This option is hidden unless activated by a checkbox click.', 'theme-textdomain' ),
				'id' => 'example_text_hidden',
				'std' => 'Hello',
				'class' => 'hidden',
				'type' => 'text'
			);
			
			 for($i=0;$i<3;$i++){
			 	$options[] = array(
			    'name' => __('URL LinkedIn', 'options_check'),
			    'desc' => __('Introduce la url de linkedin.', 'options_check'),
			    'id' => 'url_linkedin'.$i,
			    'placeholder' => 'http://www.linkedin.com/',
			    'type' => 'text');
			 }

	return $options;
}

?>