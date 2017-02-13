<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:18:11
  from "/var/www/html/themes/default/template/picture_content.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1dc43d3ec79_41948607',
  'file_dependency' => 
  array (
    '9ba832c5928ae8879f53b40cb40b8661c9fdd936' => 
    array (
      0 => '/var/www/html/themes/default/template/picture_content.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1dc43d3ec79_41948607 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/include/smarty/libs/plugins/modifier.replace.php';
if (!$_smarty_tpl->tpl_vars['current']->value['selected_derivative']->is_cached()) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png"<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php }?>

<img <?php if ($_smarty_tpl->tpl_vars['current']->value['selected_derivative']->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
" <?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_size_htm();
} else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif" data-src="<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;?>
" id="theMainImage" usemap="#map<?php echo $_smarty_tpl->tpl_vars['current']->value['selected_derivative']->get_type();?>
" title="<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {
echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
} else {
echo $_smarty_tpl->tpl_vars['current']->value['TITLE_ESC'];?>
 - <?php echo $_smarty_tpl->tpl_vars['ALT_IMG']->value;
}?>">

<?php
$_from = $_smarty_tpl->tpl_vars['current']->value['unique_derivatives'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_derivative_0_saved_item = isset($_smarty_tpl->tpl_vars['derivative']) ? $_smarty_tpl->tpl_vars['derivative'] : false;
$__foreach_derivative_0_saved_key = isset($_smarty_tpl->tpl_vars['derivative_type']) ? $_smarty_tpl->tpl_vars['derivative_type'] : false;
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['derivative_type'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['derivative']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['derivative_type']->value => $_smarty_tpl->tpl_vars['derivative']->value) {
$_smarty_tpl->tpl_vars['derivative']->_loop = true;
$__foreach_derivative_0_saved_local_item = $_smarty_tpl->tpl_vars['derivative'];
?><map name="map<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_type();?>
"><?php $_smarty_tpl->tpl_vars['size'] = new Smarty_Variable($_smarty_tpl->tpl_vars['derivative']->value->get_size(), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'size', 0);
if (isset($_smarty_tpl->tpl_vars['previous']->value)) {?><area shape=rect coords="0,0,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/4));?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" title="<?php echo l10n('Previous');?>
 : <?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['previous']->value['TITLE_ESC'];?>
"><?php }?><area shape=rect coords="<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/4));?>
,0,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/1.34));?>
,<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[1]/4));?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" title="<?php echo l10n('Thumbnails');?>
" alt="<?php echo l10n('Thumbnails');?>
"><?php if (isset($_smarty_tpl->tpl_vars['next']->value)) {?><area shape=rect coords="<?php echo intval(($_smarty_tpl->tpl_vars['size']->value[0]/1.33));?>
,0,<?php echo $_smarty_tpl->tpl_vars['size']->value[0];?>
,<?php echo $_smarty_tpl->tpl_vars['size']->value[1];?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" title="<?php echo l10n('Next');?>
 : <?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['next']->value['TITLE_ESC'];?>
"><?php }?></map><?php
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_0_saved_local_item;
}
if ($__foreach_derivative_0_saved_item) {
$_smarty_tpl->tpl_vars['derivative'] = $__foreach_derivative_0_saved_item;
}
if ($__foreach_derivative_0_saved_key) {
$_smarty_tpl->tpl_vars['derivative_type'] = $__foreach_derivative_0_saved_key;
}
}
}
