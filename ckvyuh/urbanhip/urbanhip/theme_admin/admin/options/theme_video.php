<?php 
$options = array(
	array(
		"name" => __("Video Sizes",'flashxml_admin'),
		"desc" => __("The options listed below determine the dimensions in pixels to use in the shortcode of videos.",'flashxml_admin'),
		"type" => "title"
	),
	array(
		"name" => __("Flash",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Width",'flashxml_admin'),
			"desc" => "",
			"id" => "flash_width",
			"default" => 630,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
		array(
			"name" => __("Height",'flashxml_admin'),
			"desc" => "",
			"id" => "flash_height",
			"default" => 355,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
	array(
		"type" => "end"
	),
	array(
		"name" => __("YouTube",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Width",'flashxml_admin'),
			"desc" => "",
			"id" => "youbube_width",
			"default" => 630,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
		array(
			"name" => __("Height",'flashxml_admin'),
			"desc" => "",
			"id" => "youbube_height",
			"default" => 380,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
	array(
		"type" => "end"
	),
	array(
		"name" => __("Vimeo",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Width",'flashxml_admin'),
			"desc" => "",
			"id" => "vimeo_width",
			"default" => 630,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
		array(
			"name" => __("Height",'flashxml_admin'),
			"desc" => "",
			"id" => "vimeo_height",
			"default" => 355,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
	array(
		"type" => "end"
	),
	array(
		"name" => __("Dailymotion",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Width",'flashxml_admin'),
			"desc" => "",
			"id" => "dailymotion_width",
			"default" => 630,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
		array(
			"name" => __("Height",'flashxml_admin'),
			"desc" => "",
			"id" => "dailymotion_height",
			"default" => 355,
			"min" => 0,
			"max" => 960,
			"unit" => 'px',
			"type" => "range"
		),
	array(
		"type" => "end"
	),
);
return array(
	'auto' => true,
	'name' => 'video',
	'options' => $options
);