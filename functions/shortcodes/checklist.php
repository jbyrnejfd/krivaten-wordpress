<?php
function sc_checklist($atts, $content = null){
	extract(shortcode_atts(array(  
        "class" => null
    ), $atts));

    if($class) {
    	$checklistClass = "checklist $class";
    } else {
    	$checklistClass = "checklist";
    }

	return '<div class="'.$checklistClass.'">'.do_shortcode(trim($content)).'</div>';
}

// [checklist (class="")]Content[/checklist]
?>