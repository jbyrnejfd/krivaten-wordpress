<?php
include("shortcodes/accordion.php");
include("shortcodes/alert.php");
include("shortcodes/blog.php");
include("shortcodes/checklist.php");
include("shortcodes/grid.php");
include("shortcodes/icon.php");
include("shortcodes/map.php");
include("shortcodes/pre.php");
include("shortcodes/quote.php");
include("shortcodes/vimeo.php");
include("shortcodes/well.php");
include("shortcodes/youtube.php");

function pre_process_shortcode($content) {
	global $shortcode_tags;

    // Backup current registered shortcodes and clear them all out
	$orig_shortcode_tags = $shortcode_tags;
	$shortcode_tags = array();

	// Add shortcodes
	add_shortcode('accordion', 'sc_accordion');
	add_shortcode('alert', 'sc_alert');
	add_shortcode('blog', 'sc_blog');
	add_shortcode('checklist', 'sc_checklist');
	add_shortcode('row', 'sc_row');
	add_shortcode('row_inner', 'sc_row');
	add_shortcode('col', 'sc_col');
	add_shortcode('col_inner', 'sc_col');
	add_shortcode("icon", "sc_icon");
	add_shortcode("map", "sc_map");
	add_shortcode('pre', 'sc_pre');
	add_shortcode('quote', 'sc_quote');
	add_shortcode("vimeo", "sc_vimeo");
	add_shortcode('well', 'sc_well');
	add_shortcode("youtube", "sc_youtube");

    // Do the shortcode (only the one above is registered)
	$content = do_shortcode($content);

    // Put the original shortcodes back
	$shortcode_tags = $orig_shortcode_tags;

	return $content;
}
add_filter('the_content', 'pre_process_shortcode', 7);
?>