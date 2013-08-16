<?php
function sc_youtube($atts) {	
    extract(shortcode_atts(array(  
        "video" => 'f0bJxG4fgFA',  
        "title" => 'YouTube Video'    
    ), $atts));
		
	return '
	<div class="well">
		<p class="text-center hidden-sm">
			<iframe width="560" height="315" src="//www.youtube.com/embed/'.$video.'?rel=0" frameborder="0" allowfullscreen></iframe>
		</p>
		<p class="text-center visible-sm">
			<a href="http://www.youtube.com/watch?v='.$video.'" title="'.$title.'" target="_blank"><img src="http://img.youtube.com/vi/'.$video.'/hqdefault.jpg" width="100%"></a>
		</p>
		<p class="text-center">
			<a href="http://www.youtube.com/watch?v='.$video.'" title="'.$title.'" target="_blank" class="btn btn-primary btn-large">View Video</a>
		</p></div>
	';
}  
add_shortcode("youtube", "sc_youtube");
// [youtube value="1aBSPn2P9bg" width="620"]  