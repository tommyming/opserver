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

//ini_set('display_errors', 'on');


//連接設定
include_once('../common.php');
include_once('rear_eng_common.php');

echo "<pre>";print_r($_SESSION);echo "</pre>";
echo "<pre>";print_r($_POST);echo "</pre>";

if(isset($_POST)){
	$f = $_POST;
}


$u = new User();





?>