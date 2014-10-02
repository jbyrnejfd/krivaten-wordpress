<?php
function sc_featured_tile($atts, $content = null) {    
	extract(shortcode_atts(
		array(
			'image' => 'http://lorempixel.com/530/400/people',
			'url' => null,
			'title' => null,
			'content' => null
		),
		$atts)
	);
	$return = '';
	$return .= '<div class="featured-tile">';
		$return .= $url ? '<a href="'.$url.'" class="featured-tile-link" title="'.$title.'">' : '';
			$return .= '<img class="featured-tile-image" src="'.$image.'">';
			$return .= '<div class="featured-tile-desription">';
				if($title) {$return .= '<h3>'.$title.'</h3>';}
				if($content) {$return .= '<p>'.$content.'</p>';}
			$return .= '</div>';
		$return .= $url ? '</a>' : '';
	$return .= '</div>';

	return preg_replace("/\s+/", " ", $return);
}

// [featured image="http://lorempixel.com/530/400/people" (url="" title="" content="")]
?>
