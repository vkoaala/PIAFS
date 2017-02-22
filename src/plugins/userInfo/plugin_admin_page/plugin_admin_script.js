function addFormElement(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_add.php',
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

function deleteFormElement(formElementName){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_delete.php',
    datatype: "json",
    data: {
      form_element_name: formElementName
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
      location.reload();
    },
    error: function (response) {
      console.log(response);
    }
  });
}

function modifyFormElement(formElementPreviousName, formElementName, formElementType){
    jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/plugin_admin_page/form_element/form_element_modify.php',
    datatype: "json",
    data: {
      form_element_previous_name: formElementPreviousName,
      form_element_name: formElementName,
      form_element_type: formElementType
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
    }
  });
}

function editFormElement(){
  
}