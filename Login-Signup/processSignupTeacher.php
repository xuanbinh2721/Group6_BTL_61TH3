<?php

if( !isset($_POST['btnSignUp']) ){
    header("location: signupTeacher.php");
}
else{
    $user = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $user= htmlspecialchars($user);
    $email = htmlspecialchars($email);  
    require '../config/dbconfig.php';
    $sql1 = "SELECT * FROM usersteacher WHERE name='$user' OR email='$email'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1) > 0){
        $error = "Username hoặc Email đã tồn tại";
        header("location: signupTeacher.php?error=$error");
    }
    
    else{
        $token = md5($_POST['email']).rand(10,9999);
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO usersteacher (name, email, email_verification_link ,password) VALUES('$user', '$email', '$token', '$pass_hash')";
        $result2 = mysqli_query($conn,$sql2);
        $link = "<a href='http://localhost/Group6_BTL_61TH3/Login-Signup/verifyMailTeacher.php.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";
        if($result2 == true){
            require "./send-mail.php";
            if(sendEmailForAccountActive($email,$link)){
                echo "Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản";
            }
            else{
                echo "Xin lỗi email chưa được gửi đi. Vui lòng kiểm tra thông tin tài khoản";
            }
        }
        else{
            $error = "Có lỗi vui lòng nhập lại thông tin";
            header("location: signupTeacher.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }
            
    
    mysqli_close($conn); 
    }
}





?>