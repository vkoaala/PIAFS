<?php
/* Smarty version 3.1.29, created on 2017-02-10 09:49:52
  from "/var/www/html/PIAFS/src/plugins/skeleton_deprecated/admin.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_589dd310c8a089_87528553',
  'file_dependency' => 
  array (
    'd9397782d7070147665c31a53d35a5a8cb127d1f' => 
    array (
      0 => '/var/www/html/PIAFS/src/plugins/skeleton_deprecated/admin.tpl',
      1 => 1486565152,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_589dd310c8a089_87528553 ($_smarty_tpl) {
?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

  var i = 0;
  function buttonClick() {
      document.getElementById('number').value = ++i;
  }
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2><?php echo l10n('Skeleton plugin');?>
</h2>
</div>

<!-- Show content in a nice box -->
<fieldset>
 <legend><?php echo l10n('A minimal plugin');?>
</legend>

 <?php echo l10n('Hello world!');?>

</fieldset>
<form>
  <input type="text" id="number" value="0"/>
  <input type="button" onclick="buttonClick()" value="Increment Value" />
</form>
<?php }
}
