<?php
/* Smarty version 3.1.29, created on 2017-02-08 14:39:17
  from "/var/www/html/Piwigo/themes/default/template/menubar_menu.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589b73e5634a35_69160739',
  'file_dependency' => 
  array (
    '1d7c0d5b366325d4f07aeb94ae0a51d7df8ba6ea' => 
    array (
      0 => '/var/www/html/Piwigo/themes/default/template/menubar_menu.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589b73e5634a35_69160739 ($_smarty_tpl) {
?>
<dt><?php echo l10n('Menu');?>
</dt>
<dd>
<?php if (isset($_smarty_tpl->tpl_vars['block']->value->data['qsearch']) && $_smarty_tpl->tpl_vars['block']->value->data['qsearch'] == true) {?>
	<form action="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
qsearch.php" method="get" id="quicksearch" onsubmit="return this.q.value!='' && this.q.value!=qsearch_prompt;">
		<p style="margin:0;padding:0">
			<input type="text" name="q" id="qsearchInput" onfocus="if (value==qsearch_prompt) value='';" onblur="if (value=='') value=qsearch_prompt;" style="width:90%"<?php if (!empty($_smarty_tpl->tpl_vars['QUERY_SEARCH']->value)) {?> value="<?php echo $_smarty_tpl->tpl_vars['QUERY_SEARCH']->value;?>
"<?php }?>>
		</p>
	</form>
	<?php echo '<script'; ?>
 type="text/javascript">var qsearch_prompt="<?php echo strtr(l10n('Quick search'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
";<?php if (empty($_smarty_tpl->tpl_vars['QUERY_SEARCH']->value)) {?>document.getElementById('qsearchInput').value=qsearch_prompt;<?php }
echo '</script'; ?>
>
<?php }?>
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
if (is_array($_smarty_tpl->tpl_vars['link']->value)) {?><li><a href="<?php echo $_smarty_tpl->tpl_vars['link']->value['URL'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['link']->value['TITLE'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['link']->value['REL'])) {?> <?php echo $_smarty_tpl->tpl_vars['link']->value['REL'];
}?>><?php echo $_smarty_tpl->tpl_vars['link']->value['NAME'];?>
</a><?php if (isset($_smarty_tpl->tpl_vars['link']->value['COUNTER'])) {?> (<?php echo $_smarty_tpl->tpl_vars['link']->value['COUNTER'];?>
)<?php }?></li><?php }
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_local_item;
}
if ($__foreach_link_0_saved_item) {
$_smarty_tpl->tpl_vars['link'] = $__foreach_link_0_saved_item;
}
?></ul>
</dd>
<?php }
}
