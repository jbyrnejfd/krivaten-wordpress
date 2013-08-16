<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header>
			<h2><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		</header>
		<div class="entry-content">
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail('large'); ?></a>
			<?php } ?>
			<?php the_excerpt(); ?>
			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
		</div>
	</article>
<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

<?php else : ?>
	<header>
		<h2>Not Found</h2>
	</header>
<?php endif; ?>