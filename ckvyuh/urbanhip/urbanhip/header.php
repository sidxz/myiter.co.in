<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<?php global $cssPath, $themePath; ?>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
	<?php
		if (is_home()) { bloginfo('name'); echo " - "; bloginfo('description'); }
		elseif (is_category() || is_tag()) { single_cat_title(); }
		elseif (is_single() || is_page()) { single_post_title(); }
		elseif (is_search()) { _e('Search Results:', THEMENAME); echo " ".wp_specialchars($s); }
		else { echo trim(wp_title(' ',false)); }
		if (!is_home()) { theme_var('appendToPageTitle'); }
	?>
</title>

<link type="text/css" rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link type="text/css" rel="pingback" href="<?php bloginfo('pingback_url'); ?>" media="screen" />

<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-blue.css" media="screen" title="skin-urbanhip-blue" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-blue2.css" media="screen" title="skin-urbanhip-blue2" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-green.css" media="screen" title="skin-urbanhip-green" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-orange.css" media="screen" title="skin-urbanhip-orange" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-pink.css" media="screen" title="skin-urbanhip-pink" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-purple.css" media="screen" title="skin-urbanhip-purple" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-red.css" media="screen" title="skin-urbanhip-red" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-red2.css" media="screen" title="skin-urbanhip-red2" />
<link rel="alternate stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/skin-urbanhip-yellow.css" media="screen" title="skin-urbanhip-yellow" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.js"></script>

<!--[if IE 6]>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/DD_belatedPNG.js"></script>
<script type="text/javascript">
	DD_belatedPNG.fix('img, .png_bg');
</script>
<![endif]-->

<script type="text/javascript">
$(document).ready(function() {
$('#skins').parent().append('<ul><li><a title="Blue" href="javascript:setActiveStyleSheet(\'skin-urbanhip-blue\');" class="blue">Blue</a></li><li><a title="Blue2" href="javascript:setActiveStyleSheet(\'skin-urbanhip-blue2\');" class="blue2">Blue2</a></li><li><a title="Green" href="javascript:setActiveStyleSheet(\'skin-urbanhip-green\');" class="green">Green</a></li><li><a title="Orange" href="javascript:setActiveStyleSheet(\'skin-urbanhip-orange\');" class="orange">Orange</a></li><li><a title="Pink" href="javascript:setActiveStyleSheet(\'skin-urbanhip-pink\');" class="pink">Pink</a></li><li><a title="Purple" href="javascript:setActiveStyleSheet(\'skin-urbanhip-purple\');" class="purple">Purple</a></li><li><a title="Red" href="javascript:setActiveStyleSheet(\'skin-urbanhip-red\');" class="red">Red</a></li><li><a title="Red2" href="javascript:setActiveStyleSheet(\'skin-urbanhip-red2\');" class="red2">Red2</a></li><li><a title="Yellow" href="javascript:setActiveStyleSheet(\'skin-urbanhip-yellow\');" class="yellow">Yellow</a></li></ul>');
});
</script>

<?php
	// Skin CSS include (selected in theme options)
	if (get_theme_var('skinName')) { 
		$skinCSS = 'skin-urbanhip-'. get_theme_var('skinName') .'.css';
		echo '<!-- Skin Style Sheet -->';
		echo '<link rel="stylesheet" href="'. $cssPath . $skinCSS .'" type="text/css" id="SkinCSS" />';
	}
?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.bgiframe.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.kwicks-1.5.1.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.quicksand.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.tools.validator.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui-1.7.2.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.cycle.all.min.js"></script>


<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/menu.js"></script>

<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>

</head>

<body>
	
	<!-- PAGE START -->
	<div id="page">
		
		<!-- TOP BAR START -->
		<div class="center">
			<div class="top_bar"></div>
		</div>
		<!-- TOP BAR END -->
		
		<!-- HEAD LINE START -->
		<div class="head_line">
			<div class="center">
				
				<!-- LOGO START -->
				<?php 
					if (theme_var('MainlogoImage','return')) {
						$themeLogo = '<a href="'. get_bloginfo('url') .'" class="logo_img"><img class="png_bg" src="'. theme_var('MainlogoImage','return') .'" alt="'. get_bloginfo('name') .'" /></a>';
					} else {
						$themeLogo = '<a href="'. get_bloginfo('url') .'" class="logo png_bg"></a>';
					}
				?>
				<div id="logo">
					<?php echo $themeLogo; ?>
				</div>
				<!-- LOGO END -->
				
				<!-- SEARCH FORM START -->
				<?php get_search_form(); ?>
				<!-- SEARCH FORM END -->
				
			</div>
		</div>
		<!-- HEAD LINE END -->
		
		<div class="center">
			
			<!-- HEADER START -->
			<div id="header">
				
			<!-- MENU START -->
			<div id="navigation">
				<ul id="menu-navigation" class="menu">
					<?php
						$my_pages = wp_list_pages('echo=0&title_li=');
						$var1 = '<a';
						$var2 = '<a';
						$var3 = '</a';
						$var4 = '</a';
						$my_pages = str_replace($var1, $var2, $my_pages);
						$my_pages = str_replace($var3, $var4, $my_pages);
						$my_pages = str_ireplace('>Skins<', ' id="skins">Skins<', $my_pages);
						echo $my_pages;
					?>
				</ul>
			</div>
			<!-- MENU END -->