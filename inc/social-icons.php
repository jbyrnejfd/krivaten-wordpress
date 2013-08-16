<p class="social-icons">
	<?php 
		$urlFacebook = get_option("vdp_facebook_url");
		if($urlFacebook != "") { 
			echo '<a href="'.vdp_add_http($urlFacebook).'" title="View Facebook Page" target="_blank"><i class="icon-facebook"></i></a>';
		}
		
		$urlTwitter = get_option("vdp_twitter_url");
		if($urlTwitter != "") { 
			echo '<a href="'.vdp_add_http($urlTwitter).'" title="View Twitter Page" target="_blank"><i class="icon-twitter"></i></a>';
		}
		
		$urlLinkedIn = get_option("vdp_linkedin_url");
		if($urlLinkedIn != "") { 
			echo '<a href="'.vdp_add_http($urlLinkedIn).'" title="View LinkedIn Page" target="_blank"><i class="icon-linkedin"></i></a>';
		}
		
		$urlInstagram = get_option("vdp_instagram_url");
		if($urlInstagram != "") { 
			echo '<a href="'.vdp_add_http($urlInstagram).'" title="View Instagram Page" target="_blank"><i class="icon-instagram"></i></a>';
		}
		
		$urlGoogle = get_option("vdp_google_url");
		if($urlGoogle != "") { 
			echo '<a href="'.vdp_add_http($urlGoogle).'" title="View Google Page" target="_blank"><i class="icon-google-plus-sign"></i></a>';
		}
		
		$urlPinterest = get_option("vdp_pinterest_url");
		if($urlPinterest != "") { 
			echo '<a href="'.vdp_add_http($urlPinterest).'" title="View Pinterest Page" target="_blank"><i class="icon-pinterest-sign"></i></a>';
		}
		
		$urlEmail = get_option("vdp_email_url");
		if($urlEmail != "") { 
			echo '<a href="'.vdp_add_http($urlEmail).'" title="View Email Page" target="_blank"><i class="icon-envelope"></i></a>';
		}
		
		$urlYouTube = get_option("vdp_youtube_url");
		if($urlYouTube != "") { 
			echo '<a href="'.vdp_add_http($urlYouTube).'" title="View YouTube Page" target="_blank"><i class="icon-youtube"></i></a>';
		}
		
		$urlSkype = get_option("vdp_skype_url");
		if($urlSkype != "") { 
			echo '<a href="'.vdp_add_http($urlSkype).'" title="View Skype Page" target="_blank"><i class="icon-skype"></i></a>';
		}

		$urlFeed = get_option("vdp_feed_url");
		if($urlFeed != "") { 
			echo '<a href="'.vdp_add_http($urlFeed).'" title="View Feed Page" target="_blank"><i class="icon-rss-sign"></i></a>';
		}
	?>
</p>