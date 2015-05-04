<?php
/**
 * Default scripts to enqueue
 */
function kvt_scripts($DEVELOPMENT) {

	if (!is_admin() && current_theme_supports('jquery-cdn')) {
		wp_deregister_script('jquery');
		wp_register_script('jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', false, null, false);
	}

	wp_enqueue_script('jquery', get_bloginfo('template_url') . '/assets/js/jquery.min.js',false,false,true);
	wp_enqueue_script('datepicker', get_bloginfo('template_url') . '/assets/js/js.js',false,false,true);

	add_filter('wp_default_scripts', 'remove_jquery_migrate');

	function remove_jquery_migrate( &$scripts) {
		if(!is_admin()) {
			$scripts->remove( 'jquery');
			$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.1' );
		}
	}

	remove_action('wp_head', 'print_emoji_detection_script', 7);
	remove_action('wp_print_styles', 'print_emoji_styles');
}

add_action('wp_enqueue_scripts', 'kvt_scripts', 100);
?>
