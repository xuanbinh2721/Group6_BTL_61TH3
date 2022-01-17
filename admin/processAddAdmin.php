<?php
    // Xử lý giá trị GỬI TỚI
    if(!isset($_POST['add'])){
        header("location:index.php");
    }
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $full_name=htmlspecialchars($full_name);
    $username = htmlspecialchars($username);
    require '../config/dbconfig.php';
    $sql= "SELECT * FROM admin where username='$username'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
        $_SESSION['error'] = 'Đã có Username này!!!';
        header("location: addAdmin.php");
        exit();
    }
    else{
        $pass_hash=password_hash($password,PASSWORD_DEFAULT);
        $sql1 = "INSERT INTO admin (full_name,username,password) VALUES ('$full_name','$username','$pass_hash')";
        $result1 = mysqli_query($conn,$sql1);
    
        if($result1 == FALSE){
            $_SESSION['error'] = 'Có lỗi!!!';
            header("location: addAdmin.php");
        }else{
            $_SESSION['success'] = 'Thêm tài khoản thành công!';
            header("location: index.php");
            exit();
        }
    }

    mysqli_close($conn);
?>
