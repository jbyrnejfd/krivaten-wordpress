
<?php 
	wp_enqueue_script('jplayer', get_bloginfo('template_url') . '/assets/js/jplayer.js',false,false);
	wp_enqueue_script('jplayer.playlist', get_bloginfo('template_url') . '/assets/js/jplayer.playlist.js',false,false);
?>
<div id="jp-player" class="jp-player"></div>

<div id="jp-container" class="jp-container">
	<div class="jp-type-playlist">
		<div class="row jp-gui jp-interface">
			<div class="col-sm-2 jp-primary-controls">
				<div class="row">
					<div class="col-xs-6 text-right">
						<div class="jp-control-title">Latest<br />Sermon</div>
					</div>
					<div class="col-xs-6 text-center">
						<a href="javascript:;" class="jp-play" tabindex="1"><i class="fa fa-play fa-3x"></i></a>
						<a href="javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause fa-3x"></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-6 jp-main-content">
				<div class="jp-title"></div>
				<div class="jp-test"></div>

				<div class="jp-progress">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
			</div>
			<div class="col-sm-2 jp-secondary-controls">
				<a href="javascript:;" class="jp-next" tabindex="1">next</a>
				<a href="javascript:;" class="jp-previous" tabindex="1">previous</a>
				<a href="javascript:;" class="jp-stop" tabindex="1">stop</a>
			</div>
			<div class="jp-progress">
						<div class="jp-seek-bar" style="width: 100%;">
							<div class="jp-play-bar" style="overflow: hidden; width: 3.771282257007853%;"></div>
						</div>
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

		new jPlayerPlaylist({
			jPlayer: "#jp-player",
			cssSelectorAncestor: "#jp-container"
		}, [
			{
				title:"Your Face",
				test: "Working",
				mp3:"http://www.jplayer.org/audio/mp3/TSP-05-Your_face.mp3"
			},
			{
				title:"Cyber Sonnet",
				mp3:"http://www.jplayer.org/audio/mp3/TSP-07-Cybersonnet.mp3"
			},
			{
				title:"Tempered Song",
				mp3:"http://www.jplayer.org/audio/mp3/Miaow-01-Tempered-song.mp3"
			},
		], {
			swfPath: "assets/jplayer.swf",
			supplied: "mp3",
			preload: "none",
			wmode: "window",
			smoothPlayBar: true
		});
	});
});
//]]>
</script>