function sendUserInfo(){

  var formElements = {};

  $(".formElement").map(function (){
    formElements[$(this).attr("id")] = $(this).val();
  });

  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/user_info_page/user_info_modify.php',
    datatype: "json",
    data: {
      form_elements : formElements
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
    }
  });
}
