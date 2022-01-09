<?php
if( isset($_POST['class'])){
    $idclass = $_POST['class'];
    require '../config/dbconfig.php';
    $sql = "SELECT * FROM class WHERE  idclass='$idclass'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) <= 0){
        echo "ID Class không tồn tại";
    }
    else{ 
        echo "ID Class có thể đăng kí";
    }
    mysqli_close($conn); 
}

?>