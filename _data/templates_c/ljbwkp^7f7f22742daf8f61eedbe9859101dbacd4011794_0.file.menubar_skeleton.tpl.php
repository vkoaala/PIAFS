<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:16:46
  from "/var/www/html/plugins/skeleton/template/menubar_skeleton.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dbeedb3ee7_01836571',
  'file_dependency' => 
  array (
    '7f7f22742daf8f61eedbe9859101dbacd4011794' => 
    array (
      0 => '/var/www/html/plugins/skeleton/template/menubar_skeleton.tpl',
      1 => 1486753396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dbeedb3ee7_01836571 ($_smarty_tpl) {
?>
<dt><?php echo $_smarty_tpl->tpl_vars['block']->value->get_title();?>
</dt>
<dd>
  <?php echo l10n('Menublock added by Skeleton plugin');?>

	<ul><?php
$_from = $_smarty_tpl->tpl_vars['block']->value->data;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_link_0_saved_item = isset($_smarty_tpl->tpl_vars['link']) ? $_smarty_tpl->tpl_vars['link'] : false;
$_smarty_tpl->tpl_vars['link'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['link']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
$_smarty_tpl->tpl_vars['link']->_loop = true;
$__foreach_link_0_saved_local_item = $_smarty_tpl->tpl_vars['link'];
?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a></li><?php
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_local_item;
}
if ($__foreach_link_0_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_item;
}
?></ul>
</dd>
<?php }
}
