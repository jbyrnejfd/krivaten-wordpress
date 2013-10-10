<?php
function sc_vimeo($atts) {	
    extract(shortcode_atts(array(  
        "video" => '52596685',  
        "title" => 'Vimeo Video'    
    ), $atts));

    $url = file_get_contents('http://vimeo.com/api/v2/video/'.$video.'.xml');
    $feed = new SimpleXmlElement($url);
    
	$thumb = $feed->video->thumbnail_large;
	$link = $feed->video->url;

	return '
	<div class="well">
		<div class="text-center hidden-xs">
			<iframe src="http://player.vimeo.com/video/'.$video.'?title=0&amp;byline=0&amp;portrait=0&amp;badge=0&amp;color=ffffff" width="560" height="315" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
		<div class="text-center visible-xs">
			<p><a href="'.$link.'" title="'.$title.'" target="_blank"><img src="'.$thumb.'" class="img-rounded" width="100%"></a></p>
			<p><a href="'.$link.'" title="'.$title.'" target="_blank" class="btn btn-primary btn-lg btn-block">View on Vimeo</a></p>
		</div></div>
	';
}

// [vimeo video="52596685" (title="Vimeo Video")]