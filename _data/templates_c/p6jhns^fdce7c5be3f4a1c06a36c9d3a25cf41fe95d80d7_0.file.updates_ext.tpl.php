<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:09:29
  from "/var/www/html/admin/themes/default/template/updates_ext.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1da392c89e9_61123814',
  'file_dependency' => 
  array (
    'fdce7c5be3f4a1c06a36c9d3a25cf41fe95d80d7' => 
    array (
      0 => '/var/www/html/admin/themes/default/template/updates_ext.tpl',
      1 => 1486478392,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1da392c89e9_61123814 ($_smarty_tpl) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.ajaxmanager','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.ajaxmanager.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>'jquery.jgrowl','load'=>'footer','require'=>'jquery','path'=>'themes/default/js/plugins/jquery.jgrowl_minimized.js'),$_smarty_tpl);?>

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/default/js/plugins/jquery.jgrowl.css"),$_smarty_tpl);?>


<?php $_smarty_tpl->smarty->_cache['tag_stack'][] = array('footer_script', array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl')); $_block_repeat=true; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl'), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>

var pwg_token = '<?php echo $_smarty_tpl->tpl_vars['PWG_TOKEN']->value;?>
';
var extType = '<?php echo $_smarty_tpl->tpl_vars['EXT_TYPE']->value;?>
';
var confirmMsg  = '<?php echo strtr(l10n('Are you sure?'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var errorHead   = '<?php echo strtr(l10n('ERROR'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var successHead = '<?php echo strtr(l10n('Update Complete'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var errorMsg    = '<?php echo strtr(l10n('an error happened'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';
var restoreMsg  = '<?php echo strtr(l10n('Reset ignored updates'), array("\\" => "\\\\", "'" => "\\'", "\"" => "\\\"", "\r" => "\\r", "\n" => "\\n", "</" => "<\/" ));?>
';


var todo = 0;
var queuedManager = $.manageAjax.create('queued', { 
	queue: true,  
	maxRequests: 1,
  beforeSend: function() { autoupdate_bar_toggle(1); },
  complete: function() { autoupdate_bar_toggle(-1); }
});

function updateAll() {
  if (confirm(confirmMsg)) {
    jQuery('.updateExtension').each( function() {
      if (jQuery(this).parents('div').css('display') == 'block')
        jQuery(this).click();
    });
  }
};

function ignoreAll() {
  jQuery('.ignoreExtension').each( function() {
    if (jQuery(this).parents('div').css('display') == 'block')
      jQuery(this).click();
  });
};

function resetIgnored() {
  jQuery.ajax({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.ignoreUpdate', reset: true, type: extType, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery(".pluginBox, fieldset").show();
        jQuery("#update_all").show();
        jQuery("#ignore_all").show();
        jQuery("#up_to_date").hide();
        jQuery("#reset_ignore").hide();
        jQuery("#ignored").hide();
        checkFieldsets();
      }
    }
  });
};

function checkFieldsets() {
  var types = new Array('plugins', 'themes', 'languages');
  var total = 0;
  var ignored = 0;
  for (i=0;i<3;i++) {
    nbExtensions = 0;
    jQuery("div[id^='"+types[i]+"_']").each(function(index) {
      if (jQuery(this).css('display') == 'block')
        nbExtensions++;
      else
        ignored++;
    });
    total = total + nbExtensions;
    if (nbExtensions == 0)
      jQuery("#"+types[i]).hide();
  }

  if (total == 0) {
    jQuery("#update_all").hide();
    jQuery("#ignore_all").hide();
    jQuery("#up_to_date").show();
  }
  if (ignored > 0) {
    jQuery("#reset_ignore").val(restoreMsg + ' (' + ignored + ')');
  }
};

function updateExtension(type, id, revision) {
  queuedManager.add({
    type: 'GET',
    dataType: 'json',
    url: 'ws.php',
    data: { method: 'pwg.extensions.update', type: type, id: id, revision: revision, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery.jGrowl( data['result'], { theme: 'success', header: successHead, life: 4000, sticky: false });
        jQuery("#"+type+"_"+id).remove();
        checkFieldsets();
      } else {
        jQuery.jGrowl( data['result'], { theme: 'error', header: errorHead, sticky: true });
      }
    },
    error: function(data) {
      jQuery.jGrowl( errorMsg, { theme: 'error', header: errorHead, sticky: true });
    }
  });
};

function ignoreExtension(type, id) {
  queuedManager.add({
    type: 'GET',
    url: 'ws.php',
    dataType: 'json',
    data: { method: 'pwg.extensions.ignoreUpdate', type: type, id: id, pwg_token: pwg_token, format: 'json' },
    success: function(data) {
      if (data['stat'] == 'ok') {
        jQuery("#"+type+"_"+id).hide();
        jQuery("#reset_ignore").show();
        checkFieldsets();
      }
    }
  });
};

function autoupdate_bar_toggle(i) {
  todo = todo + i;
  if ((i == 1 && todo == 1) || (i == -1 && todo == 0))
    jQuery('.autoupdate_bar').toggle();
}

jQuery(document).ready(function() {
	jQuery("td[id^='desc_'], p[id^='revdesc_']").click(function() {
		id = this.id.split('_');
		jQuery("#revdesc_"+id[1]).toggle('blind');
    jQuery(".button_"+id[1]).toggle();
		return false;
	});
});

checkFieldsets();

<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo $_smarty_tpl->smarty->registered_plugins['block']['footer_script'][0][0]->block_footer_script(array('require'=>'jquery.ui.effect-blind,jquery.ajaxmanager,jquery.jgrowl'), $_block_content, $_smarty_tpl, $_block_repeat); } array_pop($_smarty_tpl->smarty->_cache['tag_stack']);?>


