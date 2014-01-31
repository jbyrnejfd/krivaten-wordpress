<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class('excerpt'); ?>>
		<h2 class="title"><a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-content">
			<?php if(has_post_thumbnail()) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
					<?php $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID),'large',true) ?>
					<img src="<?php echo $thumb[0]?>" alt="<?php the_title_attribute(); ?>" width="100%"/>
				</a>
			<?php } ?>
			<?php the_excerpt(); ?>
			<?php include (TEMPLATEPATH . '/components/meta.php' ); ?>
		</div>
	</article>
<?php endwhile; ?>

<?php include (TEMPLATEPATH . '/components/pager.php' ); ?>

<?php else : ?>
	<h2>Not Found</h2>
<?php endif; ?>