
<?php 
	wp_enqueue_script('jplayer', get_bloginfo('template_url') . '/assets/js/jplayer.js',false,false);

	$feedUrl = 'http://myvillagechurch.com/sermons/feed/podcast';
	$jplayerFeedUrl = file_get_contents($feedUrl);

	$jplayerFeed = new SimpleXmlElement($jplayerFeedUrl);

	$namespaces = $jplayerFeed->channel->item->getNameSpaces(true);

	$jplayerDc = $jplayerFeed->channel->item->children($namespaces['itunes']);

	$jplayerAuthor = $jplayerDc->author;

	$jplayerUrl = $jplayerFeed->channel->item->enclosure->attributes(); 
	$jplayerUrl = $jplayerUrl['url'];

	$jplayerTitle = htmlentities(str_replace(' - Audio','',$jplayerFeed->channel->item->title));

	$jplayerDate = $jplayerFeed->channel->item->pubDate;


	foreach( $jplayerFeed->channel->item as $time_entry ) {
	    echo "<pre>"; print_r($time_entry); echo "</pre>";
	}
?>


<div id="jquery_jplayer_1" class="jp-player"></div>
	
<div id="jp_container_1" class="jp-container">
	<div class="jp-type-playlist">
		<div class="row jp-gui jp-interface">
			<div class="col-sm-2 jp-primary-controls">
				<div class="row">
					<div class="col-xs-6 text-right">
						<div class="jp-control-title">Latest<br />Sermon</div>
					</div>
					<div class="col-xs-6">
						<a href="javascript:;" class="jp-play" tabindex="1"><i class="fa fa-play fa-3x"></i></a>
						<a href="javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause fa-3x"></i></a>
					</div>
				</div>
			</div>

			<div class="col-sm-6 jp-main-content">
				<div class="jp-title"></div>
				<div class="jp-test"></div>

				<div class="jp-secondary-controls">
					<a href="javascript:;" class="jp-next" tabindex="1">next</a>
					<a href="javascript:;" class="jp-previous" tabindex="1">previous</a>
					<a href="javascript:;" class="jp-stop" tabindex="1">stop</a>
				</div>

				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
			</div>

			<div class="col-sm-2 jp-history">
				<a href="#">Archive <i class="fa fa-archive"></i></a>
				<a href="#">Subscribe <i class="fa fa-rss"></i></a>
			</div>

			<div class="col-sm-2 jp-thumbnail">
				<a href="#">Archive <i class="fa fa-archive"></i></a>
				<a href="#">Subscribe <i class="fa fa-rss"></i></a>
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
					title: "Bubble",
					mp3:"http://www.jplayer.org/audio/mp3/TSP-01-Cro_magnon_man.mp3"
				});
			},
			swfPath: "assets/jplayer.swf",
			supplied: "mp3",
			wmode: "window",
			preload: "none",
			smoothPlayBar: true,
			keyEnabled: true,
			remainingDuration: true,
			toggleDuration: true
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