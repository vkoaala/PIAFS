function sendUserInfo(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/user_info_page/user_info_modify.php',
    datatype: "json",
    data: {
      fname: $('#fname').val(),
      lname: $('#lname').val()
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function (response) {
      console.log(response);
    }
  });
}
