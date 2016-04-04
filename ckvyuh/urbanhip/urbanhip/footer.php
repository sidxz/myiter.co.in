			<!-- FOOTER START -->
			<div id="footer">
				<div id="copyright"><?php echo stripslashes(get_theme_var('legalText')); ?></div>
				<div id="logo_bottom">
					<?php 
						if (theme_var('FooterlogoImage','return')) {
							$themeLogo = '<a href="'. get_bloginfo('url') .'" class="logo_bot_img"><img src="'. theme_var('FooterlogoImage','return') .'" alt="'. get_bloginfo('name') .'" /></a>';
						} else {
							$themeLogo = '<a href="'. get_bloginfo('url') .'" class="logo_bot"></a>';
						}
					?>
					<div id="logo_bot">
						<?php echo $themeLogo; ?>
					</div>
				</div>
			</div>
			<!-- FOOTER END -->
			
		</div>
		
		<div class="clear" style="height:25px;"></div>
	</div>
	<!-- PAGE END -->
	
<?php 
	if(theme_get_option('font','enable_cufon')){
		theme_add_cufon_code();
	}
	wp_footer();
	if(theme_get_option('general','analytics')){
		echo '<div class="hidden">'.stripslashes(theme_get_option('general','analytics')).'</div>';
	}
?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/styleswitcher.js"></script>
<?php echo stripslashes(get_theme_var('googleAnalytics')); ?>

</body>
</html>