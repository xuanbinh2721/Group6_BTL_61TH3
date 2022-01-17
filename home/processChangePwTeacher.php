<?php
session_start();
 $conn = mysqli_connect('localhost','root','','edmodo');
 if(!$conn){
     die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
 }
if(isset($_POST['Change']))
{
    $id = $_GET['id'];
    $oldPass = htmlspecialchars($_POST['current_password'],ENT_QUOTES);
    $newPass = password_hash($_POST['new_password'],PASSWORD_DEFAULT);
    $cPass = password_hash($_POST['confirm_password'],PASSWORD_DEFAULT);

    require '../config/dbconfig.php';
    // require '../config/session.php';

    $sql = "SELECT * FROM usersteacher where id='$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        if(password_verify($oldPass,$row['password'])){
            $sql1 = "UPDATE usersteacher SET password = '$newPass' where id ='$id'";
            $result1 = mysqli_query($conn,$sql1);
            if($result1 == true){
                $_SESSION['success'] = 'Đổi mật khẩu thành công!';
                header("location: ./student_index.php");
                exit();
            }
            else{
                $_SESSION['error'] = 'Đổi mật khẩu thất bại!!!';
                header("location: ./pw_student.php?id=$id");
            }
        }
        else{
            $_SESSION['error'] = 'Mật khẩu hiện tại không chính xác!!!';
            header("location: ./pw_student.php?id=$id");
        }
    }
    else{
        $_SESSION['error'] = $id;
        header("location: ./pw_student.php?id=$id");
    }
}
mysqli_close($conn);




?>