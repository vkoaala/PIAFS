<?php
/* Smarty version 3.1.29, created on 2017-02-21 12:15:49
  from "/var/www/html/src/themes/default/local_head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ac75c513e5c8_68559998',
  'file_dependency' => 
  array (
    '7d95a96844095a627cd4958c2e567597710d1e92' => 
    array (
      0 => '/var/www/html/src/themes/default/local_head.tpl',
      1 => 1486762421,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ac75c513e5c8_68559998 ($_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['load_css']->value) {?> 
	<!--[if lt IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie5-ie6.css">
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/fix-ie7.css">
	<![endif]-->
	<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/print.css",'order'=>-10),$_smarty_tpl);?>

<?php }
}
}
