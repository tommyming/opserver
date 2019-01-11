<?php 	   
	//網站根目錄
	
	// /home/webv2/v3
	$www_path = str_replace('\\','/',realpath(dirname(__FILE__).'/../'));  
	
	// /home/webv2/v3/html/
	$_rootpath = strtr(dirname(__FILE__) . '/', array('\\'=>'/','\/'=>'/'));
	
	//http://v3.woken.com.tw/
	$_rooturl = strtr('http://' . $_SERVER['HTTP_HOST'] . $_SERVER['SCRIPT_NAME'], array(strtr($_SERVER['SCRIPT_FILENAME'], array($_rootpath=>''))=>''));
	
	
	// $_app_path = $_root_path ."/";
	$_app_path = $www_path ."/";
	$url = "";
	    
	
	   
	define('APP_ROOT_PATH', $_app_path);
	   
	define('HTML_URL', $url);
	define('HTML_ROOT_URL', $url);
	   
	define('HTML_LANG_URL', $url."language/");
	   
	define('HTML_VIDEO_PATH', $url."home/");
	   
	define('WOKEN_ROOT_URL', $_rooturl);
	define('WOKEN_ROOT_PATH', $_rootpath);


	//echo "app_path=".$_app_path."<br>";
	//echo "url=".$url."<br>";
?>