function getUsersInfo(){
    jQuery.ajax({
        type: "POST",
        url: 'plugins/userInfo/plugin_admin_page/plugin_admin_users_info.php',
        datatype: "json",
        complete: function (response) {
        console.log(JSON.stringify(response));
        },
        error: function (response) {
        console.log(response);
        }
    });
}