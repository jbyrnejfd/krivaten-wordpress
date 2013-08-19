<?php
function sc_pre($atts, $content = null){
	return '<pre>'.htmlentities(do_shortcode(trim($content))).'</pre>';
}
// [pre]Content[/pre]
?>