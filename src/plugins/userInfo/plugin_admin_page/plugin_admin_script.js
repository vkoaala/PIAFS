function addFormElement(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/plugin_admin_form_element.php',
    datatype: "json",
    data: {
      form_element_name: $('#form_element_name').val(),
      form_element_type: $('#form_element_type').val()
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
    }
  });
}

function deleteFormElement(){
  console.log("Send");
}

function modifyFormElement(){
  console.log("Nudes");
}
