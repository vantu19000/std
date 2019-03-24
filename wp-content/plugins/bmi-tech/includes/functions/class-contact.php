<?php

class BMIcontact {

	private $fillable = array(
		'fullname', 'mobile', 'email',
		'message',
	);

	private $notNull = array(
		'fullname'       => 'Tên đầy đủ',
		'mobile'         => 'Mobile',
		'email'      => 'Email',
		'message'        => 'Tin nhắn',
	);

	public function __construct()
	{
		$checkNonce = array(
			'status' => 0,
			'message' => 'INVALID ACCESS'
		);

		if ( empty( $_REQUEST['bmitoken'] ) || ! wp_verify_nonce($_REQUEST['bmitoken']) ) {
			die( json_encode($checkNonce));
		}

	}

	public function contact(){
		$data = $_POST;
		$error = '';
		foreach ($data AS $key1 => $value):
			if (!in_array($key1, $this->fillable)){
				$error .= $key1 . ", ";
			}
		endforeach;
		if ($error){
			print_r(json_encode(array(
				'status' => '0',
				'message' => $error
			)));
			exit();
		}

		global $wpdb;

		$result = $wpdb->insert($wpdb->prefix.'bmi_contacts', $data);

		if (!$result){
			print_r(json_encode(array(
				'status' => '0',
				'message' => 'Lỗi, vui lòng thử lại'
			)));
			exit();
		}

		print_r(json_encode(array('status' => 1)));
		die();
	}



}