<?php
/**
 * Used for the theme's initialization.
 */
class Theme {
	
	/**
	 * Initializes the theme framework, loads the required files, and calls the
	 * functions needed to run the theme.
	 */
	function init($options) {
		
		/* Define theme's constants. */
		$this->constants($options);
		
		/* Add language support. */
		add_action('init',array(&$this, 'language'));

		/* Add theme support. */
		add_action('after_setup_theme', array(&$this, 'supports'));
		
		/* Load theme's functions. */
		$this->functions();
		
		$this->shortcodes();
		
		/* Load admin files. */
        $this->admin();

        
		//Long posts should require a higher limit, see http://core.trac.wordpress.org/ticket/8553
		@ini_set('pcre.backtrack_limit', 500000);
	}
	
	/**
	 * Defines the constant paths for use within the theme.
	 */
	function constants($options) {
		define('THEME_NAME', $options['theme_name']);
		define('THEME_SLUG', $options['theme_slug']);
		
		define('THEME_DIR', get_template_directory());
		define('THEME_URI', get_template_directory_uri());
		
		define('THEME_FRAMEWORK', THEME_DIR . '/theme_admin');
		
		define('THEME_HELPERS', THEME_FRAMEWORK . '/helpers');
		define('THEME_FUNCTIONS', THEME_FRAMEWORK . '/functions');
		define('THEME_SHORTCODES', THEME_FRAMEWORK . '/shortcodes');
		
		define('THEME_FONT_URI', THEME_URI . '/fonts');
		define('THEME_FONT_DIR', THEME_DIR . '/fonts');
		
		define('THEME_INCLUDES', THEME_URI . '/includes');
		define('THEME_IMAGES', THEME_URI . '/images');
		define('THEME_CSS', THEME_URI . '/css');
		define('THEME_JS', THEME_URI . '/js');
		
		
		define('THEME_ADMIN', THEME_FRAMEWORK . '/admin');
		define('THEME_ADMIN_TYPES', THEME_ADMIN . '/types');
		define('THEME_ADMIN_ASSETS_URI', THEME_URI . '/theme_admin/admin/assets');
		define('THEME_ADMIN_FUNCTIONS', THEME_ADMIN . '/functions');
		define('THEME_ADMIN_OPTIONS', THEME_ADMIN . '/options');
		define('THEME_ADMIN_METABOXES', THEME_ADMIN . '/metaboxes');
	}
	
	/**
	 * Add theme support.
	 */
	function supports() {
		if (function_exists('add_theme_support')) {
			
			add_theme_support('custom-header');
			add_theme_support('custom-background');
			
			//This enables the naviagation menu ability. 
			add_theme_support('menus');

			register_nav_menus(array(
				'primary-menu' => __(THEME_NAME . ' Navigation', 'flashxml_admin' ), 
				'footer-menu' => __(THEME_NAME . ' Footer Menu', 'flashxml_admin' )
			));
			
			//This enables post and comment RSS feed links to head. This should be used in place of the deprecated automatic_feed_links.
			add_theme_support('automatic-feed-links');
			
			// reference to: http://codex.wordpress.org/Function_Reference/add_editor_style
			add_theme_support('editor-style');
		}
	}
	
	/**
	 * Loads the core theme functions.
	 */
	function functions() {
		require_once (THEME_FUNCTIONS . '/common.php');
		
		/* Load theme's options. */
		$this->options();

		require_once (THEME_FUNCTIONS . '/head.php');
		require_once (THEME_FUNCTIONS . '/filter.php');
		require_once (THEME_FUNCTIONS . '/wpml-integration.php');
	}
	
	/**
	 * Loads the theme options.
	 */
	function options() {
		global $theme_options;
		$theme_options = array();
		$option_files = array(
			'theme_color',
			'theme_font',
			'theme_footer',
			'theme_general',
			'theme_homepage',
			'theme_image',
			'theme_video',
			'theme_sidebar',
		);
		foreach($option_files as $file){
			$page = include (THEME_ADMIN_OPTIONS . "/" . $file.'.php');
			$theme_options[$page['name']] = array();
			foreach($page['options'] as $option) {
				if (isset($option['default'])) {
					$theme_options[$page['name']][$option['id']] = $option['default'];
				}
			}
			$theme_options[$page['name']] = array_merge((array) $theme_options[$page['name']], (array) get_option(THEME_SLUG . '_' . $page['name']));
		}
	}
	
	/**
	 * Register theme's shortcodes.
	 */
	function shortcodes() {
		require_once (THEME_SHORTCODES . '/columns.php');
		require_once (THEME_SHORTCODES . '/typography.php');
		require_once (THEME_SHORTCODES . '/dividers.php');
		require_once (THEME_SHORTCODES . '/tabs.php');
		require_once (THEME_SHORTCODES . '/boxes.php');
		require_once (THEME_SHORTCODES . '/images.php');
		require_once (THEME_SHORTCODES . '/buttons.php');
		require_once (THEME_SHORTCODES . '/tables.php');
		require_once (THEME_SHORTCODES . '/video.php');
		if(theme_get_option('general','enable_gmap')){
			require_once (THEME_SHORTCODES . '/gmap.php');
		}
	}
	
	/**
	 * Load admin files.
	 */
	function admin() {
		if (is_admin()) {
			require_once (THEME_ADMIN . '/admin.php');
			$admin = new Theme_admin();
			$admin->init();
		}
	}

	/**
	 * Make theme available for translation
	 */
	function language(){
		$locale = get_locale();
		if (is_admin()) {
			load_theme_textdomain( 'flashxml_admin', THEME_ADMIN . '/languages' );
			$locale_file = THEME_ADMIN . "/languages/$locale.php";
		}else{
			load_theme_textdomain( 'flashxml_front', THEME_DIR . '/languages' );
			$locale_file = THEME_DIR . "/languages/$locale.php";
		}
		if ( is_readable( $locale_file ) ){
			require_once( $locale_file );
		}
	}
}
?>
