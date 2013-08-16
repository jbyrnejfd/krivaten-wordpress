<?php
function sc_accordion($atts, $content = null){
	extract(shortcode_atts(
		array(
			'title' => 'Click To Open',
			'tag' => 'h3',
			'open' => ''
		),
		$atts) 
	);
	static $count = 0;
	++$count;
	if($open) {$collapsed = ""; $in = "in";} else {$collapsed = "collapsed"; $in = "";}

	return '<div class="accordion" id="accordion'.$count.'"><div class="accordion-group"><div class="accordion-heading"><'.$tag.'><a class="accordion-toggle '.$collapsed.'" data-toggle="collapse" data-parent="#accordion'.$count.'" href="#collapse'.$count.'">'.$title.'</a></'.$tag.'></div><div id="collapse'.$count.'" class="accordion-body collapse '.$in.'"><div class="accordion-inner">'.do_shortcode(trim($content)).'</div></div></div></div>';
}
add_shortcode('accordion', 'sc_accordion');
// [accordion title="Your Toggle Title" tag="h2"]Toggle Content[/accordion]
?>