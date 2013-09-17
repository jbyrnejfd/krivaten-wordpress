<?php
function sc_alert($atts, $content = null){
	extract(shortcode_atts(
		array(
			'type' => 'danger'
		),
		$atts) 
	);
	return '<div class="alert'.($type?' alert-'.$type:'').'">'.do_shortcode(trim($content)).'</div>';
}
// [alert]Content[/alert]
?>