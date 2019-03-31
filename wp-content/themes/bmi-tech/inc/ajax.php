<?php

add_action( 'wp_ajax_load_product', 'loadproduct' );
add_action( 'wp_ajax_nopriv_load_product', 'loadproduct' );

function loadproduct() {
	$termId = intval( $_POST['term_id'] );
	$args = array(
		'post_type' => 'bmi_product',
		'posts_per_page' => 6,
		'tax_query' => array(
			array(
				'taxonomy' => 'product_category',
				'field' => 'term_id',
				'terms' => $termId
			)
		)
	);
	$query = new WP_Query( $args );
	$html = '<div class="row" style="margin-top: 10px">';

	if ($query->have_posts()){
		while ( $query->have_posts() ) : $query->the_post();
			$thumb = get_the_post_thumbnail_url(get_the_ID(), 'product_thumb');
			if (!$thumb)
			$thumb = get_template_directory_uri() . "/assets/images/he-thong-day-chuyen-son-tinh-dien.jpg";
			$html .= '<div class="col-4 col-md-4">';
			$html .= '<a href="'.get_the_permalink(get_the_ID()).'">';
			$html .= '<img src="'.$thumb.'"/></a>';
			$html .= '</div>';
		endwhile;
	}
	$html .= '</div>';
	$result = array(
		'status' => 1,
		'data' => $html
	);
	wp_reset_query();
	echo (json_encode($result));
	wp_die();
}