<?php

if(isset($_POST['btnLogin'])){
    $user =$_POST['user'];
    $pass= $_POST['pass'];
    $email = $user;
    $user=htmlspecialchars($user);
    $pass=htmlspecialchars($pass);
    require "../config/dbconfig.php";
    $sql= "SELECT * FROM usersteacher WHERE email = ? OR name = ? AND status = 1";
    $stmt = mysqli_prepare($conn,$sql);
        mysqli_stmt_bind_param($stmt,"ss",$email,$user);

        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_bind_result($stmt,$idteacher,$nameteacher,$emailteacher,$passTeacher,$statusTeacher,$emailverificationlinkTeacher,$emailverifiedatTeacher);
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($pass,$matkhauTeacher)){
                    // CẤP THẺ LÀM VIỆC
                    $_SESSION['isLoginOK'] = $email;
                    header("location: ../index.html"); //Chuyển hướng về Trang quản trị
                }
                else{
                    $error = "Bạn nhập Mật khẩu không chính xác";
                    header("location: loginTeacher.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
                }
            }
            
        }
        else{
            $error = "Bạn nhập thông tin Email không tồn tại";
            header("location: loginTeacher.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }

        mysqli_close($conn);
}
else{
    header("location:loginTeacher.php");
}



?>