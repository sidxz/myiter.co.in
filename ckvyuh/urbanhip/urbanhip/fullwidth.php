<?php /* Template Name: Fullwidth */ ?>
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
						
				<div class="fullwidth">
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php if ( comments_open() ) : ?>
						    <?php comments_template(); ?>
						<?php else : // comments are closed ?>
						<?php endif; ?>
					<?php endif; ?>
				</div>
						
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->

<?php get_footer(); ?>