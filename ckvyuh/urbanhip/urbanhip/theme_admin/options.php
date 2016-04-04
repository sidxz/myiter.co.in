<?php
#==================================================================
#
#	Display control panel options
#
#==================================================================

global $themePath;

?>
<script src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script type="text/javascript"> var $j = jQuery.noConflict(); </script>

<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('template_url'); ?>/theme_admin/css/styles.css" />
<div class="wrap">

	<h2><?php echo $themeTitle; ?> - Theme Settings</h2>

	<?php
	
	// save options to database (on submit)
	if (isset($_POST['save_theme_options'])) :
		foreach ($options as $value) {     
			update_option($value['id'], $_POST[$value['id']]);
		}
		echo '<div id="message" class="updated fade"><p><strong>Updated Successfully</strong></p></div>';
	endif;
	
	// call function to print options for current page
	listOptions($options);
	
	?>
	
</div>