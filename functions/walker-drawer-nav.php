<?php
///////////////////
//  DRAWER NAV  //
//////////////////
class drawer_nav extends Walker_Nav_Menu {

	public $has_dropdown = false;

	function start_lvl(&$output, $depth) {
		$indent = str_repeat( "\t", $depth );
		$output .= "\n$indent<ul role=\"menu\" class=\"drawer-nav\">\n";
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {

		// if it has a url then add it
		if($item->title == 'divider') {

			$item_output = '<li class="divider"></li>';

		} else {

			$has_dropdown = $this->has_dropdown = in_array('menu-item-has-children', $item->classes) && !$depth;
			$is_link = ($item->url != '#' ? true : false);

			$item_output .= '<li class="'.($item->current || $item->current_item_parent ? 'active' : '').'">';

				if($is_link) {
					$item_output .= '<a href="'.esc_attr($item->url).'" class="'.($item->current ? 'active' : '').'"'.(!empty($item->target) ? ' target="'.esc_attr( $item->target).'"' : '').'>';
				} else {
					$item_output .= '<div class="drawer-header">';
				}

					$item_output .= (!$has_dropdown ? ' <i class="fa fa-angle-double-right"></i> ' : '').$args->link_before.apply_filters('the_title', $item->title, $item->ID).$args->link_after;

				if($is_link) {
					$item_output .= '</a>';
				} else {
					$item_output .= '</div>';
				}

		}

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);

	}

	function end_el(&$output, $depth) {
			if($this->has_dropdown) $output .= "</ul>";
		$output .= "</li>";
	}

	function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
		if (!$element) return;

		// only render menu item relatives
		$this->current_relatives[] = $element->ID;

		$id_field = $this->db_fields['id'];
		if (is_object($args[0])) {
			$args[0]->has_children = !empty($children_elements[$element->$id_field]);
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}
?>
