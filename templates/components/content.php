<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
		<div class="entry-content">
			<?php if(has_post_thumbnail()) { ?>
				<div class="entry-thumb">
					<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large',true) ?>
					<img src="<?php echo $thumb[0]?>" alt="<?php the_title_attribute(); ?>" width="100%"/>
				</div>
			<?php } ?>
			<?php the_content(); ?>
		</div>
		<?php edit_post_link('Edit Entry', '<p class="text-center">', '</p>'); ?>
	</article>
<?php endwhile; ?>

<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>