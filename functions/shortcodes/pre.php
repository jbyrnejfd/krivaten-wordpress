<?php
function sc_pre($atts, $content = null){
	return '<pre>'.htmlentities(do_shortcode(trim($content))).'</pre>';
}
add_shortcode('pre', 'sc_pre');
// [pre]Content[/pre]
?>