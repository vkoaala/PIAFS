<?php
/* Smarty version 3.1.29, created on 2017-02-10 09:05:33
  from "/var/www/html/PIAFS/src/plugins/charlies/charlie_acrobat.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589dc8ad3e1953_15518855',
  'file_dependency' => 
  array (
    '6a063f63830a654c7f40469ec5a597a486d7188b' => 
    array (
      0 => '/var/www/html/PIAFS/src/plugins/charlies/charlie_acrobat.tpl',
      1 => 1486048228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589dc8ad3e1953_15518855 ($_smarty_tpl) {
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
