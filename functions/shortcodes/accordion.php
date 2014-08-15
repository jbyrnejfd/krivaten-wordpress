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

	return '<div class="panel-group" id="accordion-'.$count.'"> <div class="panel"><div class="panel-heading"><'.$tag.' class="panel-title"><a class="accordion-toggle '.$collapsed.'" data-toggle="collapse" data-parent="#accordion-'.$count.'" href="#collapse-'.$count.'">'.$title.'</a> </'.$tag.'></div><div id="collapse-'.$count.'" class="panel-collapse collapse '.$in.'"><div class="panel-body">'.do_shortcode(trim($content)).'</div></div></div></div>'; }

// [accordion title="Title" (tag="h3" open="false")]Content[/accordion]
?>