<?php

//Localization Init
load_theme_textdomain('Theme');

/* Powerusers Gravatar
/* ----------------------------------------------*/
add_filter( 'avatar_defaults', 'newgravatar' );  

function newgravatar ($avatar_defaults) {
     $myavatar = get_bloginfo('template_directory') . '/images/avatar.gif';
     $avatar_defaults[$myavatar] = "Powerusers Gravatar";
     return $avatar_defaults;
}

function truncate_post($amount) {
$truncate = get_the_content(); 
$truncate = apply_filters('the_content', $truncate);
$truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
$truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
$truncate = strip_tags($truncate);
$truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' ')); 
echo $truncate;
}

function truncate_title($amount) {
$truncate = get_the_title(); 
$truncate = apply_filters('the_title', $truncate);
$truncate = preg_replace('@<script[^>]*?>.*?</script>@si', '', $truncate);
$truncate = preg_replace('@<style[^>]*?>.*?</style>@si', '', $truncate);
$truncate = strip_tags($truncate);
$truncate = substr($truncate, 0, strrpos(substr($truncate, 0, $amount), ' ')); 
echo $truncate;
}

/* Load the Theme class. */
require_once (TEMPLATEPATH . '/theme_admin/theme.php');

$theme = new Theme();
$theme->init(array(
	'theme_name' => 'UrbanHip - Fonts',
	'theme_slug' => 'urbanhip'
));

$content_width = 450;
add_theme_support( 'post-thumbnails' );
add_theme_support( 'post-thumbnails', array( 'post' ) ); // Add it for posts
set_post_thumbnail_size( 437, 225 );
automatic_feed_links();

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Main Sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Ads',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Social Icons',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

if ( function_exists('register_sidebar') )
register_sidebar(array('name'=>'Blog Sidebar',
'before_widget' => '',
'after_widget' => '',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

#==================================================================
#
#	Admin control panel setup
#
#==================================================================


#-----------------------------------------------------------------
# Default theme variables and information
#-----------------------------------------------------------------

$themeInfo = get_theme_data(TEMPLATEPATH . '/style.css');
$themeVersion = trim($themeInfo['Version']);
$themeTitle= trim($themeInfo['Title']);
$shortname = strtolower(str_replace(" ","",$themeTitle)) . "_";


// set as constants
//................................................................

define('THEMENAME', $themeTitle);
define('THEMEVERSION', $themeVersion);

// shortcuts variables
//................................................................

$cssPath = get_bloginfo('stylesheet_directory') . "/";
$themePath = get_bloginfo('template_url') . "/";
$themeUrlArray = parse_url(get_bloginfo('template_url'));
$themeLocalUrl = $themeUrlArray['path'] . "/";

// setup info (category list, page list, etc)
//................................................................

$allCategories = get_categories('hide_empty=0');
$allPages = get_pages('hide_empty=0');
$pageList = array();
$categoryList = array();

// create category and page list arrays
//................................................................

foreach ($allPages as $thisPage) {
	$pageList[$thisPage->ID] = $thisPage->post_title;
	$pages_ids[] = $thisPage->ID;
}
foreach ($allCategories as $thisCategory) {
	$categoryList[$thisCategory->cat_ID] = $thisCategory->cat_name;
	$cats_ids[] = $thisCategory->cat_ID;
}



#-----------------------------------------------------------------
# Admin Menu Options
#-----------------------------------------------------------------

// include options functions
//................................................................

include_once('theme_admin/includes/option_functions.php');

// Menu structure
//................................................................

function this_theme_menu() {
	add_menu_page('Theme Options', THEMENAME, 10, 'theme-setup', 'loadOptionsPage', get_template_directory_uri().'/theme_admin/images/theme_icon.png');
}
	
// Create menu
//................................................................

add_action('admin_menu','this_theme_menu');

// call and display the requested options page
//................................................................

function loadOptionsPage() {
	global $themeTitle,$shortname,$pageList,$categoryList,$wp_deprecated_widgets_callbacks;

	include_once('theme_admin/includes/options_pages/'. $_GET['page'] .'.php');
	
	if ($_GET['page'] != 'slideshow-options' && $_GET['page'] != 'mainmenu-options' && $_GET['page'] != 'portfolio-options') {
		include_once("theme_admin/options.php");
	}
}

#-----------------------------------------------------------------
# Addon Functions and Content
#-----------------------------------------------------------------


// include custom functions
//................................................................

include_once("theme_admin/includes/addon-functions.php");

?>