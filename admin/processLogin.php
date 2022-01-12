<?php
require_once '../config/dbconfig.php';
if(empty($_POST['user']) || empty($_POST['pass'])) {
    $_SESSION['error'] = 'Bạn cần điền đầy đủ thông tin!';
    header('location:loginTeacher.php');
    exit();
}
$user = $_POST['user'];
$password = htmlspecialchars($_POST['pass'], ENT_QUOTES);



$sql = "SELECT * from admin where  username = ?";

$stmt = mysqli_prepare($conn, $sql);

if($stmt){
    // Liên kết biến với tham số trong câu lệnh đã chuẩn bị
    mysqli_stmt_bind_param($stmt, "s", $user);
    
    if(mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $adId, $adName,  $adUsername, $adPassword);
            if(mysqli_stmt_fetch($stmt)) {   
                if(password_verify($password, $adPassword)) {
                    $_SESSION['id'] = $adId;
                    $_SESSION['user'] = $adUsername;
                } else{
                    $_SESSION['error'] = 'Sai mật khẩu ';
                    header('location:login.php');
                    exit();
                }
            }
        } else {
            $_SESSION['error'] = 'Hãy kiểm tra lại username và mật khẩu của bạn!';
        }
    }

} else{
    $_SESSION['error'] = 'Không thể kết nối đến hệ thống';
}
 
// Đóng câu lệnh
mysqli_stmt_close($stmt);

mysqli_close($conn);

header('location:login.php');