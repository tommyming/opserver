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

$title_text = "皮意志帝國-朝廷大廳";

$u = new User();

$listArray = array();
$listArray = $u->getList();


$head_page = "head.tpl.php";
$header_page = "header.tpl.php";
$top_header_menu_page = "top-header-menu.tpl.php";
$top_top_search_page = "top-search.tpl.php";
$breadcrumbs_page = "breadcrumbs.tpl.php";
$sidebar_page = "sidebar.tpl.php";
$footer_page = "footer.tpl.php";

$container__page = 'userList.tpl.php';

include("tpl/a_main_page.tpl.php");
?>