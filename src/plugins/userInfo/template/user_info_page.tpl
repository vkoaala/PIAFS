{html_head}
<link rel="stylesheet" type="text/css" href="{$USER_INFO_PATH|@cat:'template/user_info_style.css'}">
<script type="text/javascript" src="{$USER_INFO_PATH|@cat:'template/user_info_script.js'}"> </script>
{/html_head}

<h1>{'Test'|translate}</h1>
<div id="userInfoForm">
  <form method="POST">
    <div>
      <label> {'First Name'|translate}: </label>
      <input type="text" name="fname" id="fname"/>
    </div>
    <br>
    <div>
      <label> {'Last Name'|translate}: </label>
      <input type="text" name="lname" id="lname"/>
    </div>
    <br>
    <button onclick="sendUserInfo()"> {'Save'|translate} </button>
  </form>
</div>
