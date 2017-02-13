<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:06:58
  from "/var/www/html/admin/themes/default/template/include/colorbox.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1d9a23338f2_74159363',
  'file_dependency' => 
  array (
    '7352a06bec922ba433b8302ec05d33d341bab461' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/include/colorbox.inc.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1d9a23338f2_74159363 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->tpl_vars['load_mode'] = new Smarty_Variable('footer', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'load_mode', 0);
}
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.colorbox','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'require'=>'jquery','path'=>'themes/default/js/plugins/jquery.colorbox.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.colorbox','path'=>"themes/default/js/plugins/colorbox/style2/colorbox.css"),$_smarty_tpl);?>

<?php }
}
