<?php 
	$urlCity = get_option("kvt_city_url");
	if($urlCity != "") { 
		echo '<a href="'.kvt_add_http($urlCity).'" title="View Facebook Page" target="_blank"><i class="icon city"></i></a>';
	}

	$urlFacebook = get_option("kvt_facebook_url");
	if($urlFacebook != "") { 
		echo '<a href="'.kvt_add_http($urlFacebook).'" title="View Facebook Page" target="_blank"><i class="icon facebook"></i></a>';
	}

	$urlTwitter = get_option("kvt_twitter_url");
	if($urlTwitter != "") { 
		echo '<a href="'.kvt_add_http($urlTwitter).'" title="View Twitter Page" target="_blank"><i class="icon twitter"></i></a>';
	}
	
	$urlLinkedIn = get_option("kvt_linkedin_url");
	if($urlLinkedIn != "") { 
		echo '<a href="'.kvt_add_http($urlLinkedIn).'" title="View LinkedIn Page" target="_blank"><i class="fa fa-linkedin"></i></a>';
	}
	
	$urlInstagram = get_option("kvt_instagram_url");
	if($urlInstagram != "") { 
		echo '<a href="'.kvt_add_http($urlInstagram).'" title="View Instagram Page" target="_blank"><i class="fa fa-instagram"></i></a>';
	}
	
	$urlGoogle = get_option("kvt_google_url");
	if($urlGoogle != "") { 
		echo '<a href="'.kvt_add_http($urlGoogle).'" title="View Google Page" target="_blank"><i class="fa fa-google-plus"></i></a>';
	}
	
	$urlPinterest = get_option("kvt_pinterest_url");
	if($urlPinterest != "") { 
		echo '<a href="'.kvt_add_http($urlPinterest).'" title="View Pinterest Page" target="_blank"><i class="fa fa-pinterest"></i></a>';
	}
	
	$urlEmail = get_option("kvt_email_url");
	if($urlEmail != "") { 
		echo '<a href="'.kvt_add_http($urlEmail).'" title="View Email Page" target="_blank"><i class="fa fa-envelope"></i></a>';
	}
	
	$urlYouTube = get_option("kvt_youtube_url");
	if($urlYouTube != "") { 
		echo '<a href="'.kvt_add_http($urlYouTube).'" title="View YouTube Page" target="_blank"><i class="fa fa-youtube"></i></a>';
	}
	
	$urlSkype = get_option("kvt_skype_url");
	if($urlSkype != "") { 
		echo '<a href="'.kvt_add_http($urlSkype).'" title="View Skype Page" target="_blank"><i class="fa fa-skype"></i></a>';
	}

	$urlFeed = get_option("kvt_feed_url");
	if($urlFeed != "") { 
		echo '<a href="'.kvt_add_http($urlFeed).'" title="View Feed Page" target="_blank"><i class="icon rss"></i></a>';
	}
?>