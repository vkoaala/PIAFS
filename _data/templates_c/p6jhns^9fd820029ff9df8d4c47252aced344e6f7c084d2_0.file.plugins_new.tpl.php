<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:09:47
  from "/var/www/html/admin/themes/default/template/plugins_new.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1da4b85d5c5_27612070',
  'file_dependency' => 
  array (
    '9fd820029ff9df8d4c47252aced344e6f7c084d2' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/plugins_new.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1da4b85d5c5_27612070 ($_smarty_tpl) {
if (!is_callable('smarty_function_html_options')) require_once '/var/www/html/include/smarty/libs/plugins/function.html_options.php';
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.sort','load'=>'footer','path'=>'themes/default/js/plugins/jquery.sort.js'),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.effect-blind,jquery.sort')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.sort'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var sortOrder = 'date';
var sortPlugins = (function(a, b) {
  if (sortOrder == 'downloads' || sortOrder == 'revision' || sortOrder == 'date')
    return parseInt($(a).find('input[name="'+sortOrder+'"]').val())
      < parseInt($(b).find('input[name="'+sortOrder+'"]').val()) ? 1 : -1;
  else
    return $(a).find('input[name="'+sortOrder+'"]').val().toLowerCase()
      > $(b).find('input[name="'+sortOrder+'"]').val().toLowerCase()  ? 1 : -1;
});

jQuery(document).ready(function(){
	jQuery("td[id^='desc_']").click(function() {
		id = this.id.split('_');
		nb_lines = jQuery("#bigdesc_"+id[1]).html().split('<br>').length;

		jQuery("#smalldesc_"+id[1]).toggle('blind', 1);
		if (jQuery(this).hasClass('bigdesc')) {
			jQuery("#bigdesc_"+id[1]).toggle('blind', 1);
		} else {
			jQuery("#bigdesc_"+id[1]).toggle('blind', 50 + (nb_lines * 30));
		}
		jQuery(this).toggleClass('bigdesc');
		return false;
	});

  jQuery('select[name="selectOrder"]').change(function() {
    sortOrder = this.value;
    $('.pluginBox').sortElements(sortPlugins);
    $.get("admin.php?plugins_new_order="+sortOrder);
  });
  
  jQuery('#filter').keyup(function(){
  var filter = $(this).val();
  if (filter.length>2) {
   $('.pluginBox').hide();
    $('#availablePlugins .pluginBox input[name="name"]').each(function(){
      if ($(this).val().toUpperCase().indexOf(filter.toUpperCase()) != -1) {
       $(this).parents('div').show();
      }
    });
  }
  else {
    $('.pluginBox').show();
  }
 });
 jQuery("#filter").focus();
 jQuery(".titrePage input[name='Clear']").click(function(){
   $("#filter").val('');
   $(".pluginBox").show();
 });
});
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.sort'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
<span class="sort">
<?php echo l10n('Filter');?>
 : <input type="text" id="filter">
<input type="button" name="Clear" Value="<?php echo l10n('Cancel');?>
"> |
<?php echo l10n('Sort order');?>
 : 
<?php echo smarty_function_html_options(array('name'=>"selectOrder",'options'=>$_smarty_tpl->tpl_vars['order_options']->value,'selected'=>$_smarty_tpl->tpl_vars['order_selected']->value),$_smarty_tpl);?>

</span>
  <h2><?php echo l10n('Plugins');?>
</h2>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['plugins']->value)) {?>
<div id="availablePlugins">
<fieldset>
<legend></legend>
<?php
$_from = $_smarty_tpl->tpl_vars['plugins']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_plugins_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['plugin']) ? $_smarty_tpl->tpl_vars['plugin'] : false;
$_smarty_tpl->tpl_vars['plugin'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['plugin']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['plugin']->value) {
$_smarty_tpl->tpl_vars['plugin']->_loop = true;
$__foreach_plugins_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['plugin'];
?>
<div class="pluginBox" id="plugin_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
">
<input type="hidden" name="date" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
">
<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>
">
<input type="hidden" name="revision" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['REVISION_DATE'];?>
">
<input type="hidden" name="downloads" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
">
<input type="hidden" name="author" value="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['AUTHOR'];?>
">
  <table>
    <tr>
      <td class="pluginBoxNameCell"><?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>
</td>
<?php if ($_smarty_tpl->tpl_vars['plugin']->value['BIG_DESC'] != $_smarty_tpl->tpl_vars['plugin']->value['SMALL_DESC']) {?>
      <td id="desc_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" class="pluginDesc">
        <span id="smalldesc_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
">
          <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/plus.gif" alt=""><?php echo $_smarty_tpl->tpl_vars['plugin']->value['SMALL_DESC'];?>
...
        </span>
        <span id="bigdesc_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" style="display:none;">
          <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/minus.gif" alt=""><?php echo nl2br($_smarty_tpl->tpl_vars['plugin']->value['BIG_DESC']);?>
<br>&nbsp;
        </span>
      </td>
<?php } else { ?>
      <td><?php echo nl2br($_smarty_tpl->tpl_vars['plugin']->value['BIG_DESC']);?>
</td>
<?php }?>
    </tr>
    <tr>
      <td>
        <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['URL_INSTALL'];?>
" onclick="return confirm('<?php echo strtr(l10n('Are you sure you want to install this plugin?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
');"><?php echo l10n('Install');?>
</a>
        |  <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['URL_DOWNLOAD'];?>
"><?php echo l10n('Download');?>
</a>
      </td>
      <td>
        <em><?php echo l10n('Downloads');?>
: <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
</em>
        <?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['plugin']->value['VERSION'];?>

        | <?php echo l10n('By %s',$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR']);?>

        | <a class="externalLink" href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_URL'];?>
"><?php echo l10n('Visit plugin site');?>
</a>
      </td>
    </tr>
  </table>
</div>
<?php
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugins_loop_0_saved_local_item;
}
if ($__foreach_plugins_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['plugin'] = $__foreach_plugins_loop_0_saved_item;
}
?>
</fieldset>
</div>
<?php } else { ?>
<p><?php echo l10n('There is no other plugin available.');?>
</p>
<?php }
}
}
