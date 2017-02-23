<?php
/* Smarty version 3.1.29, created on 2017-02-21 12:15:45
  from "/var/www/html/src/themes/default/template/mail/text/plain/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac75c13b75f8_34492115',
  'file_dependency' => 
  array (
    'eacd7a18d4cde768802ab206ee28bac9dbad6b3b' => 
    array (
      0 => '/var/www/html/src/themes/default/template/mail/text/plain/header.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac75c13b75f8_34492115 ($_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['MAIL_TITLE']->value;?>

<?php if (!empty($_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value)) {
echo $_smarty_tpl->tpl_vars['MAIL_SUBTITLE']->value;?>

<?php }?>
----

<?php }
}
