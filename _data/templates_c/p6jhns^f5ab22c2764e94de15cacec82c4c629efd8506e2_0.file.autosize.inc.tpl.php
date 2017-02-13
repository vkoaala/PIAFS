<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:17:32
  from "/var/www/html/admin/themes/default/template/include/autosize.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dc1c1b2a22_33935108',
  'file_dependency' => 
  array (
    'f5ab22c2764e94de15cacec82c4c629efd8506e2' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/include/autosize.inc.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dc1c1b2a22_33935108 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.autogrow','load'=>'async','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.autogrow-textarea.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.autogrow')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.autogrow'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

jQuery(document).ready(function(){
	jQuery('textarea').css('overflow-y', 'hidden');
	// Auto size and auto grow for all text area
	jQuery('textarea').autogrow();
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.autogrow'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
