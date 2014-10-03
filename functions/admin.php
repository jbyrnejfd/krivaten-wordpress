<?php

/**
 * Create admin page for theme
 */
function add_admin_page() {
	add_submenu_page('themes.php', 'Krivaten Theme Admin', 'Theme Admin', 'manage_options', 'kvt_admin', 'kvt_settings');
}
add_action('admin_menu', 'add_admin_page');


/**
 * All the settings options
 */
function kvt_settings() {
	if (!current_user_can('manage_options')) {
		wp_die('You do not have sufficient permissions to access this page.');
	}

	// Update databse on submit
	if (isset($_POST["update_settings"])) {

		$phoneNum = esc_attr($_POST["kvt_phone_num"]);
		update_option("kvt_phone_num", $phoneNum);

		$urlCity = esc_attr($_POST["kvt_city_url"]);
		update_option("kvt_city_url", $urlCity);

		$urlFacebook = esc_attr($_POST["kvt_facebook_url"]);
		update_option("kvt_facebook_url", $urlFacebook);

		$urlTwitter = esc_attr($_POST["kvt_twitter_url"]);
		update_option("kvt_twitter_url", $urlTwitter);

		$urlLinkedIn = esc_attr($_POST["kvt_linkedin_url"]);
		update_option("kvt_linkedin_url", $urlLinkedIn);

		$urlInstagram = esc_attr($_POST["kvt_instagram_url"]);
		update_option("kvt_instagram_url", $urlInstagram);

		$urlGoogle = esc_attr($_POST["kvt_google_url"]);
		update_option("kvt_google_url", $urlGoogle);

		$urlPinterest = esc_attr($_POST["kvt_pinterest_url"]);
		update_option("kvt_pinterest_url", $urlPinterest);

		$urlEmail = esc_attr($_POST["kvt_email_url"]);
		update_option("kvt_email_url", $urlEmail);

		$urlYouTube = esc_attr($_POST["kvt_youtube_url"]);
		update_option("kvt_youtube_url", $urlYouTube);

		$urlSkype = esc_attr($_POST["kvt_skype_url"]);
		update_option("kvt_skype_url", $urlSkype);

		$urlFeed = esc_attr($_POST["kvt_feed_url"]);
		update_option("kvt_feed_url", $urlFeed);

		$googleAnalytics = esc_attr($_POST["kvt_google_analytics"]);
		update_option("kvt_google_analytics", $googleAnalytics);

		echo '<div id="message" class="updated">Settings saved</div>';
	}

	// Get values for form
	$phoneNum    	= get_option("kvt_phone_num");
	$urlCity    = get_option("kvt_city_url");
	$urlFacebook    = get_option("kvt_facebook_url");
	$urlTwitter     = get_option("kvt_twitter_url");
	$urlLinkedIn    = get_option("kvt_linkedin_url");
	$urlInstagram   = get_option("kvt_instagram_url");
	$urlGoogle      = get_option("kvt_google_url");
	$urlPinterest   = get_option("kvt_pinterest_url");
	$urlEmail       = get_option("kvt_email_url");
	$urlYouTube     = get_option("kvt_youtube_url");
	$urlSkype       = get_option("kvt_skype_url");
	$urlFeed        = get_option("kvt_feed_url");

	$googleAnalytics = get_option("kvt_google_analytics");

?>
	<div class="wrap">
		<?php screen_icon('themes'); ?> <h2>Krivaten Theme Admin</h2>

		<form method="POST" action="">
			<h3>Contact Information</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_phone_num">Phone Number:</label>
					</th>
					<td>
						<input type="text" id="kvt_phone_num" name="kvt_phone_num" value="<?php echo $phoneNum;?>" size="25" />
					</td>
				</tr>
			</table>
			<h3>Social Media</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_city_url">City Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_city_url" name="kvt_city_url" value="<?php echo $urlCity;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_facebook_url">Facebook Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_facebook_url" name="kvt_facebook_url" value="<?php echo $urlFacebook;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_twitter_url">Twitter Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_twitter_url" name="kvt_twitter_url" value="<?php echo $urlTwitter;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_linkedin_url">LinkedIn Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_linkedin_url" name="kvt_linkedin_url" value="<?php echo $urlLinkedIn;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_instagram_url">Instagram Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_instagram_url" name="kvt_instagram_url" value="<?php echo $urlInstagram;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_google_url">Google Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_google_url" name="kvt_google_url" value="<?php echo $urlGoogle;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_pinterest_url">Pinterest Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_pinterest_url" name="kvt_pinterest_url" value="<?php echo $urlPinterest;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_email_url">Email Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_email_url" name="kvt_email_url" value="<?php echo $urlEmail;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_youtube_url">YouTube Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_youtube_url" name="kvt_youtube_url" value="<?php echo $urlYouTube;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_skype_url">Skype Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_skype_url" name="kvt_skype_url" value="<?php echo $urlSkype;?>" size="25" />
					</td>
				</tr>

				<tr valign="top">
					<th scope="row">
						<label for="kvt_feed_url">Feed Url:</label>
					</th>
					<td>
						<input type="text" id="kvt_feed_url" name="kvt_feed_url" value="<?php echo $urlFeed;?>" size="25" />
					</td>
				</tr>

			</table>

			<h3>Google Analytics</h3>
			<table class="form-table">
				<tr valign="top">
					<th scope="row">
						<label for="kvt_google_analytics">Google Analytics Code:</label>
					</th>
					<td>
						<input type="text" id="kvt_google_analytics" name="kvt_google_analytics" value="<?php echo $googleAnalytics;?>" size="25" />
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
