<?php
/**
 * Footer nav menu walker
 */
class footer_nav extends Walker_Nav_Menu {

	function start_lvl(&$output, $depth) {
		$indent = str_repeat( "\t", $depth );
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

		// Don't include dividers
		if($item->title == 'divider') {

			return false;

		// All root levels are headers
		} elseif($depth == 0) {

			$this->parent_id = true;
			$item_output .= '<div class="col-md-4">';
				$item_output .= '<h4>'.$item->title.'</h4>';
				$item_output .= '<ul class="list-unstyled">';

		// Everything else
		} else {

			$item_output .= '<li>';
				$item_output .= '<a href="'.esc_attr($item->url).'" '.(!empty($item->target) ? ' target="'.esc_attr( $item->target).'"' : '').'>';
					$item_output .= $args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;
				$item_output .= '</a>';
			$item_output .= '</li>';

		}

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	function end_el(&$output, $item, $depth = 0) {

		if($depth == 0) $output .= "</div>";

	}

	function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {

		if (!$element) return;

		$id_field = $this->db_fields['id'];
		if (is_object($args[0])) {
			$args[0]->has_children = !empty($children_elements[$element->$id_field]);
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);

	}
}
?>
