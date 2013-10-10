<?php
function sc_youtube($atts) {	
    extract(shortcode_atts(array(  
        "video" => 'f0bJxG4fgFA',  
        "title" => 'YouTube Video'    
    ), $atts));

    $thumb = 'http://img.youtube.com/vi/'.$video.'/hqdefault.jpg';
    $link = 'http://www.youtube.com/watch?v='.$video;
		
	return '
	<div class="well">
		<div class="text-center hidden-xs">
			<iframe width="560" height="315" src="//www.youtube.com/embed/'.$video.'?rel=0" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="text-center visible-xs">
			<p><a href="'.$link.'" title="'.$title.'" target="_blank"><img src="'.$thumb.'" class="img-rounded" width="100%"></a></p>
			<p><a href="'.$link.'" title="'.$title.'" target="_blank" class="btn btn-primary btn-lg btn-block">View on YouTube</a></p>
		</div></div>
	';
}

// [youtube video="1aBSPn2P9bg" (title="YouTube Video")] 