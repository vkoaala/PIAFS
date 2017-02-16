<?php

define('PHPWG_ROOT_PATH','../../../');

include_once("plugin_admin_users_info_db.php");
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');

$userInfo = new user_info_db();

$queryResult = $userInfo->getUsersInfo();

foreach($queryResult as $query){
    foreach($query as $item){
        echo $item . ' ';
    }
}

?>