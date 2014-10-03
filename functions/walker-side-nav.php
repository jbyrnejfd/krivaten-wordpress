<?php
/**
 * Side nav menu walker
 */
class side_nav extends Walker_Nav_Menu {

	public $current_relatives = array();

	function start_lvl(&$output, $depth) {}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

		// If it has a url then add it
		if($item->url != '#' && !empty($item->url)) {

			$attributes = ' class="list-group-item'.($item->current ? ' active' : '').'"';
			$attributes .= ' href="'.esc_attr($item->url).'"';
			$attributes .= !empty($item->target) ? ' target="'.esc_attr( $item->target).'"' : '';

			$item_output = $args->before;

			$item_output .= '<a'.$attributes.'>';

			// Add ellipsis for sub menus
			$icon_depth = $depth - 1;
			if($icon_depth > 0) {
				for($i = 0 ; $i<$icon_depth ; $i++) {
					$item_output .= '<i class="fa fa-ellipsis-h"></i> ';
				}
			}

			if(!empty($depth_icons)){
				$item_output .= '<i class="fa '.esc_attr($item->attr_title).'"></i> ';
			}

			if(!empty($item->attr_title)){
				$item_output .= '<i class="fa '.esc_attr($item->attr_title).'"></i> ';
			}

			$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
			$item_output .= '</a>';

			$item_output .= $args->after;

			$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

		}

	}

	function end_lvl(&$output, $depth) {}

	function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
		if (!$element) return;

		// Only render menu item relatives to limit markup
		if($element->current_item_parent || $element->current_item_ancestor || in_array($element->menu_item_parent, $this->current_relatives)) {
			$this->current_relatives[] = $element->ID;

			$id_field = $this->db_fields['id'];
			if (is_object($args[0])) {
				$args[0]->has_children = !empty($children_elements[$element->$id_field]);
			}

			parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
		}
	}
}
?>
