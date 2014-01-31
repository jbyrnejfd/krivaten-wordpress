<?php get_header(); ?>
<div class="entry content-full">
	<?php vdp_sidebar('body-top'); ?>
	<?php require_once(TEMPLATEPATH . '/components/content.php' ); ?>
	<?php vdp_sidebar('body-bottom');?>
</div>
<?php get_footer(); ?>