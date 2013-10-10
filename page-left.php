<?php
/*
Template Name: Left Menu
*/
?>
<?php get_header(); ?>
<div class="row">
	<div class="col-md-4 hidden-xs">
		<aside>
			<?php
				require_once(TEMPLATEPATH . '/inc/sub-pages.php' );
				vdp_sidebar('sidebar-left');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
	<div class="col-md-8">
		<?php require_once(TEMPLATEPATH . '/inc/content.php' ); ?>
	</div>
</div>
<?php get_footer(); ?>