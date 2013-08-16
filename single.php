<?php get_header(); ?>
<div class="row">
	<div class="col-8 col-sm-8">
		<?php require_once(TEMPLATEPATH . '/inc/content.php' ); ?>
		<?php comments_template(); ?>
	</div>
	<div class="col-4 col-sm-4 hidden-sm sidebar-left">
		<aside>
			<?php
				vdp_sidebar('sidebar-blog');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>