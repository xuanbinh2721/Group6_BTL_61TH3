<?php

if( !isset($_POST['btnSignUp']) ){
    header("location: signupStudent.php");
}
else{
    $idclass = $_POST['class'];
    $user = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $user= htmlspecialchars($user);
    $email = htmlspecialchars($email); 
    $idclass = htmlspecialchars($idclass); 
    $pass= htmlspecialchars($pass);
    require '../config/dbconfig.php';
    $sql1 = "SELECT * FROM usersstudent WHERE name='$user' OR email='$email'";
    $sql2 = "SELECT * FROM class where idclass='$idclass'";
    $result1 = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);
    if(mysqli_num_rows($result1) > 0){
        $error = "Username hoặc Email đã tồn tại";
        header("location: signupStudent.php?error=$error");
    }
    
    else if(mysqli_num_rows($result2) <0){
            $error = "ID Class không tồn tại";
            header("location: signupStudent.php?error=$error");
        }
        else{
        $token = md5($_POST['email']).rand(10,9999);
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql3 = "INSERT INTO usersstudent (idclass,name, email, email_verification_link ,password) VALUES('$idclass','$user', '$email', '$token', '$pass_hash')";
        $result3 = mysqli_query($conn,$sql3);
        $link = "<a href='http://localhost/Group6_BTL_61TH3/Login-Signup/verifyMailStudent.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";
        if($result3 == true){
            require "./send-mail.php";
            if(sendEmailForAccountActive($email,$link)){
                echo "Vui lòng kiểm tra hộp thư của bạn để kích hoạt tài khoản";
            }
            else{
                echo "Xin lỗi email chưa được gửi đi. Vui lòng kiểm tra thông tin tài khoản";
            }
        }
        else{
            $error = "ID Class không tồn tại";
            header("location: signupStudent.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }
            
    
    mysqli_close($conn); 
    }
}





?>