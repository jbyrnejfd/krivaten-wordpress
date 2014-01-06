<?php
function sc_circle_icon($atts, $content = null) {
	extract(shortcode_atts(array(
		"icon" => 'ok',
		"class" => '',
		"diameter" => 160
		), $atts));
	return '<i class="circle-icon fa '.$icon.' '.$class.'" style="line-height: '.$diameter.'px; width: '.$diameter.'px; height: '.$diameter.'px;"></i>';
}

// [circle_icon icon="ok" (class="" diameter="160")]  
?>