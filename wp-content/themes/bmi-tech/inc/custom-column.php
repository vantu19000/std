<?php

// Add the custom columns to the book post type:
add_filter( 'manage_bmi_product_posts_columns', 'set_custom_edit_book_columns' );
function set_custom_edit_book_columns($columns) {

//	unset( $columns['author'] );
	$columns['noi_bat'] = __( 'Nổi bật', 'your_text_domain' );
	$columns = array(
		'cb' => '&lt;input type="checkbox" />',
		'title' => __( 'Title' ),
		'author' => __( 'Author' ),
		'noi_bat' => __( 'Nổi bật' ),
		'date' => __( 'Date' )
	);

	return $columns;

}

// Add the data to the custom columns for the book post type:
add_action( 'manage_bmi_product_posts_custom_column' , 'custom_bmi_product_column', 10, 2 );
function custom_bmi_product_column( $column, $post_id ) {
	switch ( $column ) {

		case 'noi_bat' :
			echo "hehehehe";

	}
}