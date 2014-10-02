<?php
/*
Template Name: Right Column
*/
?>

<?php $sidebarRight = true; ?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	</div>
	<div class="col-sm-4 sidebar-offcanvas">
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
