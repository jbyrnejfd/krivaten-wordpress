<?php
/*
Template Name: Left Column
*/
?>

<?php $sidebarLeft = true; ?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<div class="row row-offcanvas row-offcanvas-left">
	<div class="col-sm-4 sidebar-offcanvas">
		<aside>
			<?php
				require_once(TEMPLATEPATH . '/templates/components/sub-pages.php' );
				kvt_sidebar('sidebar-left');
				kvt_sidebar('sidebar-all');
			?>
		</aside>
	</div>
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	</div>
</div>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
