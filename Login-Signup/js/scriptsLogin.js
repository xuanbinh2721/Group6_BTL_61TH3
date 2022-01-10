$(document).ready(function(){
    $("#user").change(function(){
        let namePattern = /[a-zA-Z_0-9]$/;
        let emailPattern = /[a-zA-Z_0-9](@gmail.com)$/;
        if(namePattern.test($(this).val())== false && emailPattern.test($(this).val())==false){
            $("#userNotification").text("Tài khoản không hợp lệ").css("color","red");
            $("#pwd").prop( "disabled", true );
            $("#btnLogIn").prop( "disabled", true );
            $(this).focus();
        }
        else if(namePattern.test($(this).val())== false && emailPattern.test($(this).val())==true){
            $("#userNotification").text("Email hợp lệ").css("color","green");
            $("#pwd").prop( "disabled", false );
            $("#btnLogIn").prop( "disabled", false);
        }
        else if(namePattern.test($(this).val())== true && emailPattern.test($(this).val())==false){
            $("#userNotification").text("Username hợp lệ").css("color","green");
            $("#pwd").prop( "disabled", false );
            $("#btnLogIn").prop( "disabled", false);
        }
        else{
            $("#userNotification").text("Tài khoản hợp lệ").css("color","green");
            $("#pwd").prop( "disabled", false );
            $("#btnLogIn").prop( "disabled", false);
        }
    })
})