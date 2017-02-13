<?php
/* Smarty version 3.1.29, created on 2017-02-13 13:17:39
  from "/var/www/html/themes/default/template/navigation_bar.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1f843be1931_73502206',
  'file_dependency' => 
  array (
    '04628c17588479a149f5b37d653a75c7f064b677' => 
    array (
      0 => '/var/www/html/themes/default/template/navigation_bar.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1f843be1931_73502206 ($_smarty_tpl) {
?>
<div class="navigationBar">
<?php if (isset($_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'])) {?>
  <span class="navFirstLast"><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_FIRST'];?>
" rel="first"><?php echo l10n('First');?>
</a> |</span>
  <span class="navPrevNext"><a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_PREV'];?>
" rel="prev"><?php echo l10n('Previous');?>
</a> |</span>
<?php } else { ?>
  <span class="navFirstLast"><?php echo l10n('First');?>
 |</span>
  <span class="navPrevNext"><?php echo l10n('Previous');?>
 |</span>
<?php }?>
  <?php $_smarty_tpl->tpl_vars['prev_page'] = new Smarty_Variable(0, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'prev_page', 0);
$_from = $_smarty_tpl->tpl_vars['navbar']->value['pages'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_url_0_saved_item = isset($_smarty_tpl->tpl_vars['url']) ? $_smarty_tpl->tpl_vars['url'] : false;
$__foreach_url_0_saved_key = isset($_smarty_tpl->tpl_vars['page']) ? $_smarty_tpl->tpl_vars['page'] : false;
$_smarty_tpl->tpl_vars['url'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['page'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['url']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value => $_smarty_tpl->tpl_vars['url']->value) {
$_smarty_tpl->tpl_vars['url']->_loop = true;
$__foreach_url_0_saved_local_item = $_smarty_tpl->tpl_vars['url'];
?>
    <?php if ($_smarty_tpl->tpl_vars['page']->value > $_smarty_tpl->tpl_vars['prev_page']->value+1) {?>...<?php }
if ($_smarty_tpl->tpl_vars['page']->value == $_smarty_tpl->tpl_vars['navbar']->value['CURRENT_PAGE']) {?>
    <span class="pageNumberSelected"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</span>
<?php } else { ?>
    <a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</a>
<?php }?>
    <?php $_smarty_tpl->tpl_vars['prev_page'] = new Smarty_Variable($_smarty_tpl->tpl_vars['page']->value, null);
$_smarty_tpl->ext->_updateScope->updateScope($_smarty_tpl, 'prev_page', 0);
$_smarty_tpl->tpl_vars['url'] = $__foreach_url_0_saved_local_item;
}
if ($__foreach_url_0_saved_item) {
$_smarty_tpl->tpl_vars['url'] = $__foreach_url_0_saved_item;
}
if ($__foreach_url_0_saved_key) {
$_smarty_tpl->tpl_vars['page'] = $__foreach_url_0_saved_key;
}
if (isset($_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'])) {?>
  <span class="navPrevNext">| <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_NEXT'];?>
" rel="next"><?php echo l10n('Next');?>
</a></span>
  <span class="navFirstLast">| <a href="<?php echo $_smarty_tpl->tpl_vars['navbar']->value['URL_LAST'];?>
" rel="last"><?php echo l10n('Last');?>
</a></span>
<?php } else { ?>
  <span class="navPrevNext">| <?php echo l10n('Next');?>
</span>
  <span class="navFirstLast">| <?php echo l10n('Last');?>
</span>
<?php }?>
</div>
<?php }
}
