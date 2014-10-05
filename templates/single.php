<?php $sidebarRight = true; ?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<div class="row row-offcanvas row-offcanvas-right">
	<div class="col-sm-8">
		<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	</div>
	<div class="col-sm-4 sidebar-offcanvas">
		<aside>
			<?php
				echo '<ul class="list-group">';
				$args = array('numberposts' => '5');
				$recent_posts = wp_get_recent_posts($args);
				foreach($recent_posts as $recent){
					echo '<a class="list-group-item" href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a>';
				}
				echo '</ul>';

				kvt_sidebar('sidebar-blog');
				kvt_sidebar('sidebar-all');
			?>
		</aside>
	</div>
</div>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
