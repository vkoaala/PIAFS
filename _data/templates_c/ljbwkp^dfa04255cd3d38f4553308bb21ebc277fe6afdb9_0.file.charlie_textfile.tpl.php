<?php
/* Smarty version 3.1.29, created on 2017-02-13 13:18:44
  from "/var/www/html/plugins/charlies/charlie_textfile.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1f8848a8b81_11243881',
  'file_dependency' => 
  array (
    'dfa04255cd3d38f4553308bb21ebc277fe6afdb9' => 
    array (
      0 => '/var/www/html/plugins/charlies/charlie_textfile.tpl',
      1 => 1487009909,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1f8848a8b81_11243881 ($_smarty_tpl) {
?>
<!-- /charlie_textfile.tpl -->
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
" type="text/plain" toolbar="false" scrollbar="true" pagemode="none" transparent="true" width="98%" height=750px >
<NOEMBED> Your browser does not support embedded txt files. </NOEMBED>
</embed></object>
</div>
<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_head', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

<link rel="stylesheet" type="text/css" href="<?php echo ($_smarty_tpl->tpl_vars['CHARLIES_PATH']->value).('textfile.css');?>
">
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_head'][0][0]->block_html_head(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }
}
