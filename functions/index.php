<?php

// Add RSS links to <head> section
automatic_feed_links();

// Clean up the head
function removeHeadLinks() {
	remove_action('wp_head', 'rsd_link');
	remove_action('wp_head', 'wlwmanifest_link');
}
add_action('init', 'removeHeadLinks');
remove_action('wp_head', 'wp_generator');

// Enable post thumbnails
add_theme_support('post-thumbnails');
// set_post_thumbnail_size(220, 220, true);
// add_image_size('small', 440, 440);
// add_image_size('medium', 880, 660);

// Widgets
$kvt_Widgets = array(
	//'Top',
	//'Header Top',
	//'Header Body',
	//'Header Bottom',
	//'Navigation',
	//'Showcase',
	//'Content Top',
	'Sidebar Blog',
	'Sidebar Left',
	'Sidebar Right',
	'Sidebar All',
	//'Body Top',
	//'Body Bottom',
	//'Content Bottom',
	//'Footer Top',
	//'Footer Body',
	//'Footer Bottom',
	//'Copyright',
	//'Bottom'
);
foreach ($kvt_Widgets as $widget) {
	if (function_exists('register_sidebar')){
	    $widgetstring = str_replace(" ","-",strtolower($widget));
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

// Widget Check
function kvt_sidebar($widget,$container = false) {
	if (is_active_sidebar($widget)) {
		if($container != false) {echo "<div id=\"$widget\"><div class=\"wrapper\">";}
		if(!function_exists('dynamic_sidebar') || !dynamic_sidebar($widget)) : endif;
		if($container != false) {echo "</div></div><div class=\"clearfix\"></div>";}
	}
}

// Add HTTP
function kvt_add_http($url) {
    if (!preg_match("~^(?:f|ht)tps?://~i", $url)) {
        $url = "http://" . $url;
    }
    return $url;
}

// Read More
function new_excerpt_more() {
	global $post;
	return '... (<a href="'. get_permalink($post->ID) . '">Read more</a>)';
}
add_filter('excerpt_more', 'new_excerpt_more');

// Add Menus
if (function_exists('register_nav_menus')) {
	register_nav_menus(
		array(
			'main-menu' => 'Main Menu',
			'footer-services' => 'Footer Services',
			'footer-misc' => 'Footer Misc',
			'mobile-menu' => 'Mobile Menu'
		)
	);
}

// Enable Shortcodes in Widgets
add_filter('widget_text', 'do_shortcode');

function kvt_edit_post_link($output) {
    $output = str_replace('class="post-edit-link"', 'class="btn btn-primary btn-lg"', $output);
    return $output;
}
add_filter('edit_post_link', 'kvt_edit_post_link');

// Enable Custom Royal Slider Skin
add_filter('new_royalslider_skins', 'new_royalslider_add_custom_skin', 10, 2);
function new_royalslider_add_custom_skin($skins) {
	$skins['customSkin'] = array(
		'label' => 'Custom skin',
		'path' => ''
	);
	return $skins;
}

// Scripts
require_once("scripts.php");

// Shortcodes
require_once("shortcodes.php");

// Menu Walkers
require_once("walker-top-nav.php");
require_once("walker-side-nav.php");
require_once("walker-drawer-nav.php");

// Initiate Admin
require_once("admin.php");

// Mobile Detect
require_once("mobile-detect.php");
// $detect = new Mobile_Detect;
// $detect->isMobile();
// $detect->isTablet();
// $detect->isiOS();
// $detect->isAndroidOS();
?>