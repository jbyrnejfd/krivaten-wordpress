<?php $sidebarRight = true; ?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/excerpt.php' ); ?>
	</div>
	<div class="col-sm-4 sidebar-offcanvas">
		<aside>
			<?php
				kvt_sidebar('sidebar-blog');
				kvt_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
