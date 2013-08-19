<?php
function sc_map($atts, $content = null) {    
   extract(shortcode_atts(array(    
      "width" => '100%',    
      "height" => '360',    
      "src" => 'https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=210+South+2nd+Street,+Hamilton,+OH&amp;aq=0&amp;oq=210+south+2nd&amp;sll=39.446799,-84.458084&amp;sspn=0.29322,0.676346&amp;ie=UTF8&amp;hq=&amp;hnear=210+S+2nd+St,+Hamilton,+Butler,+Ohio+45011&amp;ll=39.398237,-84.562544&amp;spn=0.009169,0.021136&amp;t=m&amp;z=14&amp;output=embed'    
   ), $atts));    
   return '<iframe width="'.$width.'" height="'.$height.'" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="'.$src.'"></iframe>';    
}
// [map src="(Map URL)" width="600" height"360"]   
?>