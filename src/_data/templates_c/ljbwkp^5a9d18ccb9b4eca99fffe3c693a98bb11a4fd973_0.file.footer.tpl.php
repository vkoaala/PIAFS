<?php
/* Smarty version 3.1.29, created on 2017-02-15 12:55:01
  from "/var/www/html/PIAFS/src/themes/default/template/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a495f5009105_89378671',
  'file_dependency' => 
  array (
    '5a9d18ccb9b4eca99fffe3c693a98bb11a4fd973' => 
    array (
      0 => '/var/www/html/PIAFS/src/themes/default/template/footer.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a495f5009105_89378671 ($_smarty_tpl) {
?>
<div id="copyright">
<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['TIME'])) {?>
    <?php echo l10n('Page generated in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['TIME'];?>
 (<?php echo $_smarty_tpl->tpl_vars['debug']->value['NB_QUERIES'];?>
 <?php echo l10n('SQL queries in');?>
 <?php echo $_smarty_tpl->tpl_vars['debug']->value['SQL_TIME'];?>
) -
<?php }?>


  <?php echo l10n('Powered by');?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>
" class="Piwigo">Piwigo</a>
  <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['CONTACT_MAIL']->value)) {?>
  - <a href="mailto:<?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;?>
?subject=<?php echo rawurlencode(l10n('A comment on your site'));?>
"><?php echo l10n('Contact webmaster');?>
</a>
<?php }
if (isset($_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value)) {?>
  - <?php echo l10n('View in');?>
 : <a href="<?php echo $_smarty_tpl->tpl_vars['TOGGLE_MOBILE_THEME_URL']->value;?>
"><?php echo l10n('Mobile');?>
</a> | <b><?php echo l10n('Desktop');?>
</b>
<?php }
if (isset($_smarty_tpl->tpl_vars['footer_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['footer_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_0_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_0_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
    <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_local_item;
}
if ($__foreach_elt_0_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_0_saved_item;
}
}?>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'])) {?>
<div id="debug">
  <?php echo $_smarty_tpl->tpl_vars['debug']->value['QUERIES_LIST'];?>

</div>
<?php }?>
</div>

<!-- BEGIN get_combined -->
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'footer'),$_smarty_tpl);?>

<!-- END get_combined -->

</body>
</html><?php }
}
