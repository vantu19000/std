<?php

class BMIModelEmployee {


    public function getItems(){
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}bmi_configuration WHERE name='employee'");
        $data = array();
        foreach ($result AS $value){
        	if($value->params) $value->params = json_decode($value->params);
        	$data[$value->name] = $value;
        }
//		echo "<pre>";
//		print_r($data);
//		echo "</pre>";
//		die;
        return (object) $data;
    }

    public function save($data){

    }


}

?>