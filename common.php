<?php 
/** 
 * Project:     opc
 * 
 * @link 
 * @copyright 2018 Leo Zeng <ZENG, ZHI-DA>
 * @author Leo Zeng <ZENG, ZHI-DA>
 * @package db
 * @version 1.0.0 2018-07-23
*/
session_start();
 
if (isset($_SESSION['user_id'])) {
 	$user_id = $_SESSION['user_id'];
}


$from_ip = getenv ("REMOTE_ADDR");
$_SESSION['ip'] = $from_ip;

if (isset($_SESSION['sid'])) {
	if ($_SESSION['sid'] == "") $_SESSION['sid'] = getenv("REMOTE_ADDR").":".getenv("REMOTE_PORT");
} else {
	$_SESSION['sid'] = getenv("REMOTE_ADDR").":".getenv("REMOTE_PORT");
}
 
//include_once("config.php");
//include_once( APP_ROOT_PATH.'_config/db_con.php');   // db connection
//include_once( APP_ROOT_PATH.'_model/loadclass.php');  // load class


?>