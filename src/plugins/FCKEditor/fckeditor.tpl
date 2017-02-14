{html_head}
<style type="text/css">
FORM#catModify TABLE TABLE {ldelim} width: 100%; }
#cke_page_banner {ldelim} overflow: auto; }
</style>

<script type="text/javascript" src="plugins/FCKEditor/ckeditor/ckeditor.js"></script>
<script type="text/javascript">
{if $FCK_TOOLBAR == 'Basic'}
CKEDITOR.config.toolbar_Basic =
[
    ['Source','-','Save','NewPage','Preview','-','Templates'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord','-','Print', 'SpellChecker', 'Scayt'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    ['Form', 'Checkbox', 'Radio', 'TextField', 'Textarea', 'Select', 'Button', 'ImageButton', 'HiddenField'],
    '/',
    ['Bold','Italic','Underline','Strike','-','Subscript','Superscript'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote'],
    ['JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
    ['Link','Unlink','Anchor'],
    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak'],
    '/',
    ['Styles','Format','Font','FontSize'],
    ['TextColor','BGColor'],
    ['Maximize', 'ShowBlocks','-','About']
];
{/if}
CKEDITOR.config.width = "{$FCK_WIDTH}";
CKEDITOR.config.height = "{$FCK_HEIGHT}";
CKEDITOR.config.toolbar = "{$FCK_TOOLBAR}";

{if !empty($FCK_areas)}
window.onload = function() {ldelim}
{foreach from=$FCK_areas item=area}
  {if !isset($FCK_config.$area) or $FCK_config.$area}
  CKEDITOR.replace('{$area}');
  {/if}
{/foreach}
}
{/if}

function toogleEditor(name) {ldelim}
  if (typeof( CKEDITOR.instances[name] ) != "undefined") {ldelim}
    CKEDITOR.instances[name].destroy();
    jQuery.post("plugins/FCKEditor/update_config.php", {ldelim}area: name, status: "off"});
  } else {ldelim}
    CKEDITOR.replace(name);
    jQuery.post("plugins/FCKEditor/update_config.php", {ldelim}area: name, status: "on"});
  }
}
</script>
{/html_head}

