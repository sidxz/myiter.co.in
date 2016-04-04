<?php
if (! function_exists("theme_homepage_shortcode_generator")){
	function theme_homepage_shortcode_generator(){
		require_once (THEME_HELPERS . '/homepageShortcodesGenerator.php');
		$shortcodes = include(THEME_ADMIN_METABOXES . '/shortcode_options.php');

		echo '<tr colspan="2"><td>';
		echo '<table cellspacing="0" class="widefat homepage-shortcode"><thead><tr><th scope="row">'.__('Shortcode Generator','flashxml_admin').'</th></tr></thead><tbody><tr><td>';
		
		new homepageShortcodesGenerator($shortcodes);

		echo '</td></tr></tbody></table>';
		echo '</td></tr>';
	}
}
$options = array(
	array(
		"name" => __("Homepage",'flashxml_admin'),
		"type" => "title"
	),
	array(
		"name" => __("Homepage General",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Home Page",'flashxml_admin'),
			"desc" => __("The page you choose here will display in the homepage. You do not needed to specify a page for homepage unless you want multi-language support.",'flashxml_admin'),
			"id" => "home_page",
			"target" => 'page',
			"default" => "",
			"prompt" => __("None",'flashxml_admin'),
			"type" => "select",
		),
		array(
			"name" => __("Layout",'flashxml_admin'),
			"desc" => "",
			"id" => "layout",
			"default" => 'full',
			"options" => array(
				"full" => __('Full Width','flashxml_admin'),
				"right" => __('Right Sidebar','flashxml_admin'),
				"left" => __('Left Sidebar','flashxml_admin'),
			),
			"type" => "select",
		),
	array(
		"type" => "end"
	),
	array(
		"name" => __("Homepage Content Editor",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Homepage Content Editor",'flashxml_admin'),
			"desc" => __("The text you enter here will display on the homepage",'flashxml_admin'),
			"id" => "content",
			"default" => "",
			"type" => "editor"
		),
		array(
			"id" => __("shortcode_generator",'flashxml_admin'),
			"layout" => false,
			"function" => "theme_homepage_shortcode_generator",
			"default" => false,
			"type" => "custom"
		),
	array(
		"type" => "end"
	),
);
return array(
	'auto' => true,
	'name' => 'homepage',
	'options' => $options
);