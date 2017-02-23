<?php

/* The file does not exist until some information is entered
below. Once information is entered and saved, the file will be created. */


$conf['upload_form_all_types'] = true;
$conf['sync_chars_regex'] = '/^[a-zA-Z0-9-_. ]+$/';
$conf['file_ext'] = array_merge(
 $conf['picture_ext'],
 array('tiff', 'tif', 'mpg','zip','avi','mp3','ogg','pdf', 'txt', 'docx', 'odt')
 );

 if (preg_match('#^/src/gallery1#', $_SERVER['SCRIPT_NAME']))
 #if (preg_match('/^gallery1.yourdomain.com$/', $_SERVER['SERVER_NAME']))
 {
   $site_dir = 'gallery1';
 }
 elseif (preg_match('#^/src/gallery2#', $_SERVER['SCRIPT_NAME']))
 #elseif (preg_match('/^gallery2.yourdomain.com$/', $_SERVER['SERVER_NAME']))
 {
   $site_dir = 'gallery2';
 }

 if (isset($site_dir))
 {
   define('PWG_LOCAL_DIR', $site_dir.'/local/');
   $conf['upload_dir'] = './'.$site_dir.'/upload';
   $conf['data_location'] = $site_dir.'/_data/';

   # in case there is a specific configuration file for each "site"
   @include(PHPWG_ROOT_PATH.PWG_LOCAL_DIR. 'config/config.inc.php');
 }


?>
