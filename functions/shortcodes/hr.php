<?php
function sc_hr($atts, $content = null){
	return '<div class="hr"><span>'.do_shortcode(trim($content)).'</span></div>';
}

// [hr]Content[/hr]
?>