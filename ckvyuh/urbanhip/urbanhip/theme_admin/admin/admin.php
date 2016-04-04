<?php
class Theme_admin {
	function init(){
		/* Load functions for admin. */
		$this->functions();
		
		/* Create theme options menu */
		add_action('admin_menu', array(&$this,'menus'));

		/* Create post type meta box. */
		$this->metaboxes();
	}
	
	function functions(){
		require_once(THEME_ADMIN_FUNCTIONS .'/common.php');
		require_once(THEME_ADMIN_FUNCTIONS .'/head.php');
		//enable option image uploader support
		require_once(THEME_ADMIN_FUNCTIONS .'/option-media-upload.php');
	}
	
	/**
	 * call and display the requested options page
 	 */
	function _load_option_page(){
		include_once (THEME_HELPERS . '/optionGenerator.php');
		$page = include(THEME_ADMIN_OPTIONS . "/" . $_GET['page'] . '.php');
	
		if($page['auto']){
			new optionGenerator($page['name'],$page['options']);
		}
	}
 /** Create theme options menu
	 */
	function menus(){
		add_menu_page(THEME_NAME, THEME_NAME, 10, 'theme_font', array(&$this,'_load_option_page'),THEME_ADMIN_ASSETS_URI .'/images/theme_hover.png');
		add_submenu_page('theme_general', 'Font', 'Font', 10, 'theme_font', array(&$this,'_load_option_page'));	
	}
	/**
	 * Create post type metabox.
	 */
	function metaboxes(){
		require_once (THEME_HELPERS . '/metaboxesGenerator.php');
		
		require_once (THEME_ADMIN_METABOXES . '/shortcode.php');
	}
}