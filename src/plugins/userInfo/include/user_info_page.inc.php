<?php
defined('USER_INFO_PATH') or die('Hacking attempt!');

global $page, $template, $conf, $user, $tokens, $pwg_loaded_plugins;


$template->assign(array(
  // this is useful when having big blocks of text which must be translated
  // prefer separated HTML files over big lang.php files
  'INTRO_CONTENT' => load_language('intro.html', USER_INFO_PATH, array('return'=>true)),
  'USER_INFO_PATH' => USER_INFO_PATH,
  'USER_INFO_ABS_PATH' => realpath(USER_INFO_PATH).'/',
  ));

$template->set_filename('user_info_page', realpath(USER_INFO_PATH . 'template/user_info_page.tpl'));
$template->assign_var_from_handle('CONTENT', 'user_info_page');
