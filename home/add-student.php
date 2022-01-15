<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
   
    include("../home/commons/change_pw.php");
?>
    <main>
    <a href="./view_student.php" class ="btn btn-warning ms-5 mt-2"> Back </a>
    <div class="container">
        <h3 class="text-center mt-5">Thêm thông tin học sinh</h3>
        
        <form action="process-add-student.php" method="post">
           
            <div class="form-group">
                <label for="txtHoTen">Họ Tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên">
            </div>

            <div class="form-group">
                <label for="txtGioiTinh">Giới Tính</label>
                <input type="text" class="form-control" id="txtGioiTinh" name="txtGioiTinh" placeholder="Nhập giới tính">
            </div>
            <div class="form-group">
                <label for="txtNgaySinh">Ngày Sinh</label>
                <input type="date" class="form-control" id=dateNgaySinh" name="dateNgaySinh" placeholder="">
            </div>
            
            <button type="submit" class="btn btn-warning mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

