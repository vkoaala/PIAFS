<?php
/* Smarty version 3.1.29, created on 2017-02-13 11:03:19
  from "/var/www/html/PIAFS/src/themes/default/template/header.tpl" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_58a1d8c7729f49_08926995',
  'file_dependency' => 
  array (
    'c5fad94b994412a5efea3f384b0159a28b710cef' => 
    array (
      0 => '/var/www/html/PIAFS/src/themes/default/template/header.tpl',
      1 => 1486493138,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58a1d8c7729f49_08926995 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/var/www/html/PIAFS/src/include/smarty/libs/plugins/modifier.replace.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['code'];?>
" dir="<?php echo $_smarty_tpl->tpl_vars['lang_info']->value['direction'];?>
">
<head>
<meta charset="<?php echo $_smarty_tpl->tpl_vars['CONTENT_ENCODING']->value;?>
">
<meta name="generator" content="Piwigo (aka PWG), see piwigo.org">

<?php if (isset($_smarty_tpl->tpl_vars['meta_ref']->value)) {?> 
<?php if (isset($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value)) {?>
<meta name="author" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['INFO_AUTHOR']->value),'"',' ');?>
">
<?php }
if (isset($_smarty_tpl->tpl_vars['related_tags']->value)) {?>
<meta name="keywords" content="<?php
$_from = $_smarty_tpl->tpl_vars['related_tags']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_tag_loop_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] : false;
$__foreach_tag_loop_0_saved_item = isset($_smarty_tpl->tpl_vars['tag']) ? $_smarty_tpl->tpl_vars['tag'] : false;
$_smarty_tpl->tpl_vars['tag'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] = new Smarty_Variable(array());
$__foreach_tag_loop_0_first = true;
$_smarty_tpl->tpl_vars['tag']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['tag']->value) {
$_smarty_tpl->tpl_vars['tag']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] = $__foreach_tag_loop_0_first;
$__foreach_tag_loop_0_first = false;
$__foreach_tag_loop_0_saved_local_item = $_smarty_tpl->tpl_vars['tag'];
if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop']->value['first'] : null)) {?>, <?php }
echo $_smarty_tpl->tpl_vars['tag']->value['name'];
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_loop_0_saved_local_item;
}
if ($__foreach_tag_loop_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_tag_loop'] = $__foreach_tag_loop_0_saved;
}
if ($__foreach_tag_loop_0_saved_item) {
$_smarty_tpl->tpl_vars['tag'] = $__foreach_tag_loop_0_saved_item;
}
?>">
<?php }
if (isset($_smarty_tpl->tpl_vars['COMMENT_IMG']->value)) {?>
<meta name="description" content="<?php echo smarty_modifier_replace(strip_tags($_smarty_tpl->tpl_vars['COMMENT_IMG']->value),'"',' ');
if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php } else { ?>
<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;
if (isset($_smarty_tpl->tpl_vars['INFO_FILE']->value)) {?> - <?php echo $_smarty_tpl->tpl_vars['INFO_FILE']->value;
}?>">
<?php }
}?>

<title><?php if ($_smarty_tpl->tpl_vars['PAGE_TITLE']->value != l10n('Home') && $_smarty_tpl->tpl_vars['PAGE_TITLE']->value != $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value) {
echo $_smarty_tpl->tpl_vars['PAGE_TITLE']->value;?>
 | <?php }
echo $_smarty_tpl->tpl_vars['GALLERY_TITLE']->value;?>
</title>
<link rel="shortcut icon" type="image/x-icon" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;
echo $_smarty_tpl->tpl_vars['themeconf']->value['icon_dir'];?>
/favicon.ico">

<link rel="start" title="<?php echo l10n('Home');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_HOME']->value;?>
" >
<link rel="search" title="<?php echo l10n('Search');?>
" href="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
search.php" >

<?php if (isset($_smarty_tpl->tpl_vars['first']->value['U_IMG'])) {?><link rel="first" title="<?php echo l10n('First');?>
" href="<?php echo $_smarty_tpl->tpl_vars['first']->value['U_IMG'];?>
" ><?php }
if (isset($_smarty_tpl->tpl_vars['previous']->value['U_IMG'])) {?><link rel="prev" title="<?php echo l10n('Previous');?>
" href="<?php echo $_smarty_tpl->tpl_vars['previous']->value['U_IMG'];?>
" ><?php }
if (isset($_smarty_tpl->tpl_vars['next']->value['U_IMG'])) {?><link rel="next" title="<?php echo l10n('Next');?>
" href="<?php echo $_smarty_tpl->tpl_vars['next']->value['U_IMG'];?>
" ><?php }
if (isset($_smarty_tpl->tpl_vars['last']->value['U_IMG'])) {?><link rel="last" title="<?php echo l10n('Last');?>
" href="<?php echo $_smarty_tpl->tpl_vars['last']->value['U_IMG'];?>
" ><?php }
if (isset($_smarty_tpl->tpl_vars['U_UP']->value)) {?><link rel="up" title="<?php echo l10n('Thumbnails');?>
" href="<?php echo $_smarty_tpl->tpl_vars['U_UP']->value;?>
" ><?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['U_PREFETCH']->value)) {?><link rel="prefetch" href="<?php echo $_smarty_tpl->tpl_vars['U_PREFETCH']->value;?>
"><?php }
if (isset($_smarty_tpl->tpl_vars['U_CANONICAL']->value)) {?><link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['U_CANONICAL']->value;?>
"><?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['page_refresh']->value)) {?><meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['TIME'];?>
;url=<?php echo $_smarty_tpl->tpl_vars['page_refresh']->value['U_REFRESH'];?>
"><?php }?>

<?php
$_from = $_smarty_tpl->tpl_vars['themes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_theme_1_saved_item = isset($_smarty_tpl->tpl_vars['theme']) ? $_smarty_tpl->tpl_vars['theme'] : false;
$_smarty_tpl->tpl_vars['theme'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['theme']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->_loop = true;
$__foreach_theme_1_saved_local_item = $_smarty_tpl->tpl_vars['theme'];
if ($_smarty_tpl->tpl_vars['theme']->value['load_css']) {
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_css'][0][0]->func_combine_css(array('path'=>"themes/".((string)$_smarty_tpl->tpl_vars['theme']->value['id'])."/theme.css",'order'=>-10),$_smarty_tpl);
}
if (!empty($_smarty_tpl->tpl_vars['theme']->value['local_head'])) {
$_smarty_tpl->smarty->ext->_subtemplate->render($_smarty_tpl, $_smarty_tpl->tpl_vars['theme']->value['local_head'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('load_css'=>$_smarty_tpl->tpl_vars['theme']->value['load_css']), 0, true);
}
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_local_item;
}
if ($__foreach_theme_1_saved_item) {
$_smarty_tpl->tpl_vars['theme'] = $__foreach_theme_1_saved_item;
}
echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['combine_script'][0][0]->func_combine_script(array('id'=>"jquery",'load'=>"footer"),$_smarty_tpl);?>


<!-- BEGIN get_combined -->
<!-- COMBINED_CSS -->

<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['get_combined_scripts'][0][0]->func_get_combined_scripts(array('load'=>'header'),$_smarty_tpl);?>

<!-- END get_combined -->

<!--[if lt IE 7]>
<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['ROOT_URL']->value;?>
themes/default/js/pngfix.js"><?php echo '</script'; ?>
>
<![endif]-->

<?php if (!empty($_smarty_tpl->tpl_vars['head_elements']->value)) {
$_from = $_smarty_tpl->tpl_vars['head_elements']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_2_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_2_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>

<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_local_item;
}
if ($__foreach_elt_2_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_2_saved_item;
}
}?>
</head>

<body id="<?php echo $_smarty_tpl->tpl_vars['BODY_ID']->value;?>
">

<div id="the_page">

<?php if (!empty($_smarty_tpl->tpl_vars['header_msgs']->value)) {?>
<div class="header_msgs">
<?php
$_from = $_smarty_tpl->tpl_vars['header_msgs']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_3_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_3_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
<br>
<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_3_saved_local_item;
}
if ($__foreach_elt_3_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_3_saved_item;
}
?>
</div>
<?php }?>

<div id="theHeader"><?php echo $_smarty_tpl->tpl_vars['PAGE_BANNER']->value;?>
</div>

<?php if (!empty($_smarty_tpl->tpl_vars['header_notes']->value)) {?>
<div class="header_notes">
<?php
$_from = $_smarty_tpl->tpl_vars['header_notes']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_elt_4_saved_item = isset($_smarty_tpl->tpl_vars['elt']) ? $_smarty_tpl->tpl_vars['elt'] : false;
$_smarty_tpl->tpl_vars['elt'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['elt']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['elt']->value) {
$_smarty_tpl->tpl_vars['elt']->_loop = true;
$__foreach_elt_4_saved_local_item = $_smarty_tpl->tpl_vars['elt'];
?>
  <p><?php echo $_smarty_tpl->tpl_vars['elt']->value;?>
</p>
<?php
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_4_saved_local_item;
}
if ($__foreach_elt_4_saved_item) {
$_smarty_tpl->tpl_vars['elt'] = $__foreach_elt_4_saved_item;
}
?>
</div>
<?php }
}
}
