<?php

    session_start();
    if(!isset($_SESSION['id'])){
        header("location:login.php");
    }
    $id = $_GET['id'];

    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM admin WHERE id = '$id'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        $_SESSION['success'] = 'Xóa tài khoản thành công!';
        header("location: index.php"); 
        exit();
    }else{
        $_SESSION['error'] = 'Có lỗi!';
    }

    mysqli_close($conn);
?>