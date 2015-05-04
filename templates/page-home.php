<?php
/*
Template Name: Home Page
*/
?>

<?php require_once(TEMPLATEPATH . '/templates/header.php'); ?>

<div class="entry content-full">
	<?php kvt_sidebar('body-top'); ?>
	<?php
		$new_loop = new WP_Query(array('post_type' => 'sermons', 'posts_per_page' => 1));
		if($new_loop->have_posts()) {
			while($new_loop->have_posts()) {
				$new_loop->the_post();

				$jplayerData = powerpress_get_enclosure_data(get_the_ID());
				if($jplayerData) require_once(TEMPLATEPATH . '/templates/components/jplayer.php' );
			}
		}
		wp_reset_query();
	?>

	<?php require_once(TEMPLATEPATH . '/templates/components/content.php' ); ?>
	<?php kvt_sidebar('body-bottom');?>
</div>

<?php require_once(TEMPLATEPATH . '/templates/footer.php'); ?>
