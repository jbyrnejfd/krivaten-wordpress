<?php
////////////////
//  SIDE NAV  //
////////////////
// https://github.com/twittem/wp-bootstrap-navwalker
class side_nav extends Walker_Nav_Menu {

	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul role=\"menu\" class=\"nav\">\n";
	}

	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */

	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		$indent = ($depth) ? str_repeat( "\t", $depth ) : '';
		//echo '<pre>';print_r($item);echo '</pre>';

		$class_names = $value = '';

		$classes = empty($item->classes) ? array() : (array) $item->classes;
		$classes[] = 'menu-item-' . $item->ID;

		$class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));

		// if item is currently active, then add the active class
		if(in_array('current-menu-item', $classes)) {$class_names .= ' active';}

		$hide = false;
		// if item has children
		if($args->has_children) {
			// if item does not have active child or is not active itself, then hide it
			if(!in_array('current-menu-parent', $classes) && !in_array('current-menu-item', $classes)) {
				$hide = true;
			}
		} else {
			// if item is not current and does not have a parent, then hide it
			if(!in_array('current-menu-item', $classes) && !$item->post_parent) {
				$hide = true;
			}
		}
		if($hide) {return false;}

		$class_names = $class_names ? ' class="'.esc_attr($class_names).'"' : '';

		$output .= $indent.'<li'.$value.$class_names.'>';

		// if item has children add atrributes to the link
		$atts['href'] = ! empty($item->url) ? $item->url : '#';

		$atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args);

		$attributes = '';
		foreach ($atts as $attr => $value) {
			if(!empty($value)) {
				$value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
				$attributes .= ' '.$attr.'="'.$value.'"';
			}
		}

		// assemble link
		$item_output = $args->before;
			$item_output .= '<a'. $attributes .'>';
				$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;
			$item_output .= '</a>';
		$item_output .= $args->after;

		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
	}

	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. 
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @see Walker::start_el()
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */

	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		if(!$element) {
			return;
		}

		$id_field = $this->db_fields['id'];

        //display this element
		if(is_object($args[0])) {
			$args[0]->has_children = ! empty($children_elements[$element->$id_field]);
		}

		parent::display_element($element, $children_elements, $max_depth, $depth, $args, $output);
	}
}
?>