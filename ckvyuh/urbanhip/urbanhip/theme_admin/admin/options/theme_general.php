<?php
$options = array(
	array(
		"name" => __("General",'flashxml_admin'),
		"type" => "title",
		"desc" => theme_check_message(),
	),
	array(
		"name" => __("Logo General",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Header Height",'flashxml_admin'),
			"desc" => "",
			"id" => "header_height",
			"min" => "60",
			"max" => "300",
			"step" => "1",
			"unit" => 'px',
			"default" => "90",
			"type" => "range"
		),
		array(
			"name" => __("Display Custom Logo",'flashxml_admin'),
			"desc" => sprintf(__('If this option is on, you should fill the text field below. Or you should define "Site Title" in <a href="%s/wp-admin/options-general.php">Settings->General</a> instead of a logo
image.','flashxml_admin'),get_option('siteurl')),
			"id" => "display_logo",
			"default" => 0,
			"type" => "toggle"
		),
		array(
			"name" => __("Custom Logo",'flashxml_admin'),
			"desc" =>__( "Paste the full URL (include <code>http://</code>) of your custom logo here or you can insert the image through the button.",'flashxml_admin'),
			"id" => "logo",
			"default" => "",
			"type" => "upload"
		),
		array(
			"name" => __("Display Site Description",'flashxml_admin'),
			"desc" => sprintf(__('If you disable custom logo, you can choose whether to display <a href="%s/wp-admin/options-general.php">Tagline</a> after Site Title.','flashxml_admin'),get_option('siteurl')),
			"id" => "display_site_desc",
			"default" => 1,
			"type" => "toggle"
		),
		array(
			"name" => __("Logo Bottom",'flashxml_admin'),
			"desc" => "",
			"id" => "logo_bottom",
			"min" => "-50",
			"max" => "50",
			"step" => "1",
			"unit" => 'px',
			"default" => "20",
			"type" => "range"
		),
	array(
		"type" => "end"
	),
		array(
			"name" => __("Excluded Pages From Menu",'flashxml_admin'),
			"desc" => __("If Wordpress Built-in Menu is off, we will show all pages except pages selected below in the menu.",'flashxml_admin'),
			"id" => "excluded_pages",
			"default" => array(),
			"target" => 'page',
			"prompt" => __("Choose page..",'flashxml_admin'),
			"type" => "multidropdown",
		),
	array(
		"type" => "end"
	),
	array(
		"name" => __("Page General",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Custom Favicon",'flashxml_admin'),
			"desc" => __("Paste the full URL (include <code>http://</code>) of your custom favicon here, or you can insert the icon through the button.",'flashxml_admin'),
			"id" => "custom_favicon",
			"default" => '',
			"button" => 'Insert Icon',
			"type" => 'upload',
		),
		array(
			"name" => __("Disable Breadcrumbs",'flashxml_admin'),
			"desc" => __("If this option is on, you'll globally disable your website's breadcrumb navigation.",'flashxml_admin'),
			"id" => "disable_breadcrumb",
			"default" => 0,
			"type" => "toggle"
		),
	array(
		"type" => "end"
	),	
	array(
		"name" => __("Google Analytics Code",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Google Analytics Code",'flashxml_admin'),
			"desc" => __("Paste your <a href='http://www.google.com/analytics/' target='_blank'>analytics code</a> here, it will get applied to each page.",'flashxml_admin'),
			"id" => "analytics",
			"default" => "",
			"type" => "textarea"
		),
	array(
		"type" => "end"
	),

	array(
		"name" => __("Custom CSS",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Custom CSS",'flashxml_admin'),
			"desc" => '',
			"id" => "custom_css",
			"default" => "",
			'rows' => '10',
			"type" => "textarea"
		),
	array(
		"type" => "end"
	),
);
if(defined('ICL_SITEPRESS_VERSION')){
	$options[]= array(
		"name" => __("WPML",'flashxml_admin'),
		"type" => "start"
	);
	$options[]= array(
		"name" => __("Enable WPML Flags",'flashxml_admin'),
		"desc" => __("If you want to display a language flag lists in header, please turn on the toggle.",'flashxml_admin'),
		"id" => "enable_wpml_flags",
		"default" => 0,
		"type" => "toggle"
	);
	$options[] = array(
		"type" => "end"
	);
}
return array(
	'auto' => true,
	'name' => 'general',
	'options' => $options
);