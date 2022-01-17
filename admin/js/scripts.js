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
        message.innerHTML = '';
        btnChange.disabled = false;

    } else {
        message.style.color = 'red';
        message.innerHTML = 'Mật khẩu không trùng khớp';
        btnChange.disabled = true;
    }
} 

$(document).ready(function(){
    $("#name").change(function(){
        let namePattern = /[a-zA-Z_0-9]$/;
        if(namePattern.test($(this).val())==false){
            $("#notify").text("Full name không hợp lệ").css("color","red");
            $("#username").prop("disabled", true );
            $("#pass").prop( "disabled", true );
            $("#btnAdd").prop( "disabled", true );
            $(this).focus();
        }
        else{
            $("#notify").text("");
            $("#username").prop("disabled", false );
            $("#pass").prop("disabled", false );
            $("#btnAdd").prop( "disabled", false);
        }
    })
})

$(document).ready(function(){
    $("#username").change(function(){
        let usernamePattern = /[a-zA-Z_0-9]$/;
        if(usernamePattern.test($(this).val())==false){
            $("#notify").text("Username không hợp lệ").css("color","red");
            $("#name").prop( "disabled", true );
            $("#pass").prop( "disabled", true );
            $("#btnAdd").prop( "disabled", true );
            $(this).focus();
        }
        else{
            $("#notify").text("");
            $("#name").prop( "disabled", false ); 
            $("#pass").prop( "disabled", false );
            $("#btnAdd").prop( "disabled", false);
        }
    })
})



