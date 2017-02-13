<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:17:32
  from "/var/www/html/admin/themes/default/template/include/datepicker.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dc1c1cdc95_29407943',
  'file_dependency' => 
  array (
    '8988c5dcd8122c1177ccca68071aaf1393240bde' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/include/datepicker.inc.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dc1c1cdc95_29407943 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->tpl_vars['load_mode'] = new Smarty_Variable('footer', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'load_mode', 0);
}
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ui.timepicker-addon','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker,jquery.ui.slider','path'=>"themes/default/js/ui/jquery.ui.timepicker-addon.js"),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['require'] = new Smarty_Variable('jquery.ui.timepicker-addon', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'require', 0);
$_smarty_tpl->tpl_vars["datepicker_language"] = new Smarty_Variable("themes/default/js/ui/i18n/jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "datepicker_language", 0);
if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['datepicker_language']->value))) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.datepicker','path'=>$_smarty_tpl->tpl_vars['datepicker_language']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['require'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.datepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'require', 0);
}?>

<?php $_smarty_tpl->tpl_vars["timepicker_language"] = new Smarty_Variable("themes/default/js/ui/i18n/jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']).".js", null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, "timepicker_language", 0);
if (file_exists((constant("PHPWG_ROOT_PATH")).($_smarty_tpl->tpl_vars['datepicker_language']->value))) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code']),'load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery.ui.timepicker-addon','path'=>$_smarty_tpl->tpl_vars['timepicker_language']->value),$_smarty_tpl);?>

<?php $_smarty_tpl->tpl_vars['require'] = new Smarty_Variable(($_smarty_tpl->tpl_vars['require']->value).(",jquery.ui.timepicker-".((string)$_smarty_tpl->tpl_vars['lang_info']->value['jquery_code'])), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'require', 0);
}?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'datepicker','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>$_smarty_tpl->tpl_vars['require']->value,'path'=>'admin/themes/default/js/datepicker.js'),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.theme.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.slider.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.datepicker.css"),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/ui/theme/jquery.ui.timepicker-addon.css"),$_smarty_tpl);
}
}
