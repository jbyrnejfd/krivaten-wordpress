<?php
function sc_twitter($atts) {  
    extract(shortcode_atts(array(  
        "user" => 'viraldp',  
        "num" => 1,
        "retweets" => 0
    ), $atts));  
	
	return "
	<div id=\"twitter_update_list\"></div>\n
	<script type=\"text/javascript\" src=\"http://twitter.com/javascripts/blogger.js\"></script>\n
	<script type=\"text/javascript\" src=\"http://api.twitter.com/1/statuses/user_timeline.json?screen_name=".$user."&include_rts=".$retweets."&callback=twitterCallback2&count=".$num."\"></script>\n
	<style type=\"text/css\">
		#twitter_update_list li {
			list-style-type: none;
		}
		#twitter_update_list span {
			display: block;
		}
	</style>
	";
}  
add_shortcode("twitter", "sc_twitter");
// [twitter user="myvillagetweets" num="3" retweets="0"]  
?>