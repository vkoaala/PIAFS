<?php

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

/*$tables = getTablesInfo();

function getTablesInfo(){

  $query = '
    SELECT `COLUMN_NAME` 
    FROM `INFORMATION_SCHEMA`.`COLUMNS` 
    WHERE `TABLE_SCHEMA`= "piwigo" 
      AND `TABLE_NAME`= "piwigo_users_info"
    ';
  $query = '
    SHOW columns
    FROM piwigo_users_info
    ';
  //$query= 'DESCRIBE piwigo_users_info';
  return pwg_query($query);
}echo $item;echo $item;

foreach($tables as $item){
  foreach($item as $test){
    echo $test;
    echo " ";
  }
}*/

//Fetch the template.
global $template;

#$smarty->assign('Name', 'Fred');
$template -> set_filenames(
  array(
    'plugin_admin_content' => dirname(__FILE__).'/plugin_admin_page.tpl'
  )
);

// template vars
$template->assign(array(
  'USER_INFO_PATH'=> USER_INFO_PATH, // used for images, scripts, ... access
  'USER_INFO_ABS_PATH'=> realpath(USER_INFO_PATH), // used for template inclusion (Smarty needs a real path)
  'USER_INFO_ADMIN' => USER_INFO_PATH,
));

//Assign the template contents to ADMIN_CONTENT
$template->assign_var_from_handle('ADMIN_CONTENT', 'plugin_admin_content');

?>
