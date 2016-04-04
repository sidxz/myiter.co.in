<?php
global $theme_options;

/**
 * Check Whether the current environment is support for the theme.
 * 
 * The message will display in admin option page.
 */
function theme_check_message(){	
	global $wp_version;
	
	$errors = array();
	if(!theme_check_wp_version()){
		$errors[]='Wordpress version('.$wp_version.') is too low. Please upgrade to 3.0';
	}
	if(!function_exists("gd_info")){
		$errors[]='Gd lib not enabled.';
	}
	if(!is_writeable(THEME_DIR."/includes/cache/")){
		$errors[]='The image cache folder ('.str_replace( WP_CONTENT_DIR, '', THEME_DIR ).'/includes/cache/) is not writeable.';
	}
	$str = '';
	if(!empty($errors)){
		$str = '<div class="error" style="padding:5px">';
		foreach($errors as $error){
			$str .= '<div>'.$error.'</div>';
		}
		$str .= '</div>';
	}
	return $str;
}

/**
 * Check Whether the current wordpress version is support for the theme.
 */
function theme_check_wp_version(){
	global $wp_version;
	
	$check_WP   = '3.0';
	$is_ok  =  version_compare($wp_version, $check_WP, '>=');
	
	if ( ($is_ok == FALSE) ) {
		return false;
	}
	
	return true;
}

/**
 * Retrieve option value based on name of option.
 * 
 * If the option does not exist or does not have a value, then the return value will be false.
 * 
 * @param string $page page name
 * @param string $name option name
 */
function theme_get_option($page, $name = NULL) {
	global $theme_options;
	if ($name == NULL) {
		if (isset($theme_options[$page])) {
			return $theme_options[$page];
		} else {
			return false;
		}
	} else {
		if (isset($theme_options[$page][$name])) {
			return $theme_options[$page][$name];
		} else {
			return false;
		}
	}
}

function theme_get_excluded_pages(){
	$excluded_pages = theme_get_option('general', 'excluded_pages');
	$home = theme_get_option('homepage','home_page');
	if (! empty($excluded_pages)) {
		//Exclude a parent and all of that parent's child Pages
		$excluded_pages_with_childs = '';
		foreach($excluded_pages as $parent_page_to_exclude) {
			if ($excluded_pages_with_childs) {
				$excluded_pages_with_childs .= ',' . $parent_page_to_exclude;
			} else {
				$excluded_pages_with_childs = $parent_page_to_exclude;
			}
			$descendants = get_pages('child_of=' . $parent_page_to_exclude);
			if ($descendants) {
				foreach($descendants as $descendant) {
					$excluded_pages_with_childs .= ',' . $descendant->ID;
				}
			}
		}
		if($home){
			$excluded_pages_with_childs .= ',' .$home;
		}
	} else {
		$excluded_pages_with_childs = $home;
	}
	return $excluded_pages_with_childs;
}


/**
 * Fix the image src for MultiSite
 * 
 * @param string $src the full path of image
 */
function get_image_src($src) {
	if(is_multisite()){
		global $blog_id;
		if(is_subdomain_install()){
			if ( defined( 'DOMAIN_MAPPING' ) ){
				if(function_exists('get_original_url')){ //WordPress MU Domain Mapping
					return get_bloginfo('wpurl').'/'.str_replace(str_replace(get_original_url('siteurl'),get_bloginfo('wpurl'),get_blog_option($blog_id,'fileupload_url')),get_blog_option($blog_id,'upload_path'),$src);
				}else { //VHOST and directory enabled Domain Mapping plugin
					global $dm_map;
					if(isset($dm_map)){
						static $orig_urls = array();
						if ( ! isset( $orig_urls[ $blog_id ] ) ) {
							remove_filter( 'pre_option_siteurl', array(&$dm_map, 'domain_mapping_siteurl') );
							$orig_url = get_option( 'siteurl' );
							$orig_urls[ $blog_id ] = $orig_url;
							add_filter( 'pre_option_siteurl', array(&$dm_map, 'domain_mapping_siteurl') );
						}
						return get_bloginfo('wpurl').'/'.str_replace(str_replace($orig_urls[$blog_id],get_bloginfo('wpurl'),get_blog_option($blog_id,'fileupload_url')),get_blog_option($blog_id,'upload_path'),$src);
					}
				}
			}
			return get_bloginfo('wpurl').'/'.str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$src);

		}else{
			$curSite =  get_current_site(1);
			return $curSite->path.str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),$src);
		}
	}else{
		return $src;
	}
}

function theme_add_cufon_code(){
	$code = stripslashes(theme_get_option('font','code'));
	$fonts = theme_get_option('font','fonts');
	if(trim($code) == '' && isset($fonts[0])){
		$file_content = file_get_contents(THEME_FONT_DIR.'/'.$fonts[0]);
		if(preg_match('/font-family":"(.*?)"/i',$file_content,$match)){
			$font_name = $match[1];
		}
		if($font_name){
			$code = <<<CODE
Cufon.replace(".dropcap1,.dropcap2,.dropcap3,.dropcap4", {fontFamily : "{$font_name}"}); 
Cufon.replace("h1,h2,h3,h4,h5,h6", {fontFamily : "{$font_name}", fontStretch:"condensed",hover:true});
Cufon.replace('.date', {fontFamily : "{$font_name}", fontStretch:"semi-expanded"});
Cufon.replace('.one_post h1 a.title', {fontFamily : "{$font_name}", fontStretch:"condensed",hover:true});
Cufon.replace('.one_post h1 span.comment_nr a', {fontFamily: "{$font_name}",hover:true,fontStretch:"normal"});
Cufon.replace('#navigation a', {hover:true, fontFamily : "{$font_name}"});
CODE;
		}
	}
	echo <<<HTML
<script type='text/javascript'>
if(jQuery.browser.msie && parseInt(jQuery.browser.version, 10)==8){
	jQuery(".jqueryslidemenu ul li ul").css({display:'none', visibility:'visible'});
}
{$code}
Cufon.now();
if(jQuery.browser.msie && parseInt(jQuery.browser.version, 10)==8){
	jQuery(".jqueryslidemenu ul li ul").css({display:'block', visibility:'hidden'});
}
</script>
HTML;
}