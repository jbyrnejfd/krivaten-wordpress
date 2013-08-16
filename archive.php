<?php get_header(); ?>
<div class="row">
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/inc/excerpt.php' ); ?>
	</div>
	<div class="col-sm-4 hidden-sm sidebar-left">
		<aside>
			<?php
				vdp_sidebar('sidebar-blog');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>
