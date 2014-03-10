<?php
/*
Template Name: Home Page
*/
?>
<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>
<div class="entry content-full">
	<?php kvt_sidebar('body-top'); ?>
	<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	<?php kvt_sidebar('body-bottom');?>
</div>
<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>