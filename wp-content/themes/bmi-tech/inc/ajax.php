<?php

add_action( 'wp_ajax_load_product', 'loadproduct' );
add_action( 'wp_ajax_nopriv_load_product', 'loadproduct' );

function loadproduct() {
	$termId = intval( $_POST['term_id'] );
	$args = array(
		'post_type' => 'bmi_product',
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
	foreach ($query AS $val){
		$thumb = get_the_post_thumbnail_url($val->ID, 'product_thumb');
		$default = get_template_directory_uri() . "/assets/images/he-thong-day-chuyen-son-tinh-dien.jpg";
		$html .= '<div class="col-4 col-md-4">
                        <a href="'.get_the_permalink($val->ID).'">
                            <img src="'.($thumb)?$thumb:$default.'"/>
                        </a>
                    </div>';
	}
	$html .= '</div>';
	$result = array(
		'status' => 1,
		'data' => $html
	);

	wp_reset_query();

	print_r(json_encode($result));


	wp_die();
}