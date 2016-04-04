<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
				<div class="fullwidth" style="height:auto !important;height:500px;min-height:500px;">
					<h3><?php _e('Error 404','Theme'); ?></h3>
					<p class="error_404">
					<?php 
						if (get_theme_var("custom404") != '') {
							echo stripslashes(get_theme_var("custom404"));
						} else {
							echo 'Sorry, the page you are looking for wasn\'t found.';
						}	
					?>
					</p>
				</div>				
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->
			
<?php get_footer(); ?>