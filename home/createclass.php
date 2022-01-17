<?php
    require './commons/checklogin.php';
    require '../config/session.php';
?>
<?php 
    include("../home/commons/header.php");
?>
<main>
    <a href="../home/view_teacher.php" class ="btn btn-warning ms-5 mt-2"> Back </a>
    <div class="container">
    
        <h3 class="text-center mt-5">Tạo lớp học</h3>
        
        <form action="process-create.php" method="post">
        
            <div class="form-group">
                <label for="txtID">Tạo id lớp:</label>
                <input type="text" class="form-control" id="txtID" name="txtIDclass" placeholder="Nhập id ">
            </div>

            <div class="form-group">
                <label for="txtTen">Tên lớp học:</label>
                <input type="text" class="form-control" id="txtTen" name="txtTenclass" placeholder="Nhập tên">
            </div>                      
            <button type="submit" class="btn btn-warning mt-3">Lưu lại</button>
        </form>
    </div>    
</main>