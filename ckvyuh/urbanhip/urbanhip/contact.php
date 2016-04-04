<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
						
				<div class="contact">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<h3><?php _e('Leave a Message','Theme'); ?></h3>
							<?php the_content(); ?>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
						
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->

<?php get_footer(); ?>