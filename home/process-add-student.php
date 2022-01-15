<?php
    // Xử lý giá trị GỬI TỚI
    session_start();
    $hoten = $_POST['txtHoTen'];
    $gioitinh = $_POST['txtGioiTinh'];
    $ngaysinh = $_POST['dateNgaySinh'];
    $id = $_SESSION['id'];
    $sql2 = "SELECT idclass from usersstudent where id = '$id'";
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    $ketqua2 = mysqli_query($conn,$sql2);

    // Bước 02: Thực hiện truy vấn
    if (mysqli_num_rows($ketqua2)>0){
        $row = mysqli_fetch_assoc($ketqua2);
        $idclass = $row['idclass'];
        $sql = "INSERT INTO student (iduser, full_name, sex, date_of_birth, idclass) VALUES ('$id','$hoten','$gioitinh','$ngaysinh', '$idclass')";
        // echo $sql;
        $ketqua = mysqli_query($conn,$sql);
        

         if(!$ketqua){
             $_SESSION['error'] = 'Có lỗi!';
             header("location: add-student.php");
         }else{
            header("location: view_student.php"); //Chuyển hướng lại Trang Quản trị
         }
    }
    
    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>