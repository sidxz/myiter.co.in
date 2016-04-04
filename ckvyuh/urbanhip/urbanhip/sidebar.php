					<!-- SIDEBAR START -->
					<div class="sidebar">
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Main Sidebar')) : ?>
						<h3>Text widget</h3>
						<div class="textwidget">
							Donec id ante a mauris pulvinar feugiat. Donec non ipsum risus. Proin massa odio, aliquam sed hendrerit nec, sodales nec massa. Morbi nec orci vel ipsum mollis aliquet. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent rhoncus luctus enim sit amet mattis. Pellentesque egestas imperdiet dictum. Nam consectetur.
							<span>
								Jimmy Clarkson
							</span>
						</div>
						
						<h3><?php _e('Recent posts','Theme'); ?></h3>
						<div class="recent_posts">
							<?php if (have_posts()) : ?>
							<?php query_posts(array('category__not_in' => array(get_cat_id('portfolio')), 'posts_per_page' => 3, 'orderby' => 'date', 'order' => 'DESC')); ?>
								<?php while (have_posts()) : the_post(); ?>
									<div class="one_recent">
										<a href="<?php the_permalink(); ?>"><?php truncate_post(100); ?></a>
										<span><?php the_time('F j, Y') ?></span>
									</div>
								<?php endwhile; ?>
							<?php endif; ?>
							<a href="<?php bloginfo('url'); ?>/blog" class="more"><?php _e('SEE MORE POSTS','Theme'); ?></a>
						</div>
						
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Ads')) : ?> 
						<div class="ads">
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/temp_img3.gif" alt="" /></a>
							<a href="#"><img src="<?php bloginfo('template_url'); ?>/images/temp_img3.gif" alt="" /></a>
							<a href="#" class="last"><img src="<?php bloginfo('template_url'); ?>/images/temp_img3.gif" alt="" /></a>
						</div>
						<?php endif; ?>
						
						<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('Social Icons')) : ?> 
						<div class="social">
							<a href="http://www.facebook.com/"><img src="<?php bloginfo('template_url'); ?>/images/icons/facebook.gif" alt="" /></a>
							<a href="http://www.twitter.com/"><img src="<?php bloginfo('template_url'); ?>/images/icons/twitter.gif" alt="" /></a>
							<a href="http://www.delicious.com/"><img src="<?php bloginfo('template_url'); ?>/images/icons/delicious.gif" alt="" /></a>
						</div>
						<?php endif; ?>
						
						<?php endif; ?>
					</div>
					<!-- SIDEBAR END -->