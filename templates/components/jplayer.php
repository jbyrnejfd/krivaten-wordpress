
<?php 
	wp_enqueue_script('jplayer', get_bloginfo('template_url') . '/assets/js/jplayer.js',false,false);
	// wp_enqueue_script('jplayer', '//cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.4/jquery.jplayer/jquery.jplayer.min.js',false,false);

	/**
	 * populate everything using rss feed, then use caching to minimize requests, create js function to manage the setting of files
	 */
	
	$feedUrl = 'http://myvillagechurch.com/sermons/feed/podcast';
	$jplayerFeedUrl = file_get_contents($feedUrl);

	$jplayerFeed = new SimpleXmlElement($jplayerFeedUrl);

	$namespaces = $jplayerFeed->channel->item->getNameSpaces(true);

	$jplayerItunes = $jplayerFeed->channel->item->children($namespaces['itunes']);

	$jplayerAuthor = $jplayerItunes->author;
	$jplayerSubtitle = $jplayerItunes->subtitle;
	$jplayerImage = $jplayerItunes->image->attributes()[0];
	$jplayerDate = $jplayerFeed->channel->item->pubDate;
	$jplayerTitle = $jplayerFeed->channel->item->title;

	$jplayerUrl = $jplayerFeed->channel->item->enclosure->attributes(); 
	$jplayerUrl = $jplayerUrl['url'];

	foreach($jplayerFeed->channel->item as $time_entry) {
	    // echo "<pre>"; print_r($time_entry); echo "</pre>";
	}
    // echo "<pre>"; print_r($jplayerImage); echo "</pre>";
?>


<div id="jquery_jplayer_1" class="jp-player"></div>
	
<div id="jp_container_1" class="jp-container">
	<div class="jp-type-playlist">
		<div class="row jp-gui jp-interface">
			<div class="col-xs-2 jp-primary-controls">
				<div class="row">
					<div class="col-md-6 text-right visible-md visible-lg">
						<div class="jp-control-title">Latest<br />Sermon</div>
					</div>
					<div class="col-md-6">
						<a href="javascript:;" class="jp-play" tabindex="1"><i class="fa fa-play fa-3x"></i></a>
						<a href="javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause fa-3x"></i></a>
					</div>
				</div>
			</div>

			<div class="col-xs-10 col-sm-6 col-lg-7 jp-main-content">
				<div class="jp-main-content-text">
					<h3><?php echo $jplayerTitle;?></h3>
					<p><em><?php echo $jplayerSubtitle.' | '.$jplayerAuthor.' | '.date('F j, Y', strtotime($jplayerDate));?></em></p>
				</div>

				<div class="jp-progress hidden-xs">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-4 col-lg-3 jp-meta">
				<div class="jp-history">
					<a href="#">Archive <i class="fa fa-archive"></i></a>
					<a href="http://myvillagechurch.com/sermons/feed/podcast" target="_blank">Subscribe <i class="fa fa-rss"></i></a>
				</div>
				<img src="<?php echo $jplayerImage;?>" class="jp-thumbnail hidden-xs" />
			</div>

		</div>
		<div class="jp-volume-bar">
			<div class="jp-volume-bar-value"></div>
		</div>

		<div class="jp-playlist">
			<ul>
				<li></li>
			</ul>
		</div>
		<div class="jp-no-solution">
			<span>Update Required</span>
			To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
		</div>
	</div>
</div>

<script>
//<![CDATA[
jQuery(function($){
	$(document).ready(function(){

		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					mp3: '<?php echo $jplayerUrl;?>'
				});
			},
			volume: 1,
			swfPath: "assets/jplayer.swf",
			supplied: "mp3",
			wmode: "window",
			preload: "none",
			smoothPlayBar: 300
		});

		$("#jquery_jplayer_1").bind($.jPlayer.event.play, function(event) {
			$('#jp_container_1').addClass('jp-playing');
		});
		$("#jquery_jplayer_1").bind($.jPlayer.event.pause, function(event) {
			$('#jp_container_1').removeClass('jp-playing');
		});
	});
});
//]]>
</script>