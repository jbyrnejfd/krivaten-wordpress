<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="entry-content">
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large'); ?></a>
			<?php } ?>
			<?php the_content(); ?>
		</div>
		<?php edit_post_link('Edit Entry', '<p class="text-center">', '</p>'); ?>
	</article>
<?php endwhile; ?>

<?php else : ?>
	<header>
		<h2>Not Found</h2>
	</header>
<?php endif; ?>