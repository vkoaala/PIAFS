{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'user_info_page/user_info_style.css'}">
<script type="text/javascript" src="{$USER_INFO_PATH|@cat:'user_info_page/user_info_script.js'}"> </script>
{/html_head}

<h1>{'User information'|translate}</h1>
<div id="userInfoForm">
  <form class="userInfo">
    {foreach from=$FORM_ELEMENTS item=row}
        <div>
          <label> {$row[0]}: </label>
          <input type="{$row[1]}" id="{$row[0]}"/>
        </div>
        <br>
    {/foreach}
    <br>
    <button onclick="sendUserInfo()"> {'Save'|translate} </button>
  </form>
</div>
