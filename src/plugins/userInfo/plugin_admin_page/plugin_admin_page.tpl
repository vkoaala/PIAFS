{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'plugin_admin_page/plugin_admin_style.css'}">
<script type="text/javascript" src="{$USER_INFO_PATH|@cat:'plugin_admin_page/plugin_admin_script.js'}"> </script>
{/html_head}

<!-- Show the title of the plugin -->
<div class="titlePage">
 <h2>{'User info form plugin'|@translate}</h2>
</div>

<!-- Show content in a nice box -->
<fieldset>
 <legend>{'A minimal plugin'|@translate}</legend>

 {'Hello world!'|@translate}
</fieldset>
<form method="POST">
  <button onclick="getUsersInfo()"> {'Fetch user info'|translate} </button>
</form>
