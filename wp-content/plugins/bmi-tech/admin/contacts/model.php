<?php

class BMIModelContacts {


	public function getItems(){
		global $wpdb;
		$data = $wpdb->get_results( "SELECT * FROM {$wpdb->prefix}bmi_contacts" );
		return $data;
	}

}
