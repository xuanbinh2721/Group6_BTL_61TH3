<?php
if(isset($_POST['Change']))
{
    $id = $_GET['id'];
    $oldPass = htmlspecialchars($_POST['current_password'],ENT_QUOTES);
    $newPass = password_hash($_POST['new_password'],PASSWORD_DEFAULT);
    $cPass = password_hash($_POST['confirm_password'],PASSWORD_DEFAULT);

    require '../config/dbconfig.php';


    $sql = "SELECT * FROM admin where id='$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        if(password_verify($oldPass,$row['password'])){
            $sql1 = "UPDATE admin SET password = '$newPass' where id ='$id'";
            $result1 = mysqli_query($conn,$sql1);
            if($result1 == true){
                $_SESSION['success'] = 'Đổi mật khẩu thành công!';
                header("location: index.php");
                exit();
            }
            else{
                $_SESSION['error'] = 'Đổi mật khẩu thất bại!!!';
                header("location: changePassword.php?id=$id");
            }
        }
        else{
            $_SESSION['error'] = 'Mật khẩu hiện tại không chính xác!!!';
            header("location: changePassword.php?id=$id");
        }
    }
    else{
        $_SESSION['error'] = $id;
        header("location: changePassword.php?id=$id");
    }
}
mysqli_close($conn);




?>