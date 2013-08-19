<?php
function sc_well($atts, $content = null){
	return '<div class="well well-sm">'.do_shortcode(trim($content)).'</div>';
}
// [well]Content[/well]
?>