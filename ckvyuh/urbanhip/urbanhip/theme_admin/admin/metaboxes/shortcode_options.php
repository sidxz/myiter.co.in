<?php
return array(
	array(
		"name" => __("Columns",'flashxml_admin'),
		"value" => "columns",
		"options" => array(
			array(
				"name" => __("Type",'flashxml_admin'),
				"id" => "type",
				"default" => '0',
				"options" => array(
					"one_half" => 'One Half',
					"one_half_last" => 'One Half Last',
					"one_third" => 'One Third',
					"one_third_last" => 'One Third Last',
					"two_third" => 'Two Third',
					"two_third_last" => 'Two Third Last',
					"one_fourth" => 'One Fourth',
					"one_fourth_last" => 'One Fourth Last',
					"three_fourth" => 'Three Fourth',
					"three_fourth_last" => 'Three Fourth Last',
					"one_fifth" => 'One Fifth',
					"one_fifth_last" => 'One Fifth Last',
					"two_fifth" => 'Two Fifth',
					"two_fifth_last" => 'Two Fifth Last',
					"three_fifth" => 'Three Fifth',
					"three_fifth_last" => 'Three Fifth Last',			
					"four_fifth" => 'Four Fifth',
					"four_fifth_last" => 'Four Fifth Last',
					"one_sixth" => 'One Sixth',
					"one_sixth_last" => 'One Sixth Last',
					"five_sixth" => 'Five Sixth',
					"five_sixth_last" => 'Five Sixth Last',
				),
				"type" => "select",
			),
			array(
				"name" => __("Content",'flashxml_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Layouts",'flashxml_admin'),
		"value" => "layouts",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Two Column Layout",'flashxml_admin'),
				"value" => "one_half_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Column Layout",'flashxml_admin'),
				"value" => "one_third_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_third'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_third_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Four Column Layout",'flashxml_admin'),
				"value" => "one_fourth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth_last'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Five Column Layout",'flashxml_admin'),
				"value" => "one_fifth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth_last'),
						"id" => "5",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Six Column Layout",'flashxml_admin'),
				"value" => "one_sixth_layout",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "5",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth_last'),
						"id" => "6",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Third - Two Third",'flashxml_admin'),
				"value" => "one_third_two_third",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Two_third_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Two Third - One Third",'flashxml_admin'),
				"value" => "two_third_one_third",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Two_third'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_third_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - Three Fourth",'flashxml_admin'),
				"value" => "one_fourth_three_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Three_fourth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Fourth - One Fourth",'flashxml_admin'),
				"value" => "three_fourth_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Three_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - One Fourth - One Half",'flashxml_admin'),
				"value" => "one_fourth_one_fourth_one_half",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fourth - One Half - One Fourth",'flashxml_admin'),
				"value" => "one_fourth_one_half_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Half - One Fourth - One Fourth",'flashxml_admin'),
				"value" => "one_half_one_fourth_one_fourth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fourth_last'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Four Fifth - One Fifth",'flashxml_admin'),
				"value" => "four_fifth_one_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Four_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Fifth - Four Fifth",'flashxml_admin'),
				"value" => "one_fifth_four_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Four_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Two Fifth - Three Fifth",'flashxml_admin'),
				"value" => "two_fifth_three_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Two_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Three_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Three Fifth - Two Fifth",'flashxml_admin'),
				"value" => "three_fifth_two_fifth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Three_fifth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Two_Fifth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Sixth - Five Sixth",'flashxml_admin'),
				"value" => "one_sixth_five_sixth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Five_sixth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Five Sixth - One Sixth",'flashxml_admin'),
				"value" => "five_sixth_one_sixth",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'Five_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth_last'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("One Sixth - One Sixth - One Sixth - One Half",'flashxml_admin'),
				"value" => "one_sixth_one_sixth_one_sixth_one_half",
				"options" => array (
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "1",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "2",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_sixth'),
						"id" => "3",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => sprintf(__("%s Content",'flashxml_admin'),'One_half_last'),
						"id" => "4",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
		),
	),
	array(
		"name" => __("Typography",'flashxml_admin'),
		"value" => "typography",
		"sub" => true,
		"options" => array(
			array(
				"name" => sprintf(__("Drop Cap %s",'flashxml_admin'),1),
				"value" => "dropcap1",
				"options" => array (
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'flashxml_admin'),2),
				"value" => "dropcap2",
				"options" => array (
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'flashxml_admin'),3),
				"value" => "dropcap3",
				"options" => array (
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => sprintf(__("Drop Cap %s",'flashxml_admin'),4),
				"value" => "dropcap4",
				"options" => array (
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
				)
			),
			array(
				"name" => __("Block Quotes",'flashxml_admin'),
				"value" => "blockquote",
				"options" => array (
					array(
						"name" => __("Align (optional)",'flashxml_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"left" => __('Left','flashxml_admin'),
							"right" => __('Right','flashxml_admin'),
							"center" => __('Center','flashxml_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Cite (optional)",'flashxml_admin'),
						"id" => "cite",
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Pre & Code",'flashxml_admin'),
				"value" => "pre_code",
				"options" => array (
					array(
						"name" => __("Type",'flashxml_admin'),
						"id" => "type",
						"default" => 'code',
						"options" => array(
							"pre" => 'Pre',
							"code" => 'Code',
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Styled List",'flashxml_admin'),
				"value" => "styledlist",
				"options" => array (
					array(
						"name" => __("Style",'flashxml_admin'),
						"id" => "style",
						"default" => 'list1',
						"options" => array(
							"list1" => 'list1',
							"list2" => 'list2',
							"list3" => 'list3',
							"list4" => 'list4',
							"list5" => 'list5',
							"list6" => 'list6',
							"list7" => 'list7',
							"list8" => 'list8',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Icon Text",'flashxml_admin'),
				"value" => "icon",
				"options" => array (
					array(
						"name" => __("Style",'flashxml_admin'),
						"id" => "style",
						"default" => 'email',
						"options" => array(
							"globe" => 'globe',
							"home" => 'home',
							"email" => 'email',
							"user" => 'user',
							"multiuser" => 'multiuser',
							"id" => 'id',
							"addressbook" => 'addressbook',
							"phone" => 'phone',
							"cellphone" => 'cellphone',
							"link" => 'link',
							"chain" => 'chain',
							"calendar" => 'calendar',
							"tag" => 'tag',
							"download" => 'download',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => "Icon Link",
				"value" => "icon_link",
				"options" => array (
					array(
						"name" => __("Style",'flashxml_admin'),
						"id" => "style",
						"default" => 'email',
						"options" => array(
							"globe" => 'globe',
							"home" => 'home',
							"email" => 'email',
							"user" => 'user',
							"multiuser" => 'multiuser',
							"id" => 'id',
							"addressbook" => 'addressbook',
							"phone" => 'phone',
							"cellphone" => 'cellphone',
							"link" => 'link',
							"chain" => 'chain',
							"calendar" => 'calendar',
							"tag" => 'tag',
							"download" => 'download',
						),
						"type" => "select",
					),
					array(
						"name" => __("Color (optional)",'flashxml_admin'),
						"id" => "color",
						"default" => "",
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"black" => 'Black',
							"gray" => 'Gray',
							"red" => 'Red',
							"yellow" => 'Yellow',
							"blue" => 'Blue',
							"pink" => 'Pink',
							"green" => 'Green',
							"rosy" => 'Rosy',
							"orange" => 'Orange',
							"magenta" => 'Magenta',
						),
						"type" => "select",
					),
					array(
						"name" => __("Href",'flashxml_admin'),
						"id" => "href",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" => __("Text",'flashxml_admin'),
						"id" => "text",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Highlight",'flashxml_admin'),
				"value" => "highlight",
				"options" => array (
					array(
						"name" => __("Type (optional)",'flashxml_admin'),
						"id" => "type",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"light" => __("light",'flashxml_admin'),
							"dark" => __("dark",'flashxml_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			)
		),
	),
	array(
		"name" => __("Buttons",'flashxml_admin'),
		"value" => "buttons",
		"options" => array(
			array(
				"name" => __("Id (optional)",'flashxml_admin'),
				"id" => "id",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Class (optional)",'flashxml_admin'),
				"id" => "class",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Size",'flashxml_admin'),
				"id" => "size",
				"default" => 'medium',
				"options" => array(
					"small" => __("Small",'flashxml_admin'),
					"medium" => __("Medium",'flashxml_admin'),
					"large" => __("Large",'flashxml_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Align (optional)",'flashxml_admin'),
				"id" => "align",
				"default" => '',
				"prompt" => __("Choose one..",'flashxml_admin'),
				"options" => array(
					"left" => __('Left','flashxml_admin'),
					"right" => __('Right','flashxml_admin'),
					"center" => __('Center','flashxml_admin'),
				),
				"type" => "select",
			),
			array (
				"name" => __("Full",'flashxml_admin'),
				"id" => "full",
				"default" => false,
				"type" => "toggle"
			),
			array(
				"name" => __("Link (optional)",'flashxml_admin'),
				"id" => "link",
				"default" => "",
				"type" => "text",
			),
			array(
				"name" => __("Link Target (optional)",'flashxml_admin'),
				"id" => "linkTarget",
				"default" => '',
				"prompt" => __("Choose one..",'flashxml_admin'),
				"options" => array(
					"_blank" => __('Load in a new window','flashxml_admin'),
					"_self" => __('Load in the same frame as it was clicked','flashxml_admin'),
					"_parent" => __('Load in the parent frameset','flashxml_admin'),
					"_top" => __('Load in the full body of the window','flashxml_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Color (optional)",'flashxml_admin'),
				"id" => "color",
				"default" => "",
				"prompt" => __("Choose one..",'flashxml_admin'),
				"options" => array(
					"black" => 'Black',
					"gray" => 'Gray',
					"white" => 'White',
					"red" => 'Red',
					"yellow" => 'Yellow',
					"blue" => 'Blue',
					"pink" => 'Pink',
					"green" => 'Green',
					"rosy" => 'Rosy',
					"orange" => 'Orange',
					"magenta" => 'Magenta',
				),
				"type" => "select",
			),
			array(
				"name" => __("Background Color (optional)",'flashxml_admin'),
				"id" => "bgColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Text Color (optional)",'flashxml_admin'),
				"id" => "textColor",
				"default" => "",
				"type" => "color"
			),
			array(
				"name" => __("Text",'flashxml_admin'),
				"id" => "text",
				"default" => "",
				"type" => "text",
			),
		),
	),
	array(
		"name" => __("Styled Boxes",'flashxml_admin'),
		"value" => "styledboxes",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Message Boxes",'flashxml_admin'),
				"value" => "messageboxes",
				"options" => array (
					array(
						"name" => __("Type",'flashxml_admin'),
						"id" => "type",
						"default" => 'info',
						"options" => array(
							"info" => __("Info",'flashxml_admin'),
							"success" => __("Success",'flashxml_admin'),
							"error" => __("Error",'flashxml_admin'),
							"error_msg" => __("Error Msg",'flashxml_admin'),
							"notice" => __("Notice",'flashxml_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
				)
			),
			array(
				"name" => __("Framed Box",'flashxml_admin'),
				"value" => "framed_box",
				"options" => array (
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Background Color (optional)",'flashxml_admin'),
						"id" => "bgColor",
						"default" => "",
						"type" => "color"
					),
					array(
						"name" => __("Text Color (optional)",'flashxml_admin'),
						"id" => "textColor",
						"default" => "",
						"type" => "color"
					),
					array (
						"name" => __("Rounded",'flashxml_admin'),
						"id" => "rounded",
						"default" => false,
						"type" => "toggle"
					),
				)
			),
			array(
				"name" => __("Note Box",'flashxml_admin'),
				"value" => "note_box",
				"options" => array (
					array(
						"name" => __("title (optional)",'flashxml_admin'),
						"id" => "title",
						"default" => "",
						"type" => "text"
					),
					array(
						"name" => __("Content",'flashxml_admin'),
						"id" => "content",
						"default" => "",
						"type" => "textarea"
					),
					array(
						"name" =>  __("Align (optional)",'flashxml_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"left" => __('left','flashxml_admin'),
							"right" => __('right','flashxml_admin'),
							"center" => __('center','flashxml_admin'),
						),
						"type" => "select",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => '0',
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
				)
			),
		),
	),
	array(
		"name" => __("Tables",'flashxml_admin'),
		"value" => "tables",
		"options" => array(
			array(
				"name" => __("Content",'flashxml_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Tabs",'flashxml_admin'),
		"value" => "tabs",
		"options" => array(
			array(
				"name" => __("Type",'flashxml_admin'),
				"id" => "type",
				"default" => 'tabs',
				"options" => array(
					"tabs" => __("Framed Tabs",'flashxml_admin'),
					"mini_tabs" => __("Mini Tabs",'flashxml_admin'),
				),
				"type" => "select",
			),
			array(
				"name" => __("Number of tabs",'flashxml_admin'),
				"id" => "number",
				"min" => "1",
				"max" => "8",
				"step" => "1",
				"default" => "2",
				"type" => "range"
			),
			array(
				"name" => sprintf(__("Tab %d Title",'flashxml_admin'),1),
				"id" => "title_1",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),1),
				"id" => "content_1",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),2),
				"id" => "title_2",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),2),
				"id" => "content_2",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),3),
				"id" => "title_3",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),3),
				"id" => "content_3",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),4),
				"id" => "title_4",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),4),
				"id" => "content_4",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),5),
				"id" => "title_5",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),5),
				"id" => "content_5",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Tab %d Title",'flashxml_admin'),6),
				"id" => "title_6",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),6),
				"id" => "content_6",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),7),
				"id" => "title_7",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),7),
				"id" => "content_7",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" =>  sprintf(__("Tab %d Title",'flashxml_admin'),8),
				"id" => "title_8",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Tab %d Content",'flashxml_admin'),8),
				"id" => "content_8",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Accordion",'flashxml_admin'),
		"value" => "accordion",
		"options" => array(
			array(
				"name" => __("Number of pans",'flashxml_admin'),
				"id" => "number",
				"min" => "1",
				"max" => "8",
				"step" => "1",
				"default" => "2",
				"type" => "range"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),1),
				"id" => "title_1",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),1),
				"id" => "content_1",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),2),
				"id" => "title_2",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),2),
				"id" => "content_2",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),3),
				"id" => "title_3",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),3),
				"id" => "content_3",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),4),
				"id" => "title_4",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),4),
				"id" => "content_4",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),5),
				"id" => "title_5",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),5),
				"id" => "content_5",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),6),
				"id" => "title_6",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),6),
				"id" => "content_6",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),7),
				"id" => "title_7",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),7),
				"id" => "content_7",
				"default" => "",
				"type" => "textarea"
			),
			array(
				"name" => sprintf(__("Accordion %d Title",'flashxml_admin'),8),
				"id" => "title_8",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => sprintf(__("Accordion %d Content",'flashxml_admin'),8),
				"id" => "content_8",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Toggle",'flashxml_admin'),
		"value" => "toggle",
		"options" => array(
			array(
				"name" => __("Title",'flashxml_admin'),
				"id" => "title",
				"default" => "",
				"type" => "text"
			),
			array(
				"name" => __("Content",'flashxml_admin'),
				"id" => "content",
				"default" => "",
				"type" => "textarea"
			),
		),
	),
	array(
		"name" => __("Divider",'flashxml_admin'),
		"value" => "divider",
		"options" => array(
			array(
				"name" => __("Type",'flashxml_admin'),
				"id" => "type",
				"default" => 'divider_top',
				"options" => array(
					"divider_top" => __("Divider Line With Top",'flashxml_admin'),
					"divider_line" => __("Divider Line",'flashxml_admin'),
					"divider_padding" => __("Divider Padding",'flashxml_admin'),
					"divider" => __("Divider Line With Padding",'flashxml_admin'),
					"clearboth" => __("Clear Both",'flashxml_admin'),
				),
				"type" => "select",
			),
		),
	),
	array(
		"name" => __("Images",'flashxml_admin'),
		"value" => "images",
		"sub" => true,
		"options" => array(
			array(
				"name" => __("Image",'flashxml_admin'),
				"value" => "image",
				"options" => array(
					array(
						"name" => __("Image Source Url",'flashxml_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Image Title (optional)",'flashxml_admin'),
						"id" => "title",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Align (optional)",'flashxml_admin'),
						"id" => "align",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"left" => __('Left','flashxml_admin'),
							"right" => __('Right','flashxml_admin'),
							"center" => __('Center','flashxml_admin'),
						),
						"type" => "select",
					),
					array(
						"name" => __("Icon (optional)",'flashxml_admin'),
						"id" => "icon",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => array(
							"zoom" => __('Zoom','flashxml_admin'),
							"play" => __('Play','flashxml_admin'),
							"doc" => __('Doc','flashxml_admin'),
						),
						"type" => "select",
					),
					array (
						"name" => __("Lightbox",'flashxml_admin'),
						"id" => "lightbox",
						"default" => false,
						"type" => "toggle"
					),
					array (
						"name" => __("Lightbox group (optional)",'flashxml_admin'),
						"id" => "group",
						"default" => '',
						"type" => "text"
					),
					array(
						"name" => __("Size (optional)",'flashxml_admin'),
						"id" => "size",
						"default" => '',
						"prompt" => __("Choose one..",'flashxml_admin'),
						"options" => theme_get_image_size(),
						"type" => "select",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Link (optional)",'flashxml_admin'),
						"size" => 30,
						"id" => "link",
						"default" => "",
						"type" => "text",
					),
				),
			),
			array(
				"name" => __("Picture Frame",'flashxml_admin'),
				"value" => "picture_frame",
				"options" => array(
					array(
						"name" => __("Image Source Url",'flashxml_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array(
						"name" => __("Image Title (optional)",'flashxml_admin'),
						"id" => "title",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
				),
			),
		),
	),
	
	array(
		"name" => __("Video",'flashxml_admin'),
		"value" => "video",
		"sub" => true,
		"options" => array(
			array(
				"name" => "Flash",
				"value" => "flash",
				"options" => array(
					array(
						"name" => __("Src",'flashxml_admin'),
						"desc" => __('Specifies the location (URL) of the movie to be loaded','flashxml_admin'),
						"id" => "src",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array(
						"name" => __("Play",'flashxml_admin'),
						"id" => "play",
						"desc" => __("Specifies whether the movie begins playing immediately on loading in the browser.",'flashxml_admin'),
						"default" => false,
						"type" => "toggle"
					),
					array(
						"name" => __("flashvars (optional)",'flashxml_admin'),
						"desc" => __("variable to pass to Flash Player.",'flashxml_admin'),
						"id" => "flashvars",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
				),
			),
			array(
				"name" => "YouTube",
				"value" => "youtube",
				"options" => array(
					array(
						"name" => __("Clip_id",'flashxml_admin'),
						"desc" => __("the id from the clip's URL after v= (e.g. http://www.youtube.com/watch?v=<span style='color:red'>2DclLrdaxQd</span>)",'flashxml_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
				),
			),
			array(
				"name" => "Vimeo",
				"value" => "vimeo",
				"options" => array(
					array(
						"name" => __("Clip_id",'flashxml_admin'),
						"desc" => __("the number from the clip's URL (e.g. http://vimeo.com/<span style='color:red'>123456</span>)",'flashxml_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
				),
			),
			array(
				"name" => "Dailymotion",
				"value" => "dailymotion",
				"options" => array(
					array(
						"name" => __("Clip_id",'flashxml_admin'),
						"desc" => __("the id from the clip's URL (e.g. http://www.dailymotion.com/video/<span style='color:red'>xf3fk2</span>_didacticiel-quicklist_tech)",'flashxml_admin'),
						"id" => "clip_id",
						"size" => 30,
						"default" => "",
						"type" => "text",
					),
					array (
						"name" => __("Width (optional)",'flashxml_admin'),
						"id" => "width",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
					array (
						"name" => __("Height (optional)",'flashxml_admin'),
						"id" => "height",
						"default" => 0,
						"min" => 0,
						"max" => 960,
						"step" => "1",
						"type" => "range"
					),
				),
			),
		),
	),
);