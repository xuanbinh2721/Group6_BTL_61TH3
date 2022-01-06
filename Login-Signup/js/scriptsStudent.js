$(document).ready(function(){
    $("#username").change(function(){
        let userlPattern = /[a-zA-Z_0-9]$/;
        if(userlPattern.test($(this).val()) == false){
            $("#userNotification").text("Username không hợp lệ").css("color","red");
            $("#Signup").prop( "disabled", true );
        }
        else{
            $.ajax({
                url: "processCheckUsernameStudent.php",
                type: "post",
                data: {name:$(this).val()},

                success:function(res){
                    $("#userNotification").text(res).css("color","green");
                    $("#Signup").prop( "disabled", false );
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
        }
        else{
            $.ajax({
                url: "processCheckEmailStudent.php",
                type: "post",
                data: {email:$(this).val()},

                success:function(res){
                    $("#emailNotification").text(res).css("color","green");
                    $("#Signup").prop( "disabled", false );
                }

            })
        }
    })
})

