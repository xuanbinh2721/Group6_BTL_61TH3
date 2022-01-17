
<?php 
include('../admin/template/header.php'); 

?>

<h3 class ="text-center mt-5">Quản lý tài khoản</h3>
<p class="ms-3">
  <?php
    require '../config/session.php';
  ?>
</p>
<nav>
  <div class="nav nav-tabs mt-5 " id="nav-tab" role="tablist">
    <button class="nav-link active" id="nav-adminaccount-tab" data-bs-toggle="tab" data-bs-target="#nav-adminaccount" type="button" role="tab" aria-controls="nav-adminaccount" aria-selected="true">Admin Account</button>
    <button class="nav-link" id="nav-teacheraccount-tab" data-bs-toggle="tab" data-bs-target="#nav-teacheraccount" type="button" role="tab" aria-controls="nav-teacheraccount" aria-selected="false">Teacher Account</button>
    <button class="nav-link" id="nav-studentaccount-tab" data-bs-toggle="tab" data-bs-target="#nav-studentaccount" type="button" role="tab" aria-controls="nav-studentaccount" aria-selected="false">Student Account</button>
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
<div class="tab-pane fade show active" id="nav-adminaccount" role="tabpanel" aria-labelledby="nav-adminaccount-tab">
        <div>
            <a class="btn btn-primary my-3 ms-5" href="addAdmin.php">Thêm</a>
        </div>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">Full Name</th>
      <th scope="col">Username</th>
      <th scope="col">Đổi mật khẩu</th>
      <th scope="col">Xóa</th>
    </tr>
  </thead>
  <tbody>
  <?php
   // Bước 01: Kết nối Database Server
   $conn = mysqli_connect('localhost','root','','edmodo');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT id, full_name, username FROM admin";
    $result = mysqli_query($conn,$sql);
    // Bước 03: Xử lý kết quả truy vấn
    if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_assoc($result)){
      ?>
      <tr>
        <td><?php echo $row['full_name']; ?></td>
        <td><?php echo $row['username']; ?></td>
        <td><a href="changePassword.php?id=<?php echo $row['id']; ?>"><i class="bi bi-key ms-5"></i></a></td>
        <td><a href="deleteAdmin.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash "></i></a></td>
      </tr>
      <?php
      }
    }
    // Bước 04: Đóng kết nối Database Server
    mysqli_close($conn);
    ?>           
</tbody>
</table>
</div>
<div class="tab-pane fade" id="nav-teacheraccount" role="tabpanel" aria-labelledby="nav-teacheraccount-tab">
<table class="table">
<thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Email Verified At</th>

    </tr>
  </thead>
  <tbody>
  <?php    
   $conn = mysqli_connect('localhost','root','','edmodo');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }             
  $sql1 = "SELECT  name, email, email_verified_at, status FROM usersteacher";
  $result1 = mysqli_query($conn,$sql1);
  if(mysqli_num_rows($result1) > 0){
    while($row1 = mysqli_fetch_assoc($result1)){
  ?>
    <tr>
      <td><?php echo $row1['name']; ?></td>
      <td><?php echo $row1['email']; ?></td>
      <td><?php echo $row1['status']; ?></td>
      <td><?php echo $row1['email_verified_at']; ?></td>
    </tr>                              
    <?php
    }
  }
    mysqli_close($conn);
  ?>
</tbody>
</table>
</div>

<div class="tab-pane fade" id="nav-studentaccount" role="tabpanel" aria-labelledby="nav-studentaccount-tab">
<table class="table">
<thead>
    <tr>
      <th scope="col">ID Class</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Email Verified At</th>
    </tr>
  </thead>
  <tbody>
  <?php
   $conn = mysqli_connect('localhost','root','','edmodo');
   if(!$conn){
       die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
   }
  $sql2 = "SELECT idclass, name, email,email_verified_at, status FROM usersstudent";
  $result2 = mysqli_query($conn,$sql2);
  if(mysqli_num_rows($result2) > 0){
    while($row2 = mysqli_fetch_assoc($result2)){
    ?>
      <tr>
        <td><?php echo $row2['idclass']; ?></td>
        <td><?php echo $row2['name']; ?></td>
        <td><?php echo $row2['email']; ?></td>
        <td><?php echo $row2['status']; ?></td>
        <td><?php echo $row2['email_verified_at']; ?></td>
      </tr>
    <?php
    }
  }
  mysqli_close($conn);
  ?>
</tbody>
</table>
</div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<?php include('../admin/template/footer.php') ?>
