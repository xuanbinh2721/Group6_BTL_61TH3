<?php

if( !isset($_POST['btnSignUp']) ){
    header("location: signupTeacher.php");
}
else{
    $user = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $sql1 = "SELECT * FROM users WHERE name='$user' OR email='$email'";
    $result1 = mysqli_query($conn,$sql1);
    if(mysqli_num_rows($result1) > 0){
        $error = "Username or Email is existed";
        header("location: signupTeacher.php?error=$error");
    }
    
    else{
        $token = md5($_POST['email']).rand(10,9999);
        $pass_hash=password_hash($pass,PASSWORD_DEFAULT);
        $sql2 = "INSERT INTO users (name, email, email_verification_link ,password) VALUES('$user', '$email', ' $token ', '$pass_hash')";
        $result2 = mysqli_query($conn,$sql2);
        $link = "<a href='http://localhost/project07/verify.php?key=".$email."&token=".$token."'>Click and Verify Email</a>";
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
            $error = "Bạn nhập thông tin Email không chính xác";
            header("location: signupTeacher.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
    }
            
    
    mysqli_close($conn); 
    }
}





?>