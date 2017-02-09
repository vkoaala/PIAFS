<?php
/* Smarty version 3.1.29, created on 2017-02-09 09:19:28
  from "/var/www/html/Piwigo/admin/themes/default/template/include/add_album.inc.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589c7a70ce51a6_93119406',
  'file_dependency' => 
  array (
    'bca3fb4af552311e2c652e25aadea0bfefc2bb91' => 
    array (
      0 => '/var/www/html/Piwigo/admin/themes/default/template/include/add_album.inc.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:include/colorbox.inc.tpl' => 1,
  ),
),false)) {
function content_589c7a70ce51a6_93119406 ($_smarty_tpl) {
if (empty($_smarty_tpl->tpl_vars['load_mode']->value)) {
$_smarty_tpl->tpl_vars['load_mode'] = new Smarty_Variable('footer', null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'load_mode', 0);
}
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, "file:include/colorbox.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_mode'=>$_smarty_tpl->tpl_vars['load_mode']->value), 0, false);
?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.selectize','load'=>'footer','path'=>'themes/default/js/plugins/selectize.min.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('id'=>'jquery.selectize','path'=>"themes/default/js/plugins/selectize.".((string)$_smarty_tpl->tpl_vars['themeconf']->value['colorscheme']).".css"),$_smarty_tpl);?>


<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'addAlbum','load'=>$_smarty_tpl->tpl_vars['load_mode']->value,'path'=>'admin/themes/default/js/addAlbum.js'),$_smarty_tpl);?>


<div style="display:none">
  <div id="addAlbumForm">
    <form>
      <?php echo l10n('Parent album');?>
<br>
      <select name="category_parent"></select>
      <br><br>
      
      <?php echo l10n('Album name');?>
<br>
      <input name="category_name" type="text" maxlength="255">
      <span id="categoryNameError" style="color:red;"><?php echo l10n('The name of an album must not be empty');?>
</span>
      <br><br><br>
      
      <input type="submit" value="<?php echo l10n('Create');?>
">
      <span id="albumCreationLoading" style="display:none"><img src="themes/default/images/ajax-loader-small.gif"></span>
    </form>
  </div>
</div>
<?php }
}
