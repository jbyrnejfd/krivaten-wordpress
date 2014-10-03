<?php

/**
 * Add RSS links to the header
 */
automatic_feed_links();


/**
 * Clean up the header
 */
function removeHeadLinks() {

	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');

}

add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');


/**
 * Enable post thumbnails
 */
add_theme_support('post-thumbnails');
// set_post_thumbnail_size(220, 220, true);
// add_image_size('small', 440, 440);
// add_image_size('medium', 880, 660);


/**
 * Widget positions
 */
$kvt_Widgets = array(
	'Sidebar Blog',
	'Sidebar Left',
	'Sidebar Right',
	'Sidebar All',
);

foreach($kvt_Widgets as $widget) {

	if(function_exists('register_sidebar')) {

		$widgetstring = str_replace(" ", "-", strtolower($widget));
		register_sidebar(array(
			'name' => $widget,
			'id' => $widgetstring,
			'before_widget' => "<div class=\"$widgetstring\">",
			'after_widget' => "</div>",
			'before_title' => "<h3>",
			'after_title' => "</h3>",
		));

	}

}


/**
 * Check if widget is present
 */
function kvt_sidebar($widget,$container = false) {

	if (is_active_sidebar($widget)) {

		if($container != false) echo "<div id=\"$widget\"><div class=\"wrapper\">";
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar($widget)) : endif;
		if($container != false) echo "</div></div><div class=\"clearfix\"></div>";

	}

}


/**
 * Add 'http://' to a URL
 */
function kvt_add_http($url) {

	if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
		$url = "http://" . $url;
	}
	return $url;

}


/**
 * Custom 'Read More' link
 */
function new_excerpt_more() {

	global $post;
	return '... (<a href="'. get_permalink($post->ID) . '">Read more</a>)';

}

add_filter('excerpt_more', 'new_excerpt_more');


/**
 * Menu positions
 */
if (function_exists('register_nav_menus')) {

	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-menu' => 'Footer Misc'
		)
	);

}

/**
 * Enable shortcodes in widgets
 */
add_filter('widget_text', 'do_shortcode');

/**
 * Enable custom Royal Slider skin
 */
// add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
// function new_royalslider_add_custom_skin($skins) {
// 	$skins['customSkin'] = array(
// 		'label' => 'Custom skin',
// 		'path' => ''
// 	);
// 	return $skins;
// }


/**
 * Scripts
 */
require_once("scripts.php");


/**
 * Shortcodes
 */
require_once("shortcodes.php");


/**
 * Custom menu walkers
 */
require_once("walker-top-nav.php");
require_once("walker-side-nav.php");
require_once("walker-footer-nav.php");


/**
 * Add custom 'Podcast' post type
 */
add_action('init', 'sermons_register');
function sermons_register() {

	$sermon_labels = array(
		'name' => _x('Podcasts', 'post type general name'),
		'singular_name' => _x('Podcast', 'post type singular name'),
		'add_new' => _x('Add New', 'portfolio item'),
		'add_new_item' => __('Add New Podcast'),
		'edit_item' => __('Edit Podcast'),
		'new_item' => __('New Podcast'),
		'view_item' => __('View Podcast'),
		'search_items' => __('Search Podcasts'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
	);

	$args = array(
		'labels' => $sermon_labels,
		'public' => true,
		'has_archive' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'query_var' => true,
		'menu_icon' => 'dashicons-microphone',
		'rewrite' => array ('slug' => 'sermons'),
		'capability_type' => 'post',
		'hierarchical' => false,
		'menu_position' => null,
		'supports' => array('title','editor','thumbnail')
	);

	register_post_type( 'sermons' , $args );

}

/**
 * Add 'Series' and 'Preachers' taxonomies to 'Podcast' post type
 */
$series_labels = array('name' => 'Series', 'all_items' => 'All Series');
register_taxonomy('series', 'sermons', array('hierarchical' => false, 'labels' => $series_labels, 'query_var' => true, 'rewrite' => array( 'slug' => 'series', 'with_front' => false )));

$speaker_labels = array('name' => 'Preachers', 'all_items' => 'All Preachers');
register_taxonomy('preacher', 'sermons', array('hierarchical' => false, 'labels' => $speaker_labels, 'query_var' => true, 'rewrite' => array( 'slug' => 'preachers', 'with_front' => false )));
?>
