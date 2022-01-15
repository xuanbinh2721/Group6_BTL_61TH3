$(document).ready(function(){
    $("#user").change(function(){
        let namePattern = /[a-zA-Z_0-9]$/;
        if(namePattern.test($(this).val())==false){
            $("#userNotification").text("Tài khoản không hợp lệ").css("color","red");
            $("#pwd").prop( "disabled", true );
            $("#btnLogIn").prop( "disabled", true );
            $(this).focus();
        }
        else{
            $("#userNotification").text("");
            $("#pwd").prop( "disabled", false );
            $("#btnLogIn").prop( "disabled", false);
        }
    })
})
function check_pass() {
    let message = document.getElementById('message');
    let pass = document.getElementById('npwd');
    let cpass = document.getElementById('cnpwd');
    let btnChange = document.getElementById('Change');
    if (pass.value == cpass.value) {
        message.style.color = 'green';
        message.innerHTML = '';
        btnChange.disabled = false;

    } else {
        message.style.color = 'red';
        message.innerHTML = 'Mật khẩu không trùng khớp';
        btnChange.disabled = true;
    }
} 





