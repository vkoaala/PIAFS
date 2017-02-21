<?php

define('PHPWG_ROOT_PATH','../../../');
define('IN_ADMIN', true);

include_once("plugin_admin_form_element_db.php");
include_once(PHPWG_ROOT_PATH.'include/common.inc.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions.php');
include_once(PHPWG_ROOT_PATH.'admin/include/functions_upload.inc.php');

$form_element_db = new form_element_db();

$form_element_db->modifyFormElement($_POST["form_element_previous_name"], $_POST["form_element_name"], $_POST["form_element_type"]);

?>