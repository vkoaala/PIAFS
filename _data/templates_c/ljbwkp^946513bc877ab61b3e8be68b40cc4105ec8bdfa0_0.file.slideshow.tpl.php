<?php
/* Smarty version 3.1.29, created on 2017-02-13 13:18:51
  from "/var/www/html/themes/default/template/slideshow.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1f88b2e0557_01911836',
  'file_dependency' => 
  array (
    '946513bc877ab61b3e8be68b40cc4105ec8bdfa0' => 
    array (
      0 => '/var/www/html/themes/default/template/slideshow.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1f88b2e0557_01911836 ($_smarty_tpl) {
?>
<div id="slideshow">
	<div id="imageHeaderBar">
	  <div class="browsePath">
<?php if (isset($_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value)) {?>
		[ <a href="<?php echo $_smarty_tpl->tpl_vars['U_SLIDESHOW_STOP']->value;?>
"><?php echo l10n('stop the slideshow');?>
</a> ]
<?php }?>
			<h2 class="showtitle"><?php echo $_smarty_tpl->tpl_vars['current']->value['TITLE'];?>
</h2>
	  </div>
	</div>

	<div id="imageToolBar">
	  <div class="imageNumber"><?php echo $_smarty_tpl->tpl_vars['PHOTO']->value;?>
</div>
<?php $_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('picture_nav_buttons.tpl','picture_nav_buttons'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

	</div>

	<div id="content">
	<div id="theImage">
	  <?php echo $_smarty_tpl->tpl_vars['ELEMENT_CONTENT']->value;?>

<?php if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {?>
	  <p class="showlegend"><?php echo $_smarty_tpl->tpl_vars['COMMENT_IMG']->value;?>
</p>
<?php }?>
	</div>
	</div>
</div>
<?php }
}
