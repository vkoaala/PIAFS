<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:16:46
  from "/var/www/html/themes/default/local_head.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dbeee1a830_43532584',
  'file_dependency' => 
  array (
    '9fb4bcae3a295f4286223dad3cae157207a4a88f' => 
    array (
      0 => '/var/www/html/themes/default/local_head.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dbeee1a830_43532584 ($_smarty_tpl) {
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
