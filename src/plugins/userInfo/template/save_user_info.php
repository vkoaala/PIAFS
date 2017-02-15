<?php

global $user;

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once("user_info_db.php");
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');

if(isset($_POST["fname"])){
  if(!empty($_POST["fname"])){
    $fname = $_POST["fname"];
  }
}

if(isset($_POST["lname"])){
  if(!empty($_POST["lname"])){
    $lname = $_POST["lname"];
  }
}

if(isset($fname) && isset($lname)){
  $userInfo = new user_info_db();
  $userInfo->insertInto($user['id'], $fname, $lname);
}
?>
