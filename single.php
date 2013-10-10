<?php get_header(); ?>
<div class="row">
	<div class="col-md-8">
		<?php require_once(TEMPLATEPATH . '/inc/content.php' ); ?>
		<?php comments_template(); ?>
	</div>
	<div class="col-md-4 hidden-xs sidebar-left">
		<aside>
			<?php
				vdp_sidebar('sidebar-blog');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>