<?php
/* Smarty version 3.1.29, created on 2017-02-21 12:15:45
  from "/var/www/html/src/themes/default/template/mail/text/plain/footer.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac75c13bef99_96095887',
  'file_dependency' => 
  array (
    '379339dfc02006dd7c125a440e0080c0cd7d4de4' => 
    array (
      0 => '/var/www/html/src/themes/default/template/mail/text/plain/footer.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac75c13bef99_96095887 ($_smarty_tpl) {
?>



----
<?php echo l10n('Sent by');?>
 "<?php echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
" <?php echo $_smarty_tpl->tpl_vars['GALLERY_URL']->value;?>

<?php echo l10n('Powered by');?>
 "Piwigo<?php if (!empty($_smarty_tpl->tpl_vars['VERSION']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['VERSION']->value;
}?>" <?php echo $_smarty_tpl->tpl_vars['PHPWG_URL']->value;?>

<?php echo l10n('Contact');?>
: <?php echo $_smarty_tpl->tpl_vars['CONTACT_MAIL']->value;
}
}
