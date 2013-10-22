<?php
function add_admin_page() {
	add_submenu_page('themes.php', 'The Viral Theme Admin', 'Theme Admin', 'manage_options', 'vdp_admin', 'vdp_settings');
}
add_action('admin_menu', 'add_admin_page');


function vdp_settings() {
	if (!current_user_can('manage_options')) {  
		wp_die('You do not have sufficient permissions to access this page.');  
	}
	
	// Update databse on submit
	if (isset($_POST["update_settings"])) {
		
		$phoneNum = esc_attr($_POST["vdp_phone_num"]);  
		update_option("vdp_phone_num", $phoneNum);

		$urlFacebook = esc_attr($_POST["vdp_facebook_url"]);  
		update_option("vdp_facebook_url", $urlFacebook);
		
		$urlTwitter = esc_attr($_POST["vdp_twitter_url"]);  
		update_option("vdp_twitter_url", $urlTwitter);
		
		$urlLinkedIn = esc_attr($_POST["vdp_linkedin_url"]);  
		update_option("vdp_linkedin_url", $urlLinkedIn);
		
		$urlInstagram = esc_attr($_POST["vdp_instagram_url"]);  
		update_option("vdp_instagram_url", $urlInstagram);
		
		$urlGoogle = esc_attr($_POST["vdp_google_url"]);  
		update_option("vdp_google_url", $urlGoogle);
		
		$urlPinterest = esc_attr($_POST["vdp_pinterest_url"]);  
		update_option("vdp_pinterest_url", $urlPinterest);
		
		$urlEmail = esc_attr($_POST["vdp_email_url"]);  
		update_option("vdp_email_url", $urlEmail);
		
		$urlYouTube = esc_attr($_POST["vdp_youtube_url"]);  
		update_option("vdp_youtube_url", $urlYouTube);
		
		$urlSkype = esc_attr($_POST["vdp_skype_url"]);  
		update_option("vdp_skype_url", $urlSkype);
		
		$urlFeed = esc_attr($_POST["vdp_feed_url"]);  
		update_option("vdp_feed_url", $urlFeed);
		
		
		$googleAnalytics = esc_attr($_POST["vdp_google_analytics"]);  
		update_option("vdp_google_analytics", $googleAnalytics);
		
		?>
		<div id="message" class="updated">Settings saved</div>
		<?php
	}
	
	// Get values for form
	$phoneNum    	= get_option("vdp_phone_num");
	$urlFacebook    = get_option("vdp_facebook_url");
	$urlTwitter     = get_option("vdp_twitter_url");
	$urlLinkedIn    = get_option("vdp_linkedin_url");
	$urlInstagram   = get_option("vdp_instagram_url");
	$urlGoogle      = get_option("vdp_google_url");
	$urlPinterest   = get_option("vdp_pinterest_url");
	$urlEmail       = get_option("vdp_email_url");
	$urlYouTube     = get_option("vdp_youtube_url");
	$urlSkype       = get_option("vdp_skype_url");
	$urlFeed        = get_option("vdp_feed_url");

	$googleAnalytics = get_option("vdp_google_analytics");
	
	?>
	<div class="wrap">  
		<?php screen_icon('themes'); ?> <h2>The Viral Theme Admin</h2>  
		
		<form method="POST" action="">
			<h3>Contact Information</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="vdp_phone_num">Phone Number:</label>
					</th>
					<td>
						<input type="text" id="vdp_phone_num" name="vdp_phone_num" value="<?php echo $phoneNum;?>" size="25" />
					</td>
				</tr>
			</table>
			<h3>Social Media</h3>
			<table class="form-table">                
				<tr valign="top">
					<th scope="row">
						<label for="vdp_facebook_url">Facebook Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_facebook_url" name="vdp_facebook_url" value="<?php echo $urlFacebook;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_twitter_url">Twitter Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_twitter_url" name="vdp_twitter_url" value="<?php echo $urlTwitter;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_linkedin_url">LinkedIn Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_linkedin_url" name="vdp_linkedin_url" value="<?php echo $urlLinkedIn;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_instagram_url">Instagram Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_instagram_url" name="vdp_instagram_url" value="<?php echo $urlInstagram;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_google_url">Google Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_google_url" name="vdp_google_url" value="<?php echo $urlGoogle;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_pinterest_url">Pinterest Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_pinterest_url" name="vdp_pinterest_url" value="<?php echo $urlPinterest;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_email_url">Email Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_email_url" name="vdp_email_url" value="<?php echo $urlEmail;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_youtube_url">YouTube Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_youtube_url" name="vdp_youtube_url" value="<?php echo $urlYouTube;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_skype_url">Skype Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_skype_url" name="vdp_skype_url" value="<?php echo $urlSkype;?>" size="25" />
					</td>
				</tr>
				
				<tr valign="top">
					<th scope="row">
						<label for="vdp_feed_url">Feed Url:</label>
					</th>
					<td>
						<input type="text" id="vdp_feed_url" name="vdp_feed_url" value="<?php echo $urlFeed;?>" size="25" />
					</td>
				</tr>
				
			</table>
			
			<h3>Google Analytics</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="vdp_google_analytics">Google Analytics Code:</label>
					</th>
					<td>
						<input type="text" id="vdp_google_analytics" name="vdp_google_analytics" value="<?php echo $googleAnalytics;?>" size="25" />
					</td>
				</tr>
			</table>
			
			<input type="hidden" name="update_settings" value="true" />
			<p>
				<input type="submit" value="Save settings" class="button-primary"/>
			</p>
		</form>
	</div>
<?php } ?>