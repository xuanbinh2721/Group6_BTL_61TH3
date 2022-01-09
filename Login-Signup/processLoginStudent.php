<?php

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnLogIn'])){
        $user = $_POST['user'];
        $pass  = $_POST['pass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa
         $email =$user;
        // Bước 01: Kết nối Database Server
        require "../config/dbconfig.php";
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM usersstudent WHERE (email = ? OR name = ?) AND status = 1";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        $stmt = mysqli_prepare($conn,$sql);
        if($stmt){
            mysqli_stmt_bind_param($stmt,"ss",$email,$user);
            if(mysqli_stmt_num_rows($stmt) == 1){
                mysqli_stmt_bind_result($stmt, $std_id,$std_idclass, $std_name, $std_email, $std_password, $token, $status, $token_verification);
                if(mysqli_stmt_fetch($stmt)){
                    if($status == 1){
                        if(password_verify($pass,$std_password)){
                        // CẤP THẺ LÀM VIỆC
                        $_SESSION['isLoginOK'] = $user;
                        header("location: signup.php"); //Chuyển hướng về Trang quản trị
                    }
                    else{
                        $error = "Bạn nhập Mật khẩu không chính xác";
                        header("location: loginStudent.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
                    }
                }
            }
            }
            
        }
        else{
            $error = "Bạn nhập thông tin Email không tồn tại";
            header("location: loginStudent.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        }
    
        mysqli_stmt_close($stmt);

        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>