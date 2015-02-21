<?php
 $absolute_path = explode('wp-content', $_SERVER['SCRIPT_FILENAME']);
 $wp_load = $absolute_path[0] . 'wp-load.php';
 require_once($wp_load);

  /*
  Do stuff like connect to WP database and grab user set values
  */

  header('Content-type: text/css');
  header('Cache-control: must-revalidate');
?>
<?php
	//header("Content-type: text/css; charset: UTF-8");
	//require '/../../../wp-load.php'; // load wordpress bootstrap, this is what I don't like
    $color_categories = array();
	$color_categories_obj = get_categories();

	
	foreach ($color_categories_obj as $category) {
		$color_categories[$category->cat_ID] = $category->cat_name;
	} 
	foreach ($color_categories as $id_cat => $name_cat) {
$get_color='link-cat-'.$id_cat;
$color=of_get_option($get_color,''); 
echo "a.".$get_color."{color:".$color.";}";
	}
?>
