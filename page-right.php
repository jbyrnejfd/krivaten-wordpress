<?php
/*
Template Name: Right Column
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/inc/content.php' ); ?>
	</div>
	<div class="col-sm-4 hidden-xs">
		<aside>
			<?php
				require_once(TEMPLATEPATH . '/inc/sub-pages.php' );
				vdp_sidebar('sidebar-right');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php get_footer(); ?>