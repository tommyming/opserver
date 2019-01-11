<?php 
//連接設定
include_once('../../common.php');
include_once('../rear_eng_common.php');

if(isset($_POST['acconut'])){
	$u = new User();
	
	if($u->CheckAccount($_POST['acconut'])){
		$data= 'off';
	}else{
		$data= 'ok';
	}
}else{
	$data= 'error';
}

echo json_encode($data);
?>