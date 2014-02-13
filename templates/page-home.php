<?php
/*
Template Name: Home Page
*/
?>
<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>
<div class="entry content-full">
	<?php vdp_sidebar('body-top'); ?>
	<?php require_once(TEMPLATEPATH . '/components/content.php' ); ?>
	<?php vdp_sidebar('body-bottom');?>
</div>
<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>