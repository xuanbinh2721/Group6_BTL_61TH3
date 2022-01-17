<?php
    session_start();
    if(isset($_POST['txtHoTen'])){
        $hoten = $_POST['txtHoTen'];
    }
    $id = $_SESSION['id'];
    $gioitinh   = $_POST['txtgioitinh'];
    $ngaysinh  = $_POST['txtNgaysinh'];
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE teacher SET full_name ='$hoten', sex='$gioitinh', date_of_birth = '$ngaysinh' where iduser = '$id'";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: ../home/view_teacher.php"); 
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>