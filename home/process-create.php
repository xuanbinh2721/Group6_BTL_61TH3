<?php
    // Xử lý giá trị GỬI TỚI
    session_start();
    $idclass = $_POST['txtIDclass'];
    $tenclass = $_POST['txtTenclass'];
    $id = $_SESSION['id'];
  
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }


    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO class (idclass, classname, idteacher) VALUES ('$idclass','$tenclass','$id')";
    $ketqua = mysqli_query($conn,$sql);

    if(!$ketqua){
        $_SESSION['error'] = 'Có lỗi!';
       header("location: ./add-teacher.php");
    }else{
        header("location: ./teacher_index.php"); //Chuyển hướng lại Trang Quản trị
    }

    
    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>