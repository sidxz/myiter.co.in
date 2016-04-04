<?php require_once( '../../../../wp-load.php' );
	Header("Content-type: text/css");
	
	$font = theme_get_option('font');
	$font['font_family']=stripslashes($font['font_family']);
	if($color['page_h1']==''){
		$color['page_h1']=$color['page_header'];
	}
	if($color['page_h2']==''){
		$color['page_h2']=$color['page_header'];
	}
	if($color['page_h3']==''){
		$color['page_h3']=$color['page_header'];
	}
	if($color['page_h4']==''){
		$color['page_h4']=$color['page_header'];
	}
	if($color['page_h5']==''){
		$color['page_h5']=$color['page_header'];
	}
	if($color['page_h6']==''){
		$color['page_h6']=$color['page_header'];
	}
	$logo_bottom = theme_get_option('general','logo_bottom');
	$posts_gap = theme_get_option('blog','posts_gap');
	$header_height = theme_get_option('general','header_height');
	$nivo_height = theme_get_option('slideshow','nivo_height');
	$nivo_frame_height = $nivo_height - 1;
	$kwicks_height = theme_get_option('slideshow','kwicks_height');
	$kwicks_frame_height = $kwicks_height - 1;
	
	$blog_left_image_width = theme_get_option('blog', 'left_width');
	$blog_left_image_height = theme_get_option('blog','left_height');
	$blog_left_image_shadow_width = $blog_left_image_width +2;
	$custom_css =  stripslashes(theme_get_option('general','custom_css'));
	foreach($color as $key => $value){
		if($value == ''){
			$color[$key]='transparent';
		}
	}

	echo <<<CSS
body {
	font-family: {$font['font_family']} !important;
}

#navigation ul li a, #main_navigation ul li a:visited {
	font-size: {$font['menu_top']}px !important;
}

#navigation ul ul li a, #navigation ul ul li a:visited {
	font-size: {$font['menu_sub']}px !important;
}
#feature h1 {
	font-size: {$font['feature_header']}px;
}
#introduce {
	font-size: {$font['feature_introduce']}px;
}
#page {
	font-size: {$font['page']}px;
}
#sidebar .widgettitle {
	font-size: {$font['widget_title']}px;
}
#breadcrumbs {
	color: {$color['breadcrumbs']};
}
.portfolio_title {
	font-size: {$font['portfolio_title']}px;
}
#footer {
	font-size: {$font['footer_text']}px !important;
}
#copyright {
	font-size: {$font['copyright']}px !important;
}
h1 {
	font-size: {$font['h1']}px !important;
}
h2 {
	font-size: {$font['h2']}px !important;
}
h3 {
	font-size: {$font['h3']}px !important;
}
h4 {
	font-size: {$font['h4']}px !important;
}
h5 {
	font-size: {$font['h5']}px !important;
}
h6 {
	font-size: {$font['h6']}px !important;
}

#nivo_slider_wrap, #nivo_slider_loading, #nivo_slider {
	height: {$nivo_height}px;
}


#nivo_slider_frame {
	height: {$nivo_frame_height}px;
}
#kwicks li {
	height: {$kwicks_height}px;
}
.kwick_frame,.kwick_last_frame {
	height: {$kwicks_frame_height}px;
}
.entry {
	margin-bottom: {$posts_gap}px;
}
.entry_title {
	font-size: {$font['entry_title']}px;
}
.entry_image .image_frame {
	width:628px;
}
.entry_image .image_shadow {
	width:630px;
}
.entry_left .entry_image .image_frame {
	width: {$blog_left_image_width}px;
	height: {$blog_left_image_height}px;
}
.entry_left .entry_image, .entry_left .entry_image .image_shadow {
	width: {$blog_left_image_shadow_width}px;
}
{$custom_css}
CSS;
?>