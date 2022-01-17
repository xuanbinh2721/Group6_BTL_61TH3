<?php 
    include('../admin/template/header.php');

    
    $id = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM admin WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        $id = $row['id'];
    }
    mysqli_close($conn); 

?>

<h3 class ="text-center mt-5">Change Password</h3>

<div>
<main class = "d-flex justify-content-center">
<form action="./processChangePassword.php?id=<?php echo $row['id'];?>" method="POST">
        <table class="tbl-30 mb-3">
            <tr>
                <td>Current Password: </td>
                <td>
                    <input type="password" name="current_password" required placeholder="">
                </td>
            </tr>
            <tr>
                <td>New Password:</td>
                <td>
                    <input type="password" name="new_password" id="npwd" required placeholder="" onchange='check_pass();'>
                </td>
            </tr>
            <tr>
                <td>Confirm Password: </td>
                <td>
                    <input type="password" name="confirm_password" id="cnpwd" required placeholder="" onchange='check_pass();'>
                </td>
            </tr>
        </table>
        <div class= "d-flex justify-content-center">
            <button type="submit" class="btn  bg-warning" id="Change" name="Change" disabled>Change Password</button>
        </div>
        <small id="message">
        <?php
            require '../config/session.php';
        ?>
        </small>
    </form>
</main>
</div>




<?php include('../admin/template/footer.php'); ?>