<?php
	wp_nav_menu(array(
		'theme_location' => 'main-menu',
		'container' => 'nav',
		'container_class' => 'sidenav',
		'menu_class' => 'nav',
		'depth' => '0',
		'walker' => new side_nav()
	));
?>
