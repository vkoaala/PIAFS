<?php
defined('PHPWG_ROOT_PATH') or die('Hacking attempt!');

class UserInfoMenu
{
  /**
  * add link in existing menu
  */
  static function blockmanager_apply1($menu_ref_arr)
  {
    $menu = &$menu_ref_arr[0];

    if (($block = $menu->get_block('mbMenu')) != null)
    {
      if(!is_a_guest()){
        $block->data['user_info'] = array(
          'URL' => USER_INFO_PUBLIC,
          'TITLE' => l10n('User Information'),
          'NAME' => l10n('User Information'),
        );
      }
    }
  }
}
