<?php
function sc_well($atts, $content = null){
	return '<div class="well well-sm">'.do_shortcode(trim($content)).'</div>';
}
add_shortcode('well', 'sc_well');
// [well]Content[/well]
?>