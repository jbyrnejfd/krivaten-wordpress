<?php
function sc_icon($atts, $content = null) {    
   extract(shortcode_atts(array(    
      "icon" => 'ok',    
      "class" => ''   
   ), $atts));    
   return '<i class="icon-'.$icon.' '.$class.'"></i>';    
}

// [icon icon="ok" (class="")]  
?>