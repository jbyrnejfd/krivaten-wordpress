
<?php
	wp_enqueue_script('jplayer', get_bloginfo('template_url') . '/assets/js/jplayer.js',false,false);
	// wp_enqueue_script('jplayer', '//cdnjs.cloudflare.com/ajax/libs/jplayer/2.6.4/jquery.jplayer/jquery.jplayer.min.js',false,false);
?>

<?php $jplayerData = powerpress_get_enclosure_data(get_the_ID()); ?>

<?php $sidebarPresent = ($sidebarRight || $sidebarLeft ? true : false); ?>

<div id="jquery_jplayer_1" class="jp-player"></div>

<div id="jp_container_1" class="jp-container">
	<?php if($sidebarPresent) { ?>
		<div class="row jp-gui jp-interface jp-sm">
			<div class="col-xs-2 jp-primary-controls">
				<a href="javascript:;" class="jp-play" tabindex="1"><i class="fa fa-play fa-3x"></i></a>
				<a href="javascript:;" class="jp-pause" tabindex="1"><i class="fa fa-pause fa-3x"></i></a>
			</div>

			<div class="col-xs-10 jp-main-content">
				<div class="jp-main-content-text">
					<h3><?php echo the_title();?></h3>
					<p><em><?php echo $jplayerData['subtitle'].' | '.$jplayerData['author'].' | '.get_the_date('F j, Y');?></em></p>
				</div>

				<div class="jp-progress hidden-xs">
					<div class="jp-seek-bar">
						<div class="jp-play-bar"></div>
					</div>
				</div>
			</div>
		</div>
	<?php } else { ?>
		<div class="row jp-gui jp-interface jp-lg">
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
					<h3><?php echo the_title();?></h3>
					<p><em><?php echo $jplayerData['subtitle'].' | '.$jplayerData['author'].' | '.get_the_date('F j, Y');?></em></p>
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
				<img src="<?php echo $jplayerData['itunes_image'];?>" class="jp-thumbnail hidden-xs" />
			</div>
		</div>
	<?php } ?>

	<div class="jp-no-solution">
		<span>Update Required</span>
		To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
	</div>
</div>

<script>
//<![CDATA[
jQuery(function($){
	$(document).ready(function(){

		$("#jquery_jplayer_1").jPlayer({
			ready: function (event) {
				$(this).jPlayer("setMedia", {
					mp3: '<?php echo $jplayerData['url'];?>'
				});
			},
			volume: 1,
			swfPath: "assets/jplayer.swf",
			supplied: "mp3",
			wmode: "window",
			preload: "none",
			smoothPlayBar: 300
		});

	});
});
//]]>
</script>
