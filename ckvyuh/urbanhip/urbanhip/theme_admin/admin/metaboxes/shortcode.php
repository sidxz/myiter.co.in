<?php
require_once (THEME_HELPERS . '/shortcodesGenerator.php');
function theme_get_image_size(){
	$customs =  theme_get_option('image','customs');
	$sizes = array(
		"small" => __("Small",'flashxml_admin'),
		"medium" => __("Medium",'flashxml_admin'),
		"large" => __("Large",'flashxml_admin'),
	);
	if(!empty($customs)){
		$customs = explode(',',$customs);
		foreach($customs as $custom){
			$sizes[$custom] = ucfirst(strtolower($custom));
		}
	}
	return $sizes;
}

$config = array(
	'title' => __('Shortcode Generator','flashxml_admin'),
	'id' => 'shortcode',
	'pages' => array('page','post'),
	'callback' => '',
	'context' => 'normal',
	'priority' => 'high',
);
$shortcodes = include(THEME_ADMIN_METABOXES . '/shortcode_options.php');
new shortcodesGenerator($config,$shortcodes);