<?php
defined('SKELETON_PATH') or die('Hacking attempt!');

/**
 * add a tab on photo properties page
 */
function skeleton_tabsheet_before_select($sheets, $id)
{
  if ($id == 'photo')
  {
    $sheets['skeleton'] = array(
      'caption' => l10n('Edit text'),
      'url' => SKELETON_ADMIN.'-photo&amp;image_id='.$_GET['image_id'],
      );
  }

  return $sheets;
}
