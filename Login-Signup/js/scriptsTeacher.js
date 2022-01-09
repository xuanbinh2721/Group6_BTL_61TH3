$(document).ready(function(){
    $("#username").change(function(){
        let userlPattern = /[a-zA-Z_0-9]$/;
        if(userlPattern.test($(this).val()) == false){
            $("#userNotification").text("Username không hợp lệ").css("color","red");
            $("#Signup").prop( "disabled", true );
            $("#email").prop( "disabled", true );
            $("#pwd").prop( "disabled", true );
            $("#cpwd").prop( "disabled", true );
            $(this).focus();

        }
        else{
            $.ajax({
                url: "processCheckUsernameTeacher.php",
                type: "post",
                data: {name:$(this).val()},

                success:function(res){
                    $("#userNotification").text(res).css("color","green");
                    $("#Signup").prop( "disabled", false );
                    $("#email").prop( "disabled", false );
                    $("#pwd").prop( "disabled", false );
                    $("#cpwd").prop( "disabled", false );
                }

            })
        }
    })
})

$(document).ready(function(){
    $("#email").change(function(){
        let emailPattern = /[a-zA-Z_0-9](@gmail.com)$/;
        if(emailPattern.test($(this).val())== false){
            $("#emailNotification").text("Email không hợp lệ").css("color","red");
            $("#Signup").prop( "disabled", true );
            $("#username").prop( "disabled", true );
            $("#pwd").prop( "disabled", true );
            $("#cpwd").prop( "disabled", true );
            $(this).focus();

        }
        else{
            $.ajax({
                url: "processCheckEmailTeacher.php",
                type: "post",
                data: {email:$(this).val()},

                success:function(res){
                    $("#emailNotification").text(res).css("color","green");
                    $("#Signup").prop( "disabled", false );
                    $("#username").prop( "disabled", false );
                    $("#pwd").prop( "disabled", false );
                    $("#cpwd").prop( "disabled", false );
                }

            })
        }
    })
})

