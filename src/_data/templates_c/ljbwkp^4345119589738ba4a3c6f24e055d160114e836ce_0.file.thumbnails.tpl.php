<?php
/* Smarty version 3.1.29, created on 2017-02-10 09:05:31
  from "/var/www/html/PIAFS/src/themes/default/template/thumbnails.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589dc8ab70c533_21226600',
  'file_dependency' => 
  array (
    '4345119589738ba4a3c6f24e055d160114e836ce' => 
    array (
      0 => '/var/www/html/PIAFS/src/themes/default/template/thumbnails.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589dc8ab70c533_21226600 ($_smarty_tpl) {
if (!empty($_smarty_tpl->tpl_vars['thumbnails']->value)) {
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('html_style', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
.thumbnails SPAN,.thumbnails .wrap2 A,.thumbnails LABEL{width: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_width()+2;?>
px;}.thumbnails .wrap2{height: <?php echo $_smarty_tpl->tpl_vars['derivative_params']->value->max_height()+3;?>
px;}<?php if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width() > 600) {?>.thumbLegend {font-size: 130%}<?php } else {
if ($_smarty_tpl->tpl_vars['derivative_params']->value->max_width() > 400) {?>.thumbLegend {font-size: 110%}<?php } else { ?>.thumbLegend {font-size: 90%}<?php }
}
$_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['html_style'][0][0]->block_html_style(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
$_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>
var error_icon = "<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/errors_small.png", max_requests = <?php echo $_smarty_tpl->tpl_vars['maxRequests']->value;?>
;<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);
$_from = $_smarty_tpl->tpl_vars['thumbnails']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_thumbnail_0_saved_item = isset($_smarty_tpl->tpl_vars['thumbnail']) ? $_smarty_tpl->tpl_vars['thumbnail'] : false;
$_smarty_tpl->tpl_vars['thumbnail'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['thumbnail']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['thumbnail']->value) {
$_smarty_tpl->tpl_vars['thumbnail']->_loop = true;
$__foreach_thumbnail_0_saved_local_item = $_smarty_tpl->tpl_vars['thumbnail'];
$_smarty_tpl->tpl_vars['derivative'] = new Smarty_Variable($_smarty_tpl->tpl_vars['pwg']->value->derivative($_smarty_tpl->tpl_vars['derivative_params']->value,$_smarty_tpl->tpl_vars['thumbnail']->value['src_image']), null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'derivative', 0);
if (!$_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js','load'=>'footer'),$_smarty_tpl);
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'thumbnails.loader','path'=>'themes/default/js/thumbnails.loader.js','require'=>'jquery.ajaxmanager','load'=>'footer'),$_smarty_tpl);
}?><li> <span class="wrap1"> <span class="wrap2"> <a href="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['URL'];?>
"> <img class="thumbnail" <?php if ($_smarty_tpl->tpl_vars['derivative']->value->is_cached()) {?>src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php } else { ?>src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/img_small.png" data-src="<?php echo $_smarty_tpl->tpl_vars['derivative']->value->get_url();?>
"<?php }?> alt="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_ALT'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['TN_TITLE'];?>
"> </a> </span><?php if ($_smarty_tpl->tpl_vars['SHOW_THUMBNAIL_CAPTION']->value) {?><span class="thumbLegend"> <span class="thumbName"><?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['NAME'];?>
</span><?php if (!empty($_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts'])) {?><img title="<?php echo $_smarty_tpl->tpl_vars['thumbnail']->value['icon_ts']['TITLE'];?>
" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/recent.png" alt="(!)"><?php }
if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS'])) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']) {?>zero <?php }?>nb-comments"> <br><?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d comment','%d comments',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_COMMENTS']);?>
</span><?php }
if (isset($_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS'])) {?><span class="<?php if (0 == $_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']) {?>zero <?php }?>nb-hits"> <br><?php echo $_smarty_tpl->tpl_vars['pwg']->value->l10n_dec('%d hit','%d hits',$_smarty_tpl->tpl_vars['thumbnail']->value['NB_HITS']);?>
</span><?php }?></span><?php }?></span> </li><?php
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_local_item;
}
if ($__foreach_thumbnail_0_saved_item) {
$_smarty_tpl->tpl_vars['thumbnail'] = $__foreach_thumbnail_0_saved_item;
}
}
}
}
