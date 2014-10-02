<?php
	if(is_page() && !is_page_template()) {
		$pageTemplate = 'page';
	} elseif(is_archive() || is_search()) {
		$pageTemplate = 'archive';
	} elseif(is_404()) {
		$pageTemplate = '404';
	} elseif(is_single()) {
		$pageTemplate = 'single';
	} else {
		$pageTemplate = 'index';
	}
	require_once(TEMPLATEPATH . '/templates/'.$pageTemplate.'.php');
?>
