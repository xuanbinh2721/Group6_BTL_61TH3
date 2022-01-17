<?php
    require './commons/checklogin.php';

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','edmodo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM student";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
    }
?>
<?php
    include("./commons/header.php");
?>
<main>
    <a href="./view_student.php" class ="btn btn-warning ms-5 mt-2"> Back </a>
    <div class="container">
        <h3 class="text-center text-dark mt-5">Cập nhật thông tin sinh viên</h3>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="ProcessUpdatestd.php" method="post">
            <div class="form-group">
                <label for="txtHoTen">Họ và tên</label>
                <input type="text" class="form-control" id="txtHoTen" name="txtHoTen" placeholder="Nhập họ tên" value="<?php echo $row['full_name'] ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            
            <div class="form-group">
                <label for="txtGT">Giới tính</label>
                <input type="text" class="form-control" id="txtgioittinh" name="txtgioitinh" placeholder="" value="<?php echo $row['sex'] ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>

            <div class="form-group">
                <label for="txtNS">Ngày sinh</label>
                <input type="date" class="form-control" id="txtngaysinh" name="txtngaysinh" placeholder="Nhập ngày sinh" value="<?php echo $row['date_of_birth'] ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtLop">Lớp</label>
                <input type="tel" class="form-control" id="txtLop" name="txtLop" placeholder="Nhập lớp" value="<?php echo $row['idclass'] ?>"> 
            </div>          
            <button type="submit" class="btn btn-warning mt-3">Lưu lại</button>
        </form>
    </div>    
</main>
