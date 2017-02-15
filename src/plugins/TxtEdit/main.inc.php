<?php

/* Version 1.0
Plugin name: TxtEdit
Author: Laurentbp
Description:
*/

// Chech whether we are indeed included by Piwigo.
if (!defined('PHPWG_ROOT_PATH')) die('Hacking attempt!');

// Define the path to our plugin.
define('TXTEDIT_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');

add_event_handler('loc_end_picture', 'txtedit_end_picture');

function txtedit_end_picture()
{
  global $template, $picture;

  $extension = strtolower(get_extension($picture['current']['file']));
  $txt = "jpg";
  if (strcmp($extension, $txt) == 0){
    $template->set_prefilter('picture', 'txtedit_picture_prefilter');

    $template->assign(
      array(
        'IMAGE_ID' => $picture['current']['id'],
        )
      );
  }
  else{
    echo 'fail';
  }
}

function txtedit_picture_prefilter($content, &$smarty)
{
  $search = '{if isset($PLUGIN_PICTURE_ACTIONS)';

  $replace = '
    <a id="cmdEditPhoto" href="" class="pwg-state-default pwg-button" rel="nofollow">
      EDIT
    </a>
'.$search;

  $content = str_replace($search, $replace, $content);

  return $content;
}
?>
