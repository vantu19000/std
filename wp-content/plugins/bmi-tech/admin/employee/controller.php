<?php

class BMIControllerEmployee {
	public function xxx(){
		die("hiihihihi");
	}

	public function save(){
		$data = $_POST;

		if (!$data['bmi_nonce'] || ! BMIHelper::checkNonce($data['bmi_nonce'])){
			die('Request denied');
		}

//		echo "<pre>";
//		print_r($data);
//		echo "</pre>";
//		die;

		$data['data']['params'] = json_encode($data['data']['params']);

		global $wpdb;
		$checkExist = $wpdb->get_results("SELECT count(*) AS total FROM {$wpdb->prefix}bmi_configuration WHERE name = '{$data['data']['name']}'");
		$checkExist = reset($checkExist);
		$result = false;
		if ($checkExist->total){
			$result = $wpdb->update($wpdb->prefix.'bmi_configuration', array('params'=>$data['data']['params']), array('name'=>$data['data']['name']));
		}else{
			$data['data']['created_at'] = date("Y-m-d H:i:s");
			$result = $wpdb->insert($wpdb->prefix.'bmi_configuration', $data['data']);
		}

		wp_redirect('admin.php?page=bmi_employee');

	}
}

?>