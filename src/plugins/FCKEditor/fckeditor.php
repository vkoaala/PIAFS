<?php

add_event_handler('get_admin_plugin_menu_links', 'load_fckeditor_script');
  
function load_fckeditor_script($plugin_menu_links)
{
  global $page, $template, $conf;

  if (!isset($page['page'])) return $plugin_menu_links;

  if (!isset($conf['fckeditor_toolbar_always_full']))
  {
    $conf['fckeditor_toolbar_always_full'] = false;
  }

  $toolbar = 'Full';
  $width = '750px';
  $height = '200px';
  $areas = array();

  // Category edit
  if ($page['page'] == 'album')
  {
    $areas[] = 'comment';
    $areas[] = 'mail_content';
    $toolbar = $conf['fckeditor_toolbar_always_full'] ? 'Full' : 'Basic';
    $template->set_prefilter('album_properties', 'add_remove_button');
  }
  // Picture modify
  elseif ($page['page'] == 'photo')
  {
    $areas[] = 'description';
    $toolbar = $conf['fckeditor_toolbar_always_full'] ? 'Full' : 'Basic';
    $template->set_prefilter('picture_modify', 'add_remove_button');
  }

  // Plugin EditTxt
  elseif ($page['page'] == 'plugin')
  {
   $areas[] = 'editText';
   $toolbar = $conf['fckeditor_toolbar_always_full'] ? 'Full' : 'Basic';
   $template->set_prefilter('skeleton_content', 'add_remove_button');
  }

  // Notification by mail
  elseif ($page['page'] == 'notification_by_mail')
  {
    $areas[] = 'send_customize_mail_content';
    $toolbar = $conf['fckeditor_toolbar_always_full'] ? 'Full' : 'Basic';
    $template->set_prefilter('notification_by_mail', 'add_remove_button');
  }
  // Page banner
  elseif ($page['page'] == 'configuration')
  {
    $areas[] = 'page_banner';
    $width = '70%';
    $toolbar = $conf['fckeditor_toolbar_always_full'] ? 'Full' : 'Basic';
    $template->set_prefilter('config', 'add_remove_button_banner');
  }
  elseif ($page['page'] == 'plugin')
  {
    $section = $_GET['section'];
    // Additional pages
    if ($section == 'AdditionalPages/admin/add_page.php'
      or (preg_match('#AdditionalPages/(?:admin/|)admin.php#', $section) and (@in_array($_GET['tab'], array('add_page', 'edit_page'))))
    )
    {
      $areas[] = 'ap_content';
      $width = '100%';
      $height = '400px';
      $template->set_prefilter('plugin_admin_content', 'add_remove_button');
    }
    // PWG Stuffs
    elseif (($section == 'PWG_Stuffs/admin/add_module.php' and @$_GET['type'] == 'Personal')
      or (preg_match('#PWG_Stuffs/(?:admin/|)admin.php#', $section) and @in_array($_GET['tab'], array('edit_module', 'add_module')))
    )
    {
      $areas[] = 'personal_content';
      $width = '99%';
      $height = '400px';
      $template->set_prefilter('module_options', 'add_remove_button_stuffs');
    }
    // Personal About
    elseif ($section == 'PersoAbout/admin/admin.php')
    {
      $areas[] = 'perso_about';
      $width = '100%';
      $height = '300px';
      $template->set_prefilter('plugin_admin_content', 'add_remove_button');
    }
  }

  if (!empty($areas))
  {
    set_fckeditor_instance($areas, $toolbar, $width, $height);
  }
  return $plugin_menu_links;
}

function add_remove_button($content, &$smarty)
{
  $pattern = '#(<textarea.*?name="(.*?)".*?</textarea>)#ims';
  $replacement = '$1</td></tr><tr><td></td><td><a href="#" onClick="toogleEditor(\'$2\'); return false;" style="border-bottom: none; float: right;">FCK Editor On/Off</a>';
  return preg_replace($pattern, $replacement, $content);
}

function add_remove_button_stuffs($content, &$smarty)
{
  $pattern = '#<textarea.*?</textarea>#ims';
  $replacement = '<textarea name="personal_content" id="personal_content" rows="10" cols="50" style="width:100%; height: 300px;">{$PERSONAL_CONTENT}</textarea>
<br><a href="#" onClick="toogleEditor(\'personal_content\'); return false;" style="border-bottom: none; float: right;">FCK Editor On/Off</a>';
  return preg_replace($pattern, $replacement, $content);
}

function add_remove_button_banner($content, &$smarty)
{
  $pattern = '#(<textarea.*?name="(.*?)".*?</textarea>)#ims';
  $replacement = '$1<a href="#" onClick="toogleEditor(\'$2\'); return false;" style="border-bottom: none; float: right; margin-right: 5%;">FCK Editor On/Off</a>';
  return preg_replace($pattern, $replacement, $content);
}

?>
