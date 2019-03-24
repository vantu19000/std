<?php


class BMIFontendHelper{


	public static function formatCurrency($total){
		return number_format($total);
	}

	public static function getRooms($limit = 5){
		global $wpdb;
		$query = new WP_Query( array(
			'post_type' => 'bmi_room',
			'numberposts' => $limit,
		) );
		$posts = $query->posts;
		return $posts;
		echo "<pre>";
		print_r($posts);
		die;
	}

	public static function formatArrayToString($data = array()){
		$string = '';
		for ($i = 0; $i < count($data); $i ++ ){
			if ($i == count($data) - 1){
				$string .= $data[$i];
			}else{
				$string .= $data[$i] . ', ';
			}
		}
		return $string;
	}

	public static function setPostView($postID) {
		$countKey = 'post_views_count';
		$count = get_post_meta($postID, $countKey, true);
		if($count==''){
			$count = 0;
			delete_post_meta($postID, $countKey);
			add_post_meta($postID, $countKey, '1');
		}else{
			$count++;
			update_post_meta($postID, $countKey, $count);
		}
	}

	public static function cutString($string, $length = 60){
		$s = substr($string, 0, $length);
		$result = substr($s, 0, strrpos($s, ' '));
		return $result;
	}

	public static function setCookie(){
		if (get_post_type() == 'bmi_product'){
			$cookie_name = "bmi_recent_product";

			if(!isset($_COOKIE[$cookie_name])) {
				$cookie_value = array();
				$cookie_value[] = get_the_ID();
			}else{
				$recent = $_COOKIE[$cookie_name];
				$recentArr = json_decode($recent, true);

				if (!in_array(get_the_ID(), $recentArr)){
					$recentArr[] = get_the_ID();
				}
				$cookie_value = $recentArr;
			}

			setcookie($cookie_name, json_encode($cookie_value), time() + (86400 * 30), '/');
		}
	}

	public static function getCookie($name){
		if(!isset($_COOKIE[$name])) {
			return false;
		}
		return json_decode($_COOKIE[$name]);
	}


}


?>