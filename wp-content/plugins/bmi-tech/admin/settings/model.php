<?php

class BMIModelSettings {


    public function getItems(){
        global $wpdb;
        $result = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}bmi_configuration");
        $data = array();
        foreach ($result AS $value){
        	if($value->params) $value->params = json_decode($value->params);
        	$data[$value->name] = $value;
        }
        return (object) $data;
    }

    public function save($data){

    }


}

?>