<?php
/* Smarty version 3.1.29, created on 2017-02-08 14:39:20
  from "/var/www/html/Piwigo/plugins/charlies/charlie_acrobat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589b73e8e1c818_26131636',
  'file_dependency' => 
  array (
    '36ea92ca627d8fb387a4d3a171d15bce71b56f82' => 
    array (
      0 => '/var/www/html/Piwigo/plugins/charlies/charlie_acrobat.tpl',
      1 => 1486048228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589b73e8e1c818_26131636 ($_smarty_tpl) {
?>
<!-- /charlie_acrobat.tpl -->
<br />
<div style="height: 750px; width:98%; padding-top: 5px auto 5px auto; margin-top: 10px;">
 <object CLASSID="clsid:CA8A9780-280D-11CF-A24D-444553540000" width=98% height=450>
<param name="SRC" value="<?php echo $_smarty_tpl->tpl_vars['SRC_IMG']->value;?>
">
<param name="toolbar" value="false">
<param name="scrollbar" value="true">
<param name="pagemode" value="none">
<param name="transparent" value="true">
<embed src="<?php echo $_smarty_tpl->tpl_vars['SRC_IMG']->value;?>
" type="application/pdf" toolbar="false" scrollbar="true" pagemode="none" transparent="true" width="98%" height=750px
href="<?php echo $_smarty_tpl->tpl_vars['SRC_IMG']->value;?>
" >
<NOEMBED> Your browser does not support embedded PDF files. </NOEMBED>
</embed></object>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<link rel="stylesheet" type="text/css" href="<?php echo ($_smarty_tpl->tpl_vars['CHARLIES_PATH']->value).('charlies.css');?>
"> 
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
}
}
