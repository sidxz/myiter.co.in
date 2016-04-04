<?php /* Template Name: Gallery */ ?>
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
						
				<div class="fullwidth">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php fxphotoflipper_echo_embed_code(); ?>
							<div class="clear" style="height:10px;"></div>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
						
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->

<?php get_footer(); ?>