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
        "md" => 4,
        "lg" => null,
        "class" => null
    ), $atts));

    if($xs) {$classXs = "col-xs-".$xs;}
    if($sm) {$classSm = "col-sm-".$sm;}
    if($md) {$classMd = "col-md-".$md;}
    if($lg) {$classLg = "col-lg-".$lg;}
    if($style) {$divStyle = 'style="'.$style.'"';}

	return '<div class="'.($xs?$classXs.' ':'').($sm?$classSm.' ':'').($md?$classMd.' ':'').($lg?$classLg.' ':'').$class.'" '.$divStyle.'>'.do_shortcode(trim($content)).'</div>';
}

// [col xs="4" sm="4" md="4" lg="4" class="red" style="padding-top: 50px"]Content[/col]
?>