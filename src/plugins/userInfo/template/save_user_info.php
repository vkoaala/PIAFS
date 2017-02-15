<?php

global $user;

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once("user_info_db.php");
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');

$userInfo = new user_info_db();

//create an array with all POST values
$items = [];
foreach($_POST as $key => $value){
  $items[] = $value;
}

//check if all POST values are valid
if($userInfo->AreValid($items)){

  //insert if everything is valid
  if(!($userInfo->userInfoExists($user['id']))){
    $userInfo->insertInto($user['id'], $_POST["fname"], $_POST["lname"]);
  }
  else{
    $userInfo->modifyInfo($user['id'], $_POST["fname"], $_POST["lname"]);
  }
  
}

?>
