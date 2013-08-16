<?php
function sc_quote($atts, $content = null){
	extract(shortcode_atts(
		array(
			'source' => 'Edit source attribute'
		),
		$atts) 
	);
	return '<blockquote>'.do_shortcode(trim($content)).'<small><cite title="'.$source.'">'.$source.'</cite></small></blockquote>';
}
add_shortcode('quote', 'sc_quote');
// [quote]Content[/quote]
?>