<?php
    // Xử lý giá trị GỬI TỚI
    session_start();
    
    $id = $_SESSION['id'];
    $hoten = $_POST['txtHoTen'];
    $gioitinh = $_POST['txtGioiTinh'];
    $ngaysinh = $_POST['dateNgaySinh'];
  

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "INSERT INTO teacher (iduser,full_name, sex, date_of_birth) VALUES ('$id','$hoten','$gioitinh','$ngaysinh')";
    // echo $sql;
    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
         $_SESSION['error'] = 'Có lỗi!';
        header("location: add-teacher.php");
     }else{
         header("location: view_teacher.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>