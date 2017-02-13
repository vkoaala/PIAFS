<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:09:36
  from "/var/www/html/admin/themes/default/template/rating.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1da40d572d4_62014135',
  'file_dependency' => 
  array (
    'fd29e417a5665e3bc7e5d051c17db925e4e2fb7c' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/rating.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1da40d572d4_62014135 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/include/smarty/libs/plugins/function.html_options.php';
?>
<h2><?php echo $_smarty_tpl->tpl_vars['NB_ELEMENTS']->value;?>
 <?php echo l10n('Photos');?>
</h2>

<form action="<?php echo $_smarty_tpl->tpl_vars['F_ACTION']->value;?>
" method="GET" class="filter">
  <fieldset>
    <legend><?php echo l10n('Filter');?>
</legend>

    <label>
      <?php echo l10n('Sort by');?>

      <select name="order_by">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['order_by_options']->value,'selected'=>$_smarty_tpl->tpl_vars['order_by_options_selected']->value),$_smarty_tpl);?>

      </select>
    </label>

    <label>
      <?php echo l10n('Users');?>

      <select name="users">
        <?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['user_options']->value,'selected'=>$_smarty_tpl->tpl_vars['user_options_selected']->value),$_smarty_tpl);?>

      </select>
    </label>

    <label>
      <?php echo l10n('Number of items');?>

      <input type="text" name="display" size="2" value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY']->value;?>
">
    </label>

    <div style="clear:both"></div>

    <p style="margin:10px 0 0 0">
      <button name="submit" type="submit" class="buttonLike">
        <i class="icon-filter"></i> <?php echo l10n('Submit');?>

      </button>
    </p>
    <input type="hidden" name="page" value="rating">
  </fieldset>
</form>

<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>

<table width="99%">
<tr class="throw">
  <td><?php echo l10n('File');?>
</td>
  <td><?php echo l10n('Number of rates');?>
</td>
	<td><?php echo l10n('Rating score');?>
</td>
  <td><?php echo l10n('Average rate');?>
</td>
  <td><?php echo l10n('Sum of rates');?>
</td>
  <td><?php echo l10n('Rate');?>
/<?php echo l10n('Username');?>
/<?php echo l10n('Rate date');?>
</td>
  <td></td>
</tr>
<?php
$_from = $_smarty_tpl->tpl_vars['images']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_image_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image'] : false;
$__foreach_image_0_saved_item = isset($_smarty_tpl->tpl_vars['image']) ? $_smarty_tpl->tpl_vars['image'] : false;
$_smarty_tpl->tpl_vars['image'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_image'] = new Smarty_Variable(array('index' => -1));
$_smarty_tpl->tpl_vars['image']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
$_smarty_tpl->tpl_vars['image']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['index']++;
$__foreach_image_0_saved_local_item = $_smarty_tpl->tpl_vars['image'];
?>
<tr valign="top" class="<?php if ((1 & (isset($_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_image']->value['index'] : null))) {?>row1<?php } else { ?>row2<?php }?>">
	<td><a href="<?php echo $_smarty_tpl->tpl_vars['image']->value['U_URL'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['U_THUMB'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['image']->value['FILE'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['image']->value['FILE'];?>
"></a></td>
	<td><strong><?php echo $_smarty_tpl->tpl_vars['image']->value['NB_RATES'];?>
/<?php echo $_smarty_tpl->tpl_vars['image']->value['NB_RATES_TOTAL'];?>
</strong></td>
	<td><strong><?php echo $_smarty_tpl->tpl_vars['image']->value['SCORE_RATE'];?>
</strong></td>
	<td><strong><?php echo $_smarty_tpl->tpl_vars['image']->value['AVG_RATE'];?>
</strong></td>
	<td style="border-right:1px solid" ><strong><?php echo $_smarty_tpl->tpl_vars['image']->value['SUM_RATE'];?>
</strong></td>
	<td>
		<table style="width:100%">
<?php
$_from = $_smarty_tpl->tpl_vars['image']->value['rates'];
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_rate_1_saved_item = isset($_smarty_tpl->tpl_vars['rate']) ? $_smarty_tpl->tpl_vars['rate'] : false;
$_smarty_tpl->tpl_vars['rate'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['rate']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['rate']->value) {
$_smarty_tpl->tpl_vars['rate']->_loop = true;
$__foreach_rate_1_saved_local_item = $_smarty_tpl->tpl_vars['rate'];
?>
<tr>
	<td><?php echo $_smarty_tpl->tpl_vars['rate']->value['rate'];?>
</td>
	<td><b><?php echo $_smarty_tpl->tpl_vars['rate']->value['USER'];?>
</b></td>
	<td><?php echo $_smarty_tpl->tpl_vars['rate']->value['date'];?>
</td>
	<td><a onclick="return del(this,<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
,<?php echo $_smarty_tpl->tpl_vars['rate']->value['user_id'];
ob_start();
echo $_smarty_tpl->tpl_vars['rate']->value['anonymous_id'];
$_tmp1=ob_get_clean();
if (!empty($_tmp1)) {?>,'<?php echo $_smarty_tpl->tpl_vars['rate']->value['anonymous_id'];?>
'<?php }?>)" class="icon-trash"> </a></td>
</tr>
<?php
$_smarty_tpl->tpl_vars['rate'] = $__foreach_rate_1_saved_local_item;
}
if ($__foreach_rate_1_saved_item) {
$_smarty_tpl->tpl_vars['rate'] = $__foreach_rate_1_saved_item;
}
?>
		</table>
	</td>
</tr>
<?php
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_local_item;
}
if ($__foreach_image_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_image'] = $__foreach_image_0_saved;
}
if ($__foreach_image_0_saved_item) {
$_smarty_tpl->tpl_vars['image'] = $__foreach_image_0_saved_item;
}
?>
</table>
<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'core.scripts','load'=>'async','path'=>'themes/default/js/scripts.js'),$_smarty_tpl);?>

<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array()); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

function del(node,id,uid,aid){
	var tr = jQuery(node).parents("tr").first().fadeTo(1000, 0.4),
		data = {
			image_id: id,
			user_id: uid
		};
	if (aid)
		data.anonymous_id = aid;

	(new PwgWS('<?php echo strtr($_smarty_tpl->tpl_vars['ROOT_URL']->value, array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
')).callService(
		'pwg.rates.delete', data,
		{
			method: 'POST',
			onFailure: function(num, text) { tr.stop(); tr.fadeTo(0,1); alert(num + " " + text); },
			onSuccess: function(result){
				if (result)
					tr.remove();
				else 
					alert(result); 
			}
		}
	);
	return false;
}
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array(), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<?php if (!empty($_smarty_tpl->tpl_vars['navbar']->value)) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['get_extent'][0][0]->get_extent('navigation_bar.tpl','navbar'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
