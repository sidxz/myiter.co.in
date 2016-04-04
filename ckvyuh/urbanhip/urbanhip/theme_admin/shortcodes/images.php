<?php
/**
 * size: small, medium, tall, blog
 * icon:zoom, doc, play
 * @param unknown_type $atts
 * @param unknown_type $content
 * @param unknown_type $code
 */
function theme_shortcode_image($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'size' => 'medium',
		'link' => '#',
		'icon' => false,
		'lightbox' => 'false',
		'title' => '',
		'align' => false,
		'group' => '',
		'width' => false,
		'height' => false,
	), $atts));
	if(!$width&&!$height){
		$width = theme_get_option('image', $size.'_width');
		$height = theme_get_option('image', $size.'_height');
		if(!$width){
			$width = '150';
		}
		if(!$height){
			$height = '150';
		}
	}
	$src = trim($content);
	$no_link = '';
	if($lightbox == 'true'){
		if($link == '#'){
			$link = $src;
		}
	}else{
		if($link == '#'){
			$no_link = ' image_no_link';
		}
	}
	
	$content = '<img width="'.$width.'" height="'.$height.'" alt="'.$title.'" src="'.THEME_INCLUDES.'/timthumb.php?src='.get_image_src($src).'&amp;h='. $height .'&amp;w='. $width .'&amp;zc=1" />';
	return '[raw]<span class="image_styled'.($align?' align'.$align:'').'"><span class="image_frame" style="width:'.$width.'px;height:'.$height.'px"><a'.($group?' rel="'.$group.'"':'').' class="image_size_'.$size.$no_link.($icon?' image_icon_'.$icon:'').($lightbox =='true'?' lightbox':'').'" title="'.$title.'" href="'.$link.'">' . $content . '</a></span><img class="image_shadow" width="'.($width+2).'" src="'.THEME_IMAGES.'/image_shadow.png" alt="" /></span>[/raw]';
}
add_shortcode('image', 'theme_shortcode_image');

function theme_shortcode_picture_frame($atts, $content = null) {
	extract(shortcode_atts(array(
		'title' => '',
		'align' => false
	), $atts));
	
	return '<div class="picture_frame"><img width ="106" height="126" alt="'.$title.'" src="'.THEME_INCLUDES.'/timthumb.php?src='.get_image_src($content).'&amp;h=126&amp;w=106&amp;zc=1" /></div>';
}
add_shortcode('picture_frame', 'theme_shortcode_picture_frame');