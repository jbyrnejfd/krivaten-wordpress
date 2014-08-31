<?php
/*
Template Name: Home Page
*/
?>
<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<?php require_once(TEMPLATEPATH . '/templates/components/jplayer.php' ); ?>

<div class="entry content-full">
	<?php kvt_sidebar('body-top'); ?>
	<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	<?php kvt_sidebar('body-bottom');?>
</div>

<div class="row featured-tiles">
	<div class="col-xs-12 col-sm-3">
		<div class="featured-tile">
			<img class="featured-tile-image" src="http://lorempixel.com/530/400/people/">
			
			<div class="featured-tile-desription">
				<h3>Connect With Us</h3>
				<p>Some fancy text about something really really interesting.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3">
		<div class="featured-tile">
			<img class="featured-tile-image" src="http://lorempixel.com/530/400/people/">
			
			<div class="featured-tile-desription">
				<h3>Connect With Us</h3>
				<p>Some fancy text about something really really interesting.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3">
		<div class="featured-tile">
			<img class="featured-tile-image" src="http://lorempixel.com/530/400/people/">
			
			<div class="featured-tile-desription">
				<h3>Connect With Us</h3>
				<p>Some fancy text about something really really interesting.</p>
			</div>
		</div>
	</div>
	<div class="col-xs-12 col-sm-3">
		<div class="featured-tile">
			<img class="featured-tile-image" src="http://lorempixel.com/530/400/people/">
			
			<div class="featured-tile-desription">
				<h3>Connect With Us</h3>
				<p>Some fancy text about something really really interesting.</p>
			</div>
		</div>
	</div>
</div>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>