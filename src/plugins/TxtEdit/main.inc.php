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

// Hook on to an event to show the administration page.
add_event_handler('get_admin_plugin_menu_links', 'txtedit_admin_menu');

// Add an entry to the 'Plugins' menu.
function txtedit_admin_menu($menu) {
 array_push(
   $menu,
   array(
     'NAME'  => 'TxtEdit',
     'URL'   => get_admin_plugin_menu_link(dirname(__FILE__)).'/admin.php'
   )
 );
 return $menu;
}
?>