<div class="titrePage">
  <h2><?php echo l10n('Updates');?>
</h2>
</div>

<div class="autoupdate_bar">
<input type="submit" id="update_all" value="<?php echo l10n('Update All');?>
" onClick="updateAll(); return false;">
<input type="submit" id="ignore_all" value="<?php echo l10n('Ignore All');?>
" onClick="ignoreAll(); return false;">
<input type="submit" id="reset_ignore" value="<?php echo l10n('Reset ignored updates');?>
" onClick="resetIgnored(); return false;" <?php if (!$_smarty_tpl->tpl_vars['SHOW_RESET']->value) {?>style="display:none;"<?php }?>>
</div>
<div class="autoupdate_bar" style="display:none;">
<?php echo l10n('Please wait...');?>
<br><img src="admin/themes/default/images/ajax-loader-bar.gif">
</div>

<p id="up_to_date" style="display:none; text-align:left; margin-left:20px;"><?php echo l10n(sprintf('All %s are up to date.',$_smarty_tpl->tpl_vars['EXT_TYPE']->value));?>
</p>

<?php if (!empty($_smarty_tpl->tpl_vars['update_plugins']->value)) {?>
<div>
<fieldset id="plugins">
<legend><?php echo l10n('Plugins');?>
</legend>
<?php
$_from = $_smarty_tpl->tpl_vars['update_plugins']->value;
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
<div class="pluginBox" id="plugins_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['plugin']->value['IGNORED']) {?>style="display:none;"<?php }?>>
  <table>
    <tr>
      <td class="pluginBoxNameCell">
        <?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_NAME'];?>

      </td>
      <td>
        <a href="#" onClick="updateExtension('plugins', '<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_ID'];?>
', <?php echo $_smarty_tpl->tpl_vars['plugin']->value['REVISION_ID'];?>
);" class="updateExtension"><?php echo l10n('Install');?>
</a>
        | <a href="<?php echo $_smarty_tpl->tpl_vars['plugin']->value['URL_DOWNLOAD'];?>
"><?php echo l10n('Download');?>
</a>
        | <a href="#" onClick="ignoreExtension('plugins', '<?php echo $_smarty_tpl->tpl_vars['plugin']->value['EXT_ID'];?>
'); return false;" class="ignoreExtension"><?php echo l10n('Ignore this update');?>
</a>
      </td>
    </tr>
    <tr>
      <td>
        <?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['plugin']->value['CURRENT_VERSION'];?>

      </td>
      <td class="pluginDesc" id="desc_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
">
        <em><?php echo l10n('Downloads');?>
: <?php echo $_smarty_tpl->tpl_vars['plugin']->value['DOWNLOADS'];?>
</em>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/plus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/minus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" style="display:none;">
        <?php echo l10n('New Version');?>
 : <?php echo $_smarty_tpl->tpl_vars['plugin']->value['NEW_VERSION'];?>

        | <?php echo l10n('By %s',$_smarty_tpl->tpl_vars['plugin']->value['AUTHOR']);?>

      </td>
    </tr>
    <tr>
      <td></td>
      <td class="pluginDesc">
        <p id="revdesc_<?php echo $_smarty_tpl->tpl_vars['plugin']->value['ID'];?>
