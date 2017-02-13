<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:16:46
  from "/var/www/html/plugins/skeleton/template/my_button.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dbeee2b136_97186123',
  'file_dependency' => 
  array (
    'b9827e8c61e0ee2efe517fc2091318a3274a477f' => 
    array (
      0 => '/var/www/html/plugins/skeleton/template/my_button.tpl',
      1 => 1486753396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dbeee2b136_97186123 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>"skeleton",'path'=>($_smarty_tpl->tpl_vars['SKELETON_PATH']->value).("template/style.css")),$_smarty_tpl);?>
<a href="javascript:alert('Hello world!');" title="<?php echo l10n('This is not the %s you are looking for',(l10n('button')));?>
" class="pwg-state-default pwg-button" rel="nofollow"> <span class="pwg-icon skeleton-button"> </span> <span class="pwg-button-text"><?php echo l10n('Skeleton');?>
</span> </a><?php }
}
