<?php
function sc_modal_slider($atts, $content = null) {    
	extract(shortcode_atts(
		array(
			'id' => 2,
			'class' => 'btn btn-link'
		),
		$atts) 
	);
	$return = '';
	$return .= '<button class="'.$class.'" data-toggle="modal" data-target="#modal-'.$id.'">'.do_shortcode(preg_replace("/\s+/", " ", $content)).'</button>';
	$return .= '<div class="modal fade" id="modal-'.$id.'" aria-labelledby="myModalLabel" aria-hidden="true">';
		$return .= '<div class="modal-dialog">';
			$return .= '<div class="modal-content">';
				$return .= '<div class="modal-body">'.do_shortcode('[new_royalslider id="'.$id.'"]').'</div>';
			$return .= '</div>';
		$return .= '</div>';
	$return .= '</div>';

	return preg_replace("/\s+/", " ", $return);
}

// [modal_slider (id="1")]
?>
