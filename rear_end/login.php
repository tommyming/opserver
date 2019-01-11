<?php 
//ini_set('display_errors', 'on');


//連接設定
include_once('../common.php');

if(isset($_POST)){
	
	$u = new User();
	
	if(isset($_POST['account']) && isset($_POST['password']) ) {
		
		$login_account = $_POST['account'] ;
		$login_password = $_POST['password'];
		
		$_SESSION['login_account'] = $login_account;
		$_SESSION['login_password'] = $login_password;
		
		$u->login($login_account, $login_password);
		
		if($u->user_id != ''){
			
			$_SESSION['login_account'] = '';
			$_SESSION['login_password'] = '';
			
			$_SESSION['user_id'] = $u->user_id;
			
			$_SESSION['login_title'] = '長官好，歡迎來到皮意志帝國紫禁城';
			$_SESSION['login_text'] = '目前還在施工中請長官自行隨意看看';
			
			header('Location: index.php');
			exit;
		} else{
			$_SESSION['login_type'] = 'error';
		}
		
		
	}
	
	
	
}


if(!isset($user_id)){
	include("tpl/login.tpl.php");
}else{
	header('Location: index.php');
	exit;
}





?>
