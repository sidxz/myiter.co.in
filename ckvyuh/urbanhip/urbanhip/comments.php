<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!','Theme'));

	if ( post_password_required() ) { ?>
		<p class="nocomments"><?php _e('This post is password protected. Enter the password to view comments.','Theme'); ?></p>
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>

<h3 id="comments"><?php comments_number(__('0 Comments','Theme'),  __('1 Comment','Theme'), '% '.__('Comments','Theme').'');?></h3>
	<div class="comments_box">
			<div class="commentlist">
				<?php wp_list_comments(); ?>
			</div>
	</div>
 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments"><?php _e('Comments are closed.','Theme'); ?></p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

<?php endif; // if you delete this the sky will fall on your head ?>
<!-- You can start editing here. -->

<div id="respond">
<h3><?php comment_form_title( __('Leave a Reply','Theme'), __('Leave a Reply %s','Theme') ); ?></h3>
<div class="cancel-comment-reply">
	<small><?php cancel_comment_reply_link(); ?></small>
</div>

<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
<p><?php _e('You must be','Theme'); ?> <a href="<?php echo wp_login_url( get_permalink() ); ?>"><?php _e('logged in','Theme'); ?></a> <?php _e('to post a comment.','Theme'); ?></p>
<?php else : ?>
<div class="post_reply">
<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( is_user_logged_in() ) : ?>

<p><?php _e('Logged in as','Theme'); ?> <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>"><?php _e('Log out &raquo;','Theme'); ?></a></p>

<?php else : ?>
<span><?php _e('Name :','Theme'); ?></span><small> <?php if ($req) echo "*"; ?></small>
<p><input type="text" name="author" id="author"  class="post_user" value="<?php echo esc_attr($comment_author); ?>" size="30" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="author"></label></p>

<span><?php _e('Mail (will not be published)','Theme'); ?> : </span><small><?php if ($req) echo "*"; ?></small>
<p><input type="text" name="email" id="email"  class="post_user" value="<?php echo esc_attr($comment_author_email); ?>" size="30" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?> />
<label for="email"></label></p>

<span><?php _e('Website','Theme'); ?> :</span>
<p><input type="text" name="url" id="url"  class="post_user"  value="<?php echo esc_attr($comment_author_url); ?>" size="30" tabindex="3" />
<label for="url"></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <code><?php echo allowed_tags(); ?></code></small></p>-->
<span><?php _e('Message','Theme'); ?> :</span>
<p><textarea name="comment" id="comment" class="post_user_textarea"  cols="58" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" class="submit_comment" tabindex="5" value="<?php _e('Submit','Theme'); ?>" />
<?php comment_id_fields(); ?>
</p>
<?php do_action('comment_form', $post->ID); ?>

</form>
</div>
<?php endif; // If registration required and not logged in ?>
</div>

