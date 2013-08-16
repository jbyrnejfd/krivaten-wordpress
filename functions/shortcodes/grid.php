<?php
// Start Fluid Grid
function sc_grid($atts, $content = null){
	return '<div class="row">'.do_shortcode(trim($content)).'</div>';
}
add_shortcode('grid', 'sc_grid');
add_shortcode('grid_inner', 'sc_grid');
// [fluid]Content[/fluid]
// [fluid_inner]Content[/fluid_inner]

// Column Span
function sc_col($atts, $content = null){
	extract(shortcode_atts(array(  
        "all" => null,
        "small" => null,
        "large" => 4,
        "style" => null,
        "class" => null
    ), $atts));


    if($all) {$classAll = "col-".$large;}
    if($small) {$classSmall = "col-sm-".$small;}
    if($large) {$classLarge = "col-lg-".$large;}
    if($style) {$divStyle = 'style="'.$style.'"';}

	return '<div class="'.($all?$classAll.' ':'').($small?$classSmall.' ':'').($large?$classLarge.' ':'').$class.'" '.$divStyle.'>'.do_shortcode(trim($content)).'</div>';
}
add_shortcode('col', 'sc_col');
add_shortcode('col_inner', 'sc_col');
// [col width="4" style="padding-top: 50px"]Content[/col]
?>