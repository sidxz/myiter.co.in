<?php
if (! function_exists("theme_footer_column_option")) {
	function theme_footer_column_option($value, $default) {
		
		echo '<script type="text/javascript" src="' . THEME_ADMIN_ASSETS_URI . '/js/theme-footer-column.js"></script>';
		echo '<div class="theme-footer-columns">';
		echo '<div>';
		echo '<a href="#" rel="1"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/1.png" /></a>';
		echo '<a href="#" rel="2"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/2.png" /></a>';
		echo '<a href="#" rel="3"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/3.png" /></a>';
		echo '<a href="#" rel="4"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/4.png" /></a>';
		echo '<a href="#" rel="5"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/5.png" /></a>';
		echo '<a href="#" rel="6"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/6.png" /></a>';
		echo '</div><div>';
		echo '<a href="#" rel="half_sub_half"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/half_sub_half.png" /></a>';
		echo '<a href="#"href="#"rel="half_sub_third"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/half_sub_third.png" /></a>';
		echo '<a href="#" rel="third_sub_third"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/third_sub_third.png" /></a>';
		echo '<a href="#" rel="third_sub_fourth"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/third_sub_fourth.png" /></a>';
		echo '</div><div>';
		echo '<a href="#" rel="sub_half_half"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/sub_half_half.png" /></a>';
		echo '<a href="#" rel="sub_third_half"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/sub_third_half.png" /></a>';
		echo '<a href="#" rel="sub_third_third"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/sub_third_third.png" /></a>';
		echo '<a href="#" rel="sub_fourth_third"><img src="' . THEME_ADMIN_ASSETS_URI . '/images/footer_column/sub_fourth_third.png" /></a>';
		echo '</div>';
		echo '</div>';
		echo '<input type="hidden" value="' . $default . '" name="' . $value['id'] . '" id="' . $value['id'] . '"/>';
	}
}
$options = array(
	array(
		"name" => __("Footer",'flashxml_admin'),
		"type" => "title"
	),
	array(
		"name" => __("Footer",'flashxml_admin'),
		"type" => "start"
	),
		array(
			"name" => __("Footer",'flashxml_admin'),
			"desc" => __("If you don't want display footer, turn off the button.",'flashxml_admin'),
			"id" => "footer",
			"default" => 1,
			"type" => "toggle"
		),
		array(
			"name" => __("Sub Footer",'flashxml_admin'),
			"desc" => __("If you don't want display sub footer, turn off the button.",'flashxml_admin'),
			"id" => "sub_footer",
			"default" => 1,
			"type" => "toggle"
		),
		array(
			"name" => __("Copyright Footer Text",'flashxml_admin'),
			"desc" => __("Enter the copyright text that you'd like to display in the footer",'flashxml_admin'),
			"id" => "copyright",
			"default" => "Copyright &copy; 2010 MyCompany.com. All Rights Reserved",
			"rows" => 3,
			"type" => "textarea"
		),
	array(
		"type" => "end"
	),
);
return array(
	'auto' => true,
	'name' => 'footer',
	'options' => $options
);