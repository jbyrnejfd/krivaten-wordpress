<?php
/*
Template Name: Right Column
*/
?>
<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>
<div class="row">
	<div class="col-md-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	</div>
	<div class="col-md-4 hidden-xs">
		<aside>
			<?php
				require_once(TEMPLATEPATH . '/templates/components/sub-pages.php' );
				kvt_sidebar('sidebar-right');
				kvt_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>