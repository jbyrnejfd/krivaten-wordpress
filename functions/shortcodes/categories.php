<?php
function sc_categories($atts, $content = null) {
	extract(shortcode_atts(array(
		"taxonomy" => 'categories',
		"order" => 'ASC'
	), $atts));

	$args = array(
		'orderby'            => 'slug',
		'order'              => $order,
		'style'              => 'none',
		'echo'               => 0,
		'taxonomy'           => $taxonomy
	);

	$return = wp_list_categories($args);

	// Add an H2 tag before the links
	$return = str_replace('<a ', '<h2><a class="list-group-item"', $return);
	$return = str_replace('</a>', '</a></h2>', $return);

	return '<div class="list-group">'.$return.'</div>';
}

// [categories (taxonomy="categories" order="ASC")]
?>