" style="display:none;"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['plugin']->value['REV_DESC']));?>
</p>
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
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['update_themes']->value)) {?>
<div>
<fieldset id="themes">
<legend><?php echo l10n('Themes');?>
</legend>
<?php
$_from = $_smarty_tpl->tpl_vars['update_themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_themes_loop_1_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_themes_loop_1_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
?>
<div class="pluginBox" id="themes_<?php echo $_smarty_tpl->tpl_vars['theme']->value['EXT_ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['theme']->value['IGNORED']) {?>style="display:none;"<?php }?>>
  <table>
    <tr>
      <td class="pluginBoxNameCell">
        <?php echo $_smarty_tpl->tpl_vars['theme']->value['EXT_NAME'];?>

      </td>
      <td>
        <a href="#" onClick="updateExtension('themes', '<?php echo $_smarty_tpl->tpl_vars['theme']->value['EXT_ID'];?>
', <?php echo $_smarty_tpl->tpl_vars['theme']->value['REVISION_ID'];?>
);" class="updateExtension"><?php echo l10n('Install');?>
</a>
        | <a href="<?php echo $_smarty_tpl->tpl_vars['theme']->value['URL_DOWNLOAD'];?>
"><?php echo l10n('Download');?>
</a>
        | <a href="#" onClick="ignoreExtension('themes', '<?php echo $_smarty_tpl->tpl_vars['theme']->value['EXT_ID'];?>
'); return false;" class="ignoreExtension"><?php echo l10n('Ignore this update');?>
</a>
      </td>
    </tr>
    <tr>
      <td>
        <?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['theme']->value['CURRENT_VERSION'];?>

      </td>
      <td class="pluginDesc" id="desc_<?php echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
">
        <em><?php echo l10n('Downloads');?>
: <?php echo $_smarty_tpl->tpl_vars['theme']->value['DOWNLOADS'];?>
</em>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/plus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/minus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" style="display:none;">
        <?php echo l10n('New Version');?>
 : <?php echo $_smarty_tpl->tpl_vars['theme']->value['NEW_VERSION'];?>

        | <?php echo l10n('By %s',$_smarty_tpl->tpl_vars['theme']->value['AUTHOR']);?>

      </td>
    </tr>
    <tr>
      <td></td>
      <td class="pluginDesc">
        <p id="revdesc_<?php echo $_smarty_tpl->tpl_vars['theme']->value['ID'];?>
" style="display:none;"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['theme']->value['REV_DESC']));?>
</p>
      </td>
    </tr>
  </table>
</div>
<?php
$_smarty_tpl->tpl_vars['theme'] = $__foreach_themes_loop_1_saved_local_item;
}
if ($__foreach_themes_loop_1_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_themes_loop_1_saved_item;
}
?>
</fieldset>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['update_languages']->value)) {?>
<div>
<fieldset id="languages">
<legend><?php echo l10n('Languages');?>
</legend>
<?php
$_from = $_smarty_tpl->tpl_vars['update_languages']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_languages_loop_2_saved_item = isset($_smarty_tpl->tpl_vars['language']) ? $_smarty_tpl->tpl_vars['language'] : false;
$_smarty_tpl->tpl_vars['language'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['language']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['language']->value) {
$_smarty_tpl->tpl_vars['language']->_loop = true;
$__foreach_languages_loop_2_saved_local_item = $_smarty_tpl->tpl_vars['language'];
?>
<div class="pluginBox" id="languages_<?php echo $_smarty_tpl->tpl_vars['language']->value['EXT_ID'];?>
" <?php if ($_smarty_tpl->tpl_vars['language']->value['IGNORED']) {?>style="display:none;"<?php }?>>
  <table>
    <tr>
      <td class="pluginBoxNameCell">
        <?php echo $_smarty_tpl->tpl_vars['language']->value['EXT_NAME'];?>

      </td>
      <td>
        <a href="#" onClick="updateExtension('languages', '<?php echo $_smarty_tpl->tpl_vars['language']->value['EXT_ID'];?>
', <?php echo $_smarty_tpl->tpl_vars['language']->value['REVISION_ID'];?>
);" class="updateExtension"><?php echo l10n('Install');?>
</a>
        | <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['URL_DOWNLOAD'];?>
"><?php echo l10n('Download');?>
</a>
        | <a href="#" onClick="ignoreExtension('languages', '<?php echo $_smarty_tpl->tpl_vars['language']->value['EXT_ID'];?>
'); return false;" class="ignoreExtension"><?php echo l10n('Ignore this update');?>
</a>
      </td>
    </tr>
    <tr>
      <td>
        <?php echo l10n('Version');?>
 <?php echo $_smarty_tpl->tpl_vars['language']->value['CURRENT_VERSION'];?>

      </td>
      <td class="pluginDesc" id="desc_<?php echo $_smarty_tpl->tpl_vars['language']->value['ID'];?>
">
        <em><?php echo l10n('Downloads');?>
: <?php echo $_smarty_tpl->tpl_vars['language']->value['DOWNLOADS'];?>
</em>
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/plus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['language']->value['ID'];?>
">
        <img src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['admin_icon_dir'];?>
/minus.gif" alt="" class="button_<?php echo $_smarty_tpl->tpl_vars['language']->value['ID'];?>
" style="display:none;">
        <?php echo l10n('New Version');?>
 : <?php echo $_smarty_tpl->tpl_vars['language']->value['NEW_VERSION'];?>

        | <?php echo l10n('By %s',$_smarty_tpl->tpl_vars['language']->value['AUTHOR']);?>

      </td>
    </tr>
    <tr>
      <td></td>
      <td class="pluginDesc">
        <p id="revdesc_<?php echo $_smarty_tpl->tpl_vars['language']->value['ID'];?>
" style="display:none;"><?php echo nl2br(htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['REV_DESC']));?>
</p>
      </td>
    </tr>
  </table>
</div>
<?php
$_smarty_tpl->tpl_vars['language'] = $__foreach_languages_loop_2_saved_local_item;
}
if ($__foreach_languages_loop_2_saved_item) {
$_smarty_tpl->tpl_vars['language'] = $__foreach_languages_loop_2_saved_item;
}
?>
</fieldset>
</div>
<?php }
}
}
