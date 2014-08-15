<?php
// Start Row
function sc_row($atts, $content = null){
	return '<div class="row">'.do_shortcode(trim($content)).'</div>';
}

// [row]Content[/row]
// [row_inner]Content[/row_inner]

// Columns
function sc_col($atts, $content = null){
	extract(shortcode_atts(array(  
        "xs" => null,
        "sm" => null,
        "md" => null,
        "lg" => null,
        "class" => null,
        "style" => null
    ), $atts));

    if($xs) {$classXs = "col-xs-".$xs;}
    if($sm) {$classSm = "col-sm-".$sm;}
    if($md) {$classMd = "col-md-".$md;}
    if($lg) {$classLg = "col-lg-".$lg;}
    if($style) {$divStyle = 'style="'.$style.'"';}

	return '<div class="'.($xs?$classXs.' ':'').($sm?$classSm.' ':'').($md?$classMd.' ':'').($lg?$classLg.' ':'').$class.'" '.$divStyle.'>'.do_shortcode(trim($content)).'</div>';
}

// [row][/row]
// [col (xs="" sm="" md="" lg="" class="" style="")]Content[/col]
?>