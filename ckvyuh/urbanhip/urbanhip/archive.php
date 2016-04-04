<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
			
				<!-- CONT LEFT START -->
				<div class="cont_left">

					<?php if (have_posts()) : ?>
		    
					  <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
		              <?php /* If this is a category archive */ if (is_category()) { ?>
		                <h3 class="gray_title"><?php _e('Archive for the Category','Theme'); ?> &#8216;<?php single_cat_title(); ?>&#8217; </h3>
		              <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
		                <h3 class="gray_title"><?php _e('Posts Tagged','Theme'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h3>
		              <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		                <h3 class="gray_title"><?php _e('Archive for','Theme'); ?> <?php the_time('F jS, Y'); ?></h3>
		              <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		                <h3 class="gray_title"><?php _e('Archive for','Theme'); ?> <?php the_time('F, Y'); ?></h3>
		              <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		                <h3 class="gray_title"><?php _e('Archive for','Theme'); ?> <?php the_time('Y'); ?></h3>
		              <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		                <h3 class="gray_title"><?php _e('Author Archive','Theme'); ?></h3>
		              <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		                <h3 class="gray_title"><?php _e('Blog Archives','Theme'); ?></h3>
		 	  		<?php } ?>
                
	                <div class="clear"></div>
	                
	                <?php while (have_posts()) : the_post(); ?>
						<div class="one_post">
							<div class="date"><span><?php the_time('j') ?></span> <?php the_time('M Y') ?></div>
							
							<?php if(MULTISITE){ ?>
								<a href="<?php the_permalink() ?>" class="img"><img src="<?php bloginfo('template_directory'); ?>/includes/timthumb.php?src=<?php echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),get_post_meta($post->ID, "post-img", true)); ?>&amp;h=165&amp;w=514&amp;zc=1" alt="<?php echo (get_post_meta($post->ID, "post-img-alt", true)) ? htmlspecialchars(get_post_meta($post->ID, "post-img-alt", true)) : the_title(); ?>" class="alignright" style="width:514px; height: 165px;" /></a>
							<?php } else { ?>
								<?php if ( get_post_meta($post->ID, 'post-img', true) ) { ?>
									<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="img"><img src="<?php bloginfo('template_directory'); ?>/includes/timthumb.php?src=<?php echo get_post_meta($post->ID, "post-img", $single = true); ?>&h=165&w=514&zc=1" alt="<?php the_title(); ?>" width="514" height="165" /></a>
								<?php } ?>
							<?php } ?>
							
							<div class="clear"></div>
							
							<h1><a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a><span class="comment_nr"><?php comments_popup_link('0', '1', '%'); ?></span></h1>
							<div class="postmeta"><?php _e('Posted by','Theme'); ?> <?php the_author_posts_link(); ?>, <?php _e('in','Theme'); ?> <?php the_category(', ') ?></div>
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
            		
 					<p><?php _e('Not Found','Theme'); ?></p>
 					
					<?php endif; ?>
					
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