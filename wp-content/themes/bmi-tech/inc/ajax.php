<?php

add_action( 'wp_ajax_load_product', 'loadproduct' );
add_action( 'wp_ajax_nopriv_load_product', 'loadproduct' );

function loadproduct() {
	global $wpdb; // this is how you get access to the database

	$whatever = intval( $_POST['term_id'] );

	$whatever += 10;

	echo $whatever;

	wp_die(); // this is required to terminate immediately and return a proper response
}