<?php

$options = array (
	
	array(	"name" => "config",
			"format" => "help"),

	array(	"name" => "General Settings",
			"format" => "title"),
	
	array(	"format" => "start",
			"title" => "Skins"),
	
		array(	"name" => "Choose a skin",
					"desc" => "Select the skin you want to use. (default = Pink)",
					"id" => $shortname."skinName",
					"default" => "1",
					"options" => array('blue'=>'Blue','blue2'=>'Blue2','green'=>'Green','orange'=>'Orange','pink'=>'Pink','purple'=>'Purple', 'red'=>'Red', 'red2'=>'Red2', 'yellow'=>'Yellow'),
					"format" => "select"),	
					
	array(	"format" => "end"),
	
	array(	"format" => "start",
			"title" => "Logo"),
		
		array(	"name" => "Main  Logo",
				"desc" => "Enter the full URL to your logo file. (i.e., http://www.domain.com/wp-content/uploads/logo.png)",
				"id" => $shortname."MainlogoImage",
				"default" => "",
				"format" => "text"),
		
		array(	"name" => "Footer Logo",
				"desc" => "Enter the full URL to your footer logo file. (i.e., http://www.domain.com/wp-content/uploads/logo.png)",
				"id" => $shortname."FooterlogoImage",
				"default" => "",
				"format" => "text"),

	array(	"format" => "end"),
	
	array(	"format" => "start",
			"title" => "Miscellaneous"),

		array(	"name" => "Append to Browser Title",
				"desc" => "This text will be appended to the title shown in the browser's titlebar. You should include a separator first, i.e., \"- My Site Name\".<br /><strong>Note:</strong> This text will only apear on sub-pages and not the home page of your site.",
				"id" => $shortname."appendToPageTitle",
				"default" => "",
				"format" => "text"),
		array(	"name" => "Copyright / Legal",
				"desc" => "Add your own copyright and legal notice to the footer.",
				"id" => $shortname."legalText",
				"default" => 
					'&copy; Copyright 2011 by Flashxml.net',
				"format" => "textarea"),	
		array(	"name" => "404 Error",
				"desc" => "Add your own content to display on 404 error pages.",
				"id" => $shortname."custom404",
				"default" => "",
				"format" => "textarea"),	
		array(	"name" => "Google Analytics",
				"desc" => "Enter your Google Analytics scripts or other tracking scripts to append before the &lt;/body&gt; tab..",
				"id" => $shortname."googleAnalytics",
				"default" => "",
				"format" => "textarea"),

	array(	"format" => "end")
	
);

?>