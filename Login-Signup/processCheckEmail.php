<?php

if( $_POST['email']){
    $email=$_POST['email'];
    require '../config/dbconfig.php';
    $sql = "SELECT * FROM usersteacher WHERE  email='$email'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) <= 0){
        echo "Email hợp lệ";
    }
    else{ 
        echo "Email đã được đăng kí";
    }
    mysqli_close($conn); 
}

?>