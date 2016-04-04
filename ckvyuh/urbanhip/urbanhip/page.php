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
							<h1><?php the_title(); ?></h1>
							<?php if (have_posts()) : ?>
							<?php while (have_posts()) : the_post(); ?> 
							<div <?php post_class() ?> id="post-<?php the_ID(); ?>">
			                    <?php the_content(); ?>
			                </div>
							<?php endwhile; ?>
							<?php if ( comments_open() ) : ?>
							    <?php comments_template(); ?>
							<?php else : // comments are closed ?>
							<?php endif; ?>
							<?php endif; ?>
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