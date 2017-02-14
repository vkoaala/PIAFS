function sendUserInfo(){
  jQuery.ajax({
    type: "POST",
    url: 'plugins/userInfo/template/save_user_info.php',
    datatype: "json",
    data: {
      fname: $('#fname').val(),
      lname: $('#lname').val()
    },
    complete: function (response) {
      console.log(JSON.stringify(response));
    },
    error: function () {
      console.log("not cool");
    }
  });
}
