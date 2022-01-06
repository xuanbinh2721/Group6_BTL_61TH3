<?php

if($_POST['name']){
    $name = $_POST['name'];
    require '../config/dbconfig.php';
    $sql = "SELECT * FROM usersstudent WHERE  name ='$name'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) <= 0){
        echo "Username hợp lệ";
    }
    else{ 
        echo "Username đã được đăng kí";
    }
    mysqli_close($conn); 
}

?>