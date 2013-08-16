<?php
function sc_overlay($atts) {	
    extract(shortcode_atts(array(  
        'image' => '',  
        'url' => '',  
        'title' => 'Demo Title',
        'content' => 'Demo Content',
        'width' => '200',
        'height' => '136'   
    ), $atts));
	
	$imageOverlayContentWidth = $width-20;
	$imageOverlayContentHeight = $height-20;
	
	return '
	<div class="imageOverlay mobileHide" style="width: '.$width.'px; height: '.$height.'px;">
		<img src="'.$image.'" alt="'.$title.'" width="'.$width.'" height="'.$height.'" /><div class="imageOverlayContent" style="width: '.$imageOverlayContentWidth.'px; height: '.$imageOverlayContentHeight.'px;"><h5>'.$title.'</h5><p>'.$content.'</p>'.($url != '' ? '<p><a href="'.$url.'" style="width: '.$width.'px; height: '.$height.'px;"></a></p>':'').'</div>
	</div>
	';
}  
add_shortcode("overlay", "sc_overlay");
// [overlay image="Image URL" url="Link URL" title="Title" content="Content" width="200" height="136"]  
?>