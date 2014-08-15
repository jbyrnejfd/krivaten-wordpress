<?php
function sc_blog($atts){
	extract(shortcode_atts(array(  
        "count" => 5,
        "category" => "news"
    ), $atts)); 

	$blogQuery = new WP_Query( 
	  array('posts_per_page' => $count, 'category_name' => $category, 'orderby' => 'post_date') 
	);
	
	while($blogQuery->have_posts()) {
		$blogQuery->the_post();
		$output .= "<a href=\"".get_permalink()."\" title=\"".get_the_title()."\" class=\"mobileHide\">".get_the_post_thumbnail(get_the_ID(),'thumbnail', array('class' => 'alignleft'))."</a>";
		$output .= "<h4><a href=\"".get_permalink()."\" title=\"".get_the_title()."\">".get_the_title()."</a></h4>";
		$output .= "<p>Posted On: ".get_the_date()."</p>";
		$output .= "<div class=\"clearfix\"></div>";
		$output .= "<p>".get_the_excerpt()."</p>";
		$output .= "<hr />";
	}
	wp_reset_query();
	
	return $output;
}

// [blog count="3" category="4" orderby="post_date" showtags="true"]
?>