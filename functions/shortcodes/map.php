<?php
function sc_map($atts, $content = null) {    
   extract(shortcode_atts(array(    
      "width" => '100%',    
      "height" => '360',    
      "src" => ''
   ), $atts));    
   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'"></iframe>';    
}

// [map src="" (width="100%" height"360")]
?>