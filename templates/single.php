<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>
<div class="row">
	<div class="col-md-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
		<?php comments_template(); ?>
	</div>
	<div class="col-md-4 hidden-xs sidebar-left">
		<aside>
			<?php
				vdp_sidebar('sidebar-blog');
				vdp_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>
<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>