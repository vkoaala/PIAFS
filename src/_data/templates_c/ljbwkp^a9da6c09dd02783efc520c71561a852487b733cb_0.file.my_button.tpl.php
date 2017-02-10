<?php
/* Smarty version 3.1.29, created on 2017-02-09 10:32:02
  from "/var/www/html/PIAFS/src/plugins/skeleton/template/my_button.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c8b726df566_89229055',
  'file_dependency' => 
  array (
    'a9da6c09dd02783efc520c71561a852487b733cb' => 
    array (
      0 => '/var/www/html/PIAFS/src/plugins/skeleton/template/my_button.tpl',
      1 => 1486048228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589c8b726df566_89229055 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>"skeleton",'path'=>($_smarty_tpl->tpl_vars['SKELETON_PATH']->value).("template/style.css")),$_smarty_tpl);?>
<a href="javascript:alert('Hello world!');" title="<?php echo l10n('This is not the %s you are looking for',(l10n('button')));?>
" class="pwg-state-default pwg-button" rel="nofollow"> <span class="pwg-icon skeleton-button"> </span> <span class="pwg-button-text"><?php echo l10n('Skeleton');?>
</span> </a><?php }
}
