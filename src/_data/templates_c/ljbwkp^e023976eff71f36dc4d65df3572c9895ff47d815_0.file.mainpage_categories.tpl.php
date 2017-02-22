<?php
/* Smarty version 3.1.29, created on 2017-02-20 12:06:42
  from "/var/www/html/PIAFS/src/themes/default/template/mainpage_categories.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58ab22225faff4_83783174',
  'file_dependency' => 
  array (
    'e023976eff71f36dc4d65df3572c9895ff47d815' => 
    array (
      0 => '/var/www/html/PIAFS/src/themes/default/template/mainpage_categories.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58ab22225faff4_83783174 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/PIAFS/src/include/smarty/libs/plugins/modifier.replace.php';
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
.thumbnailCategory .illustration{width: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+5;?>
px;}.content .thumbnailCategory .description{height: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+5;?>
px;}<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
;
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>

<div class="loader"><img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['img_dir'];?>
/ajax_loader.gif"></div>
<ul class="thumbnailCategories">
<?php
$_from = $_smarty_tpl->tpl_vars['category_thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_cat_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] : false;
$__foreach_cat_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['cat']) ? $_smarty_tpl->tpl_vars['cat'] : false;
$_smarty_tpl->tpl_vars['cat'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['cat']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']++;
$__foreach_cat_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['cat'];
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['cat']->value['representative']['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);
if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);?>

<?php }?>
  <li class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop']->value['index'] : null))) {?>odd<?php } else { ?>even<?php }?>">
		<div class="thumbnailCategory">
			<div class="illustration">
			<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
">
				<img <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['cat']->value['TN_ALT'];?>
" title="<?php echo strip_tags(smarty_modifier_replace($_smarty_tpl->tpl_vars['cat']->value['NAME'],'"',' '));?>
 - <?php echo l10n('display this album');?>
">
			</a>
			</div>
			<div class="description">
				<h3>
					<a href="<?php echo $_smarty_tpl->tpl_vars['cat']->value['URL'];?>
"><?php echo $_smarty_tpl->tpl_vars['cat']->value['NAME'];?>
</a>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['icon_ts'])) {?>
					<img title="<?php echo $_smarty_tpl->tpl_vars['cat']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent<?php if ($_smarty_tpl->tpl_vars['cat']->value['icon_ts']['IS_CHILD_DATE']) {?>_by_child<?php }?>.png" alt="(!)">
<?php }?>
				</h3>
		<div class="text">
<?php if (isset($_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'])) {?>
				<p class="dates"><?php echo $_smarty_tpl->tpl_vars['cat']->value['INFO_DATES'];?>
</p>
<?php }?>
				<p class="Nb_images"><?php echo $_smarty_tpl->tpl_vars['cat']->value['CAPTION_NB_IMAGES'];?>
</p>
<?php if (!empty($_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'])) {?>
				<p><?php echo $_smarty_tpl->tpl_vars['cat']->value['DESCRIPTION'];?>
</p>
<?php }?>
		</div>
			</div>
		</div>
	</li>
<?php
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_loop_0_saved_local_item;
}
if ($__foreach_cat_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_cat_loop'] = $__foreach_cat_loop_0_saved;
}
if ($__foreach_cat_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['cat'] = $__foreach_cat_loop_0_saved_item;
}
?>
</ul>
<?php }
}
