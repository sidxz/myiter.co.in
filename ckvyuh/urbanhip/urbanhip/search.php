
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">

				<!-- CONT LEFT START -->
				<div class="cont_left">
					
					<h3 class="gray_title"><?php _e('Search Results for','Theme'); ?><?php /* Search Count */ $allsearch = &new WP_Query("s=$s&showposts=-1"); $key = wp_specialchars($s, 1); _e('<span class="search-terms"> "'); echo $key; _e('"</span>');echo $count . ' '; wp_reset_query(); ?></h3>
					
					<div class="clear"></div>
					
					<!-- ONE POST START -->
					<?php if (have_posts()) : ?>
						<?php while (have_posts()) : the_post(); ?>
						<div class="one_post">
							<h1><a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a></h1>
							<div class="excerpt">
								<?php truncate_post(200); ?>...
								<a href="<?php the_permalink() ?>" class="more"><?php _e('Read more','Theme'); ?></a>
							</div>
							
							<div class="clear"></div>
						</div>
						<?php endwhile; ?>
						
						<div class="clear"></div>
			
						<!-- PAGES START -->
						<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } else { ?>
							<div class="wp-pagenavi">
								<div class="alignleft"><?php next_posts_link(__('&laquo; Older Entries','Theme')) ?></div>
								<div class="alignright"><?php previous_posts_link(__('Newer Entries &raquo;','Theme')) ?></div>
							</div>
						<?php } ?>
						<!-- PAGES END -->
	            
		                <?php else : ?>
		                	<div class="one_post">
								<h1><?php _e('No posts found. Try a different search?','Theme'); ?></h1>
								<?php get_search_form(); ?>
								
								<div class="clear"></div>
		                    </div>
	                <?php endif; ?>
	                <!-- ONE POST END -->
					
					
					
					<div class="clear"></div>
				</div>
				<!-- CONT LEFT END -->
					
					<!-- CONT RIGHT START -->
					<div class="cont_right">
					
						<div class="sidebar">
							<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Blog Sidebar')) : ?>
							<h3><?php _e('Categories','Theme'); ?></h3>
							<ul>
								<?php wp_list_categories('exclude='.get_cat_id('portfolio').'&title_li='); ?>
							</ul>
							
							<h3><?php _e('Archives','Theme'); ?></h3>
							<ul>
								<?php wp_get_archives('title_li='); ?>
							</ul>
							
							<h3><?php _e('Blogroll','Theme'); ?></h3>
							<?php get_links_list(); ?>
						</div>
						
						<div class="clear"></div>
					</div>
					<?php endif; ?>
					<!-- CONT RIGHT END -->
					
					<div class="clear"></div>
				</div>
				<!-- CONTENT END -->
				
	<?php get_footer(); ?>