<?php
function sc_quote($atts, $content = null){
	extract(shortcode_atts(
		array(
			'source' => null
		),
		$atts) 
	);
	return '<blockquote>'.do_shortcode(trim($content)).($source?'<small><cite title="'.$source.'">'.$source.'</cite></small>':'').'</blockquote>';
}

// [quote]Content[/quote]
?>