<?php
function theme_shortcode_button($atts, $content = null, $code) {
	extract(shortcode_atts(array(
		'id' => false,
		'class' => false,
		'size' => 'small',
		'link' => '',
		'linktarget' => '',
		'color' => 'gray',
		'bgcolor' => '',
		'textcolor' => '',
		'full' => "false",
		'align' => false,
	), $atts));
	$id = $id?' id="'.$id.'"':'';
	$full = ($full==="false")?'':' full';
	$color = $color?' '.$color:'';
	$class = $class?' '.$class:'';
	$link = $link?' href="'.$link.'"':'';
	$linktarget = $linktarget?' target="'.$linktarget.'"':'';
	$bgcolor = $bgcolor?' style="background-color:'.$bgcolor.'"':'';
	$textcolor = $textcolor?' style="color:'.$textcolor.'"':'';
	if($align != 'center'){
		$aligncss = ' align'.$align;
	}else{
		$aligncss = '';
	}
	$content = '<a'.$id.$link.$linktarget.$bgcolor.' class="button '.$size.$color.$full.$class.$aligncss.'"><span'.$textcolor.'>' . trim($content) . '</span></a>';
	if($align === 'center'){
		return '<p class="center">'.$content.'</p>';
	}else{
		return $content;
	}
}
add_shortcode('button','theme_shortcode_button');