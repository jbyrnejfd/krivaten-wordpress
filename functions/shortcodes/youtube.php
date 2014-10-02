<?php
function sc_youtube($atts) {
	extract(shortcode_atts(array(
		"video" => 'f0bJxG4fgFA'
	), $atts));

	$return = '';
	$return .= '<div class="embed-responsive embed-responsive-16by9">';
		$return .= '<iframe class="embed-responsive-item" src="//www.youtube.com/embed/'.$video.'?rel=0" allowfullscreen></iframe>';
	$return .= '</div>';

	return preg_replace("/\s+/", " ", $return);
}

// [youtube video="1aBSPn2P9bg" (title="YouTube Video")]
