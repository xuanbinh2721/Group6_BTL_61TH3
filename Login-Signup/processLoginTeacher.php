<?php
require_once '../config/dbconfig.php';
if(empty($_POST['user']) || empty($_POST['pass'])) {
    $_SESSION['error'] = 'Bạn cần điền đầy đủ thông tin!';
    header('location:loginTeacher.php');
    exit();
}
$user =  htmlspecialchars($_POST['user']);
$password = htmlspecialchars($_POST['pass'], ENT_QUOTES);
$email = $user;
$email= htmlspecialchars($email);


$sql = "SELECT * from usersteacher where email = ? or name = ?";

$stmt = mysqli_prepare($conn, $sql);

if($stmt){
    // Liên kết biến với tham số trong câu lệnh đã chuẩn bị
    mysqli_stmt_bind_param($stmt, "ss", $user, $email);
    
    if(mysqli_stmt_execute($stmt)) {
        mysqli_stmt_store_result($stmt);
        if(mysqli_stmt_num_rows($stmt) == 1) {
            mysqli_stmt_bind_result($stmt, $tchId, $tchName,  $tchEmail, $tchPassword,  $status,$token, $tokenVerification);
            if(mysqli_stmt_fetch($stmt)) {
                if($status == 1) {
                    if(password_verify($password, $tchPassword)) {
                        $_SESSION['id'] = $tchId;
                        $_SESSION['name'] = $tchName;
                        $_SESSION['email'] = $tchEmail;
                        header('location: ../home/teacher_index.php');
                        exit();
                    } else{
                        $_SESSION['error'] = 'Sai mật khẩu ';
                        header('location:loginTeacher.php');
                        exit();
                    }
                
                } else {
                    $_SESSION['error'] = 'Vui lòng xác thực email';
                }
            }
        } else {
            $_SESSION['error'] = 'Hãy kiểm tra lại email và mật khẩu của bạn!';
        }
    }

} else{
    $_SESSION['error'] = 'Không thể kết nối đến hệ thống';
}
 
// Đóng câu lệnh
mysqli_stmt_close($stmt);

mysqli_close($conn);

header('location:loginTeacher.php');