<?php

class BMIHelper {

    public static function generateOrderNumber($max = 10){

        $order = '';
        $chars = "0123456789";
        srand((double)microtime()*1000000);
        $i = 0;
        while ($i < $max) {
            $num = rand() % 10;
            $tmp = substr($chars, $num, 1);
            $order = $order . $tmp;
            $i++;
        }
        return $order;
    }

    public static function createNonce(){
    	$nonce = wp_create_nonce('bmi_nonce');
    	echo '<input type="hidden" name="bmi_nonce" value="'.$nonce.'" />';
    	return;
    }

    public static function checkNonce($nonce){
    	return wp_verify_nonce($nonce, 'bmi_nonce');
    }
}