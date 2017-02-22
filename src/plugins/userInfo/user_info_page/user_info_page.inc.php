<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

include_once("user_info_db.php");
include_once(USER_INFO_PATH."/plugin_admin_page/form_element/form_element_db.php");

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins, $prefixeTable;

//Get info to send to the form
/*$userInfo = new user_info_db();

$result = $userInfo->getUserInfo($user['id']);

if(!empty($result)){
  $template->assign(array(
  'USER_FNAME' => array_values($result)[1],
  'USER_LNAME' => array_values($result)[2]
  ));
}*/

//Get form elements to generate
$form_element_db = new form_element_db();
$form_elements = $form_element_db->getAllFormElements();

$template->assign(array(
  // this is useful when having big blocks of text which must be translated
  // prefer separated HTML files over big lang.php files
  'INTRO_CONTENT' => load_language('intro.html', USER_INFO_PATH, array('return'=>true)),
  'USER_INFO_PATH' => USER_INFO_PATH,
  'USER_INFO_ABS_PATH' => realpath(USER_INFO_PATH).'/',
  'FORM_ELEMENTS' => $form_elements
  ));

$template->set_filename('user_info_page', realpath(USER_INFO_PATH . 'user_info_page/user_info_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'user_info_page');
