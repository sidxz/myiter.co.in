<?php /* Template Name: Portfolio */

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

					<!-- ONE PORT START -->
					<?php if (have_posts()) : ?>
					<?php query_posts('showposts=9&category_name="Portfolio"' . '&paged=' . get_query_var('paged')); ?>
					<?php $c = 0;while (have_posts()) : the_post(); $c++;
					if( $c == 3) {
						$style = 'one_port one_port_last';
						$c = 0;
					}
					else $style='one_port';
					?>
					<div <?php post_class($style) ?> id="post-<?php the_ID(); ?>">

						<?php if(MULTISITE){ ?>
							<a href="<?php the_permalink() ?>" class="img"><img src="<?php bloginfo('template_directory'); ?>/includes/timthumb.php?src=<?php echo get_current_site(1)->path; echo str_replace(get_blog_option($blog_id,'fileupload_url'),get_blog_option($blog_id,'upload_path'),get_post_meta($post->ID, "post-img", true)); ?>&amp;h=237&amp;w=290&amp;zc=1" alt="<?php echo (get_post_meta($post->ID, "post-img-alt", true)) ? htmlspecialchars(get_post_meta($post->ID, "post-img-alt", true)) : the_title(); ?>" class="alignright" style="width:290px; height: 237px;" /></a>
						<?php } else { ?>
							<?php if ( get_post_meta($post->ID, 'post-img', true) ) { ?>
								<a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>" class="img"><img src="<?php bloginfo('template_directory'); ?>/includes/timthumb.php?src=<?php echo get_post_meta($post->ID, "post-img", $single = true); ?>&h=237&w=290&zc=1" alt="<?php the_title(); ?>" width="290" height="237" /></a>
							<?php } ?>
						<?php } ?>
						
						<div class="under_port">
							<h4><a href="<?php the_permalink() ?>" class="title"><?php the_title(); ?></a></h4>
							<div class="excerpt"><?php truncate_post(36); ?> ...</div>
						</div>
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
					<!-- ONE PORT END -->
					
				<div class="clear"></div>
			</div>
			<!-- CONTENT END -->
			
<?php get_footer(); ?>