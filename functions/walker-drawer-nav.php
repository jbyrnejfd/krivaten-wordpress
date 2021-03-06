<?php
///////////////////
//  DRAWER NAV  //
//////////////////
class drawer_nav extends Walker_Nav_Menu {
	function start_lvl( &$output, $depth ) {
		$indent = str_repeat( "\t", $depth );
		$output	.= "\n$indent<ul class=\"drawer-menu\">\n";		
	}

	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0) {
		global $wp_query;
		$indent = ($depth) ? str_repeat("\t", $depth) : '';

		$class_names = $value = '';
		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = ($item->current) ? 'active' : '';
		$classes[] = 'menu-item-' . $item->ID;
		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

		if(!$args->has_children) {
			$class_names .= ($depth == 0) ? ' drawer-topmenu' : ' drawer-submenu';
		} else if($args->has_children) {
			$class_names .= ($depth == 0) ? ' drawer-section' : '';
		}

		$class_names = $class_names ? ' class="'.esc_attr($class_names).'"' : '';

		$id = apply_filters('nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args);
		$id = $id ? ' id="'.esc_attr($id).'"' : '';

		$output .= $indent.'<li'.$id.$value.$class_names.'>';

		if($args->has_children && $item->url === '#') {
			$attributes .= ($args->has_children) ? ' class="drawer-header"' : '';
		} else {
			$attributes = !empty($item->target) ? ' target="'.esc_attr( $item->target).'"' : '';
			$attributes .= !empty($item->url) ? ' href="'.esc_attr($item->url).'"' : '';
		}

		$item_output = $args->before;

		if(!empty($item->attr_title)){
			$item_output .= '<a'.$attributes.'><i class="'.esc_attr($item->attr_title).'"></i>&nbsp;';
		} else {
			if($args->has_children && $item->url === '#') {
				$item_output .= '<h3'.$attributes.'>';
			} else {
				$item_output .= '<a'.$attributes.'>';
			}
		}

		if($depth > 0) {
			$item_output .= '<i class="fa fa-ellipsis-h"></i>&nbsp;';
		}
		
		$item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
		$item_output .= ($args->has_children && $depth == 0 && $item->url === '#') ? '</h3>' : '</a>';
		$item_output .= $args->after;

		$output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
	}

	function display_element($element, &$children_elements, $max_depth, $depth, $args, &$output) {
		if (!$element) {
			return;
		}

		$id_field = $this->db_fields['id'];

		if (is_object($args[0])) {
			$args[0]->has_children = !empty($children_elements[$element->$id_field]);
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}
?>