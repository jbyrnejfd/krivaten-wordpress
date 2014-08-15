<?php
function sc_circle_icon($atts, $content = null) {
	extract(shortcode_atts(array(
		"icon" => 'fa-star',
		"class" => ''
		), $atts));
	return '<i class="circle-icon fa '.$icon.' '.$class.'"></i>';
}

// [circle_icon icon="fa-star" (class="")]  
?>