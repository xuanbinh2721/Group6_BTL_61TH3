<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    session_start();
    if(!isset($_SESSION['isLoginOK'])){
        header("location:login.php");
    }
    // admin.php TRUYỀN DỮ LIỆU SANG
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $id = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "DELETE FROM admin WHERE id = '$id'";

    $number = mysqli_query($conn,$sql);

    if($number > 0){
        header("location: index.php"); //Chuyển hướng về Trang quản trị
    }else{
        $_SESSION['error'] = 'Có lỗi!';
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);
?>