<?php
function theme_more_link($more_link, $more_link_text) {
	
	$more_link = '[raw]' . $more_link . '[/raw]';
	
	return str_replace('more-link', 'read_more_link', $more_link);
}
add_filter('the_content_more_link', 'theme_more_link', 10, 2);

function theme_excerpt_more($excerpt) {
	return str_replace('[...]', '...', $excerpt);
}
add_filter('wp_trim_excerpt', 'theme_excerpt_more');

/*
 * add a span element for style in the page
 */
function theme_comment_style($return) {
	return str_replace($return, "<span></span>$return", $return);
}
add_filter('get_comment_author_link', 'theme_comment_style');