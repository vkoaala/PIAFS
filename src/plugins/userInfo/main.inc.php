<?php

/* Version 1.0
Plugin name: Skeleton
Author: Thuranel
Description: The Skeleton for a Piwigo plugin, providing 'Hello World'
*/

//Check whether we are indeed included by Piwigo
if(!defined('PHPWG_ROOT_PATH')) die ('Hacking attempt!');

// +-----------------------------------------------------------------------+
// | Define plugin constants                                               |
// +-----------------------------------------------------------------------+
global $prefixeTable;

define('USER_INFO_PATH', PHPWG_PLUGINS_PATH.basename(dirname(__FILE__)).'/');
define('USER_INFO_PUBLIC',  get_absolute_root_url() . make_index_url(array('section' => 'user_info')) . '/');

// +-----------------------------------------------------------------------+
// | Add event handlers                                                    |
// +-----------------------------------------------------------------------+

// file containing the class for menu handlers functions
$menu_file = USER_INFO_PATH . 'include/menu_events.class.php';

// add item to existing menu (EVENT_HANDLER_PRIORITY_NEUTRAL+10 is for compatibility with Advanced Menu Manager plugin)
add_event_handler('blockmanager_apply', array('UserInfoMenu', 'blockmanager_apply1'),
  EVENT_HANDLER_PRIORITY_NEUTRAL+10, $menu_file);

//Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', 'user_info_admin_menu');

//Add an entry to the 'Plugins' ,emu.
function user_info_admin_menu($menu){
  array_push(
      $menu,
      array(
          'NAME' => 'user_info',
          'URL' => get_admin_plugin_menu_link(dirname(__FILE__)).'/admin.php'
      )
  );
  return $menu;
}

?>
