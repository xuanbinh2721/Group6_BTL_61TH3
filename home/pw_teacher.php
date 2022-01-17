<?php
    
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    require './commons/checklogin.php';

    $id = $_SESSION['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM usersstudent WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
    }
    mysqli_close($conn); 

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="/Group6_BTL_61TH3-master/home/js/home.js"></script>
  <title>Edmodo</title>
</head>
<body>
<a href="./view_teacher.php" class ="btn btn-warning ms-5 mt-5"> Back </a>
<h3 class ="text-center mt-5">Change Password</h3>

<main class = "d-flex justify-content-center">
<form action="./processChangePwTeacher.php?id=<?php echo $row['id'];?>" method="POST">
        <table class="tbl-30 ms-5">
            <tr>
                <td>Current Password: </td>
                <td>
                    <input type="password" require name="current_password" placeholder="">
                </td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td>
                    <input type="password" require name="new_password" id="npwd" placeholder="" onchange='check_pass();'>
                </td>
            </tr>
            <tr>
                <td>Confirm Password: </td>
                <td>
                    <input type="password" require name="confirm_password" id = "cnpwd" placeholder="" onchange ='check_pass();'>
                </td>
            </tr>
        </table>
        <div class= "d-flex justify-content-center">
            <button type="submit" class="btn bg-warning mt-2" id="Change" name="Change" >Change Password</button>
        </div>
        <small id ="message">
            <?php 
                require '../config/session.php';
            ?>
        </small>
    </form>
</main>
</body>




