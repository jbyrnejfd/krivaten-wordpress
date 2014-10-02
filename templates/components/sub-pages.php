<?php
	wp_nav_menu(array(
		'theme_location' => 'main-menu',
		'container' => 'nav',
		'container_class' => 'sidenav',
		'menu_class' => 'nav',
		'items_wrap' => '<div id="%1$s" class="%2$s">%3$s</div>',
		'depth' => '0',
		'walker' => new side_nav()
	));
?>
