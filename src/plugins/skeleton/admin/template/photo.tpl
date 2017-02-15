{combine_css path=$SKELETON_PATH|@cat:"admin/template/style.css"}

<h2>{$TITLE} &#8250; {'Edit file'|translate} {$TABSHEET_TITLE}</h2>


<form action="{$F_ACTION}" method="post" id="catModify">
  <fieldset>
    <legend>{'File editor'|translate}</legend>

    <p>
    <textarea name="description" id="description" class="description" style="overflow-y: hidden; height: 78px;"></textarea>
    </p>

    <p>
      <input class="submit" type="submit" value="{'Save'|translate}" name="save_skeleton">
      <input type="reset" />

    </p>
  </fieldset>
</form>
