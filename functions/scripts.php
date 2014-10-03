<?php
/**
 * Default scripts to enqueue
 */
function kvt_scripts($DEVELOPMENT) {

	if (!is_admin() && current_theme_supports('jquery-cdn')) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, false);
	}

	if (is_single() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}

	wp_enqueue_script('jquery', get_bloginfo('template_url') . '/assets/js/jquery.min.js',false,false,true);
	wp_enqueue_script('datepicker', get_bloginfo('template_url') . '/assets/js/js.js',false,false,true);

}

add_action('wp_enqueue_scripts', 'kvt_scripts', 100);
?>
