<?php /* Template Name: Archives */ ?>
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
			
				<!-- CONT LEFT START -->
				<div class="cont_left">
					<!-- ONE POST START -->
					<div class="one_post">
						<div class="interior">
						<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?>
								<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
									<h1><?php the_title(); ?></h1>
									<div class="clear"></div>
									<div class="home_content">
										<?php the_content(); ?>
									</div>
								</div>
								<div class="clear" style="height:20px;"></div>
							<?php endwhile; ?>
						<?php endif; ?>
						
		                <h3 class="archives"><?php _e('Archives by Month:','Theme'); ?></h3>
						<div class="clear"></div>
						<ul class="archives">
							<?php wp_get_archives('type=monthly'); ?>
						</ul>
						<div class="clear"></div>
		                <h3 class="archives"><?php _e('Archives by Subject:','Theme'); ?></h3>
						<div class="clear"></div>
						<ul class="archives">
							<?php wp_list_categories('exclude='.get_cat_id('portfolio').'&title_li='); ?>
						</ul>
						</div>
						<div class="clear"></div>
					</div>
					<!-- ONE POST END -->
						
					<div class="clear"></div>
				</div>
				<!-- CONT LEFT END -->
				
				<!-- CONT RIGHT START -->
				<div class="cont_right">
					
					<?php get_sidebar(); ?>
					
					<div class="clear"></div>
				</div>
				<!-- CONT RIGHT END -->
				
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->
			
<?php get_footer(); ?>