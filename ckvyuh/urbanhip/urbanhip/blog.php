<?php /* Template Name: Blog */

$pagenum = $wp_query->query_vars;
$pagenum = $pagenum['paged'];

if (empty($pagenum)) {
$pagenum = 1;
}
?>
<?php get_header(); ?>	

			</div>
			<!-- HEADER END -->
		
			<!-- CONTENT START -->
			<div id="content">
			
				<!-- CONT LEFT START -->
				<div class="cont_left">
					
					<!-- ONE POST START -->
					
					<?php if (have_posts()) : ?>
					<?php query_posts(array('category__not_in' => array(get_cat_id('portfolio')), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC', 'paged' => $pagenum)); ?>
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
						<?php endif; ?>
					</div>
						
					<div class="clear"></div>
				</div>
				
				<!-- CONT RIGHT END -->
				
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->
			
<?php get_footer(); ?>