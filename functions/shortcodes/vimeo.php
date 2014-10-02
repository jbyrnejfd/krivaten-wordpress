<?php
function sc_vimeo($atts) {
	extract(shortcode_atts(array(
		"video" => '52596685'
	), $atts));

	$return = '';
	$return .= '<div class="embed-responsive embed-responsive-16by9">';
		$return .= '<iframe src="http://player.vimeo.com/video/'.$video.'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
	$return .= '</div>';

	return preg_replace("/\s+/", " ", $return);
}

// [vimeo video="52596685" (title="Vimeo Video")]
