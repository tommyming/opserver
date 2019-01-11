<?php 
//連接設定
include_once('../../common.php');

if(isset($_POST['user_lv']) && isset($_POST['lv'])){
	
	$u = new User();
	
	$user_lv_array = array();
	
	$user_lv_array = explode('_', $_POST['user_lv']);
	
	//echo "<pre>";print_r($user_lv2_array);echo "</pre>";
	
	if($user_lv_array[0] != ''){
		$data =array();
		foreach ($user_lv_array as $key => $value) {
			$user_lv = $u->getUser_lv($_POST['lv'],$value);
			$data[$key]['name'] = $user_lv['name'];
			array_push($data[$key], $u->getUser_lvListForOn($_POST['lv']+1,$value));
		}
		
		//echo "<pre>";print_r($data);echo "</pre>";
		
		echo json_encode($data);
		
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	//
}else{
	//echo json_encode($date);
}




?>
