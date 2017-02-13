{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'template/user_info_style.css'}">
{/html_head}
{* {combine_script require="jquery" path=$USER_INFO_PATH|cat:"template/user_info_script.js"} *}

<h1>{'Test'|translate}</h1>
<div id="userInfoForm">
  <form>
    <label> {'First Name'|translate}: </label>
    <br>
    <input type="text" />
    <br>
    <br>
    <label> {'Last Name'|translate}: </label>
    <br>
    <input type="text" />
    <br>
    <br>
    <button> {'Save'|translate} </button>
  </form>
</div>
