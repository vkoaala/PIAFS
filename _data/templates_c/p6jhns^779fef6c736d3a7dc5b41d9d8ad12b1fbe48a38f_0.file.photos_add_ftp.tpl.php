<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:17:55
  from "/var/www/html/admin/themes/default/template/photos_add_ftp.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dc33305461_82002872',
  'file_dependency' => 
  array (
    '779fef6c736d3a7dc5b41d9d8ad12b1fbe48a38f' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/photos_add_ftp.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dc33305461_82002872 ($_smarty_tpl) {
?>
<div class="titrePage">
  <h2><?php echo l10n('Upload Photos');?>
 <?php echo $_smarty_tpl->tpl_vars['TABSHEET_TITLE']->value;?>
</h2>
</div>

<div id="ftpPage">
<p><a href="<?php echo $_smarty_tpl->tpl_vars['U_CAT_UPDATE']->value;?>
"><?php echo l10n('Administration');?>
 &raquo; <?php echo l10n('Tools');?>
 &raquo; <?php echo l10n('Synchronize');?>
</a></p>

<?php echo $_smarty_tpl->tpl_vars['FTP_HELP_CONTENT']->value;?>

</div><?php }
}
