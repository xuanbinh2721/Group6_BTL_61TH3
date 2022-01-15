<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/header.css">
  <link rel="stylesheet" href="./css/view_profile.css">
  <title>Home | Edmodo</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="./student_index.php">
                        <img src="../img/edomoicon.png" alt="" class="img-fluid edmodo-img me-2"></a>
                    <button class="btn-show navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="sub-menu-header collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="./student_index.php">
                                <i class="bi bi-globe"></i> 
                                Home
                            </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="bi bi-people-fill"></i>
                                Class</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                <i class="bi bi-calendar"></i>
                                Calendar</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                <i class="bi bi-briefcase-fill"></i>
                                Backpack</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item me-auto account_dad">
                                <a class="nav-link">
                                <i class="bi bi-person-circle"></i> Account</a>
                                <ul class="account_chil">
                                    <li>
                                        <a href="" class="dropdown-item border-bottom text-start">
                                            <i class="bi bi-eye-fill"></i>
                                             View profile
                                        </a>
                                    </li>
    
                                    <li>
                                        <a href="./pw_student.php" class="dropdown-item border-bottom text-start">
                                            <i class="bi bi-pencil-square"></i>
                                             Change Password
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item border-bottom text-start">
                                            <i class="bi bi-gear-fill"></i>
                                             Setting
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="dropdown-item border-bottom text-start">
                                             <i class="bi bi-question-circle-fill"></i>
                                             Help Center
                                        </a>
                                    </li>
                                    <li>
                                        <a href="../Login-Signup/logout.php" class="dropdown-item text-start">
                                            <i class="bi bi-box-arrow-right"></i>
                                             Log out
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main class="container-fluid main">
        <div class="profile-contain">
            <div class="avatar">
                <a href="">
                    <img class="img-fluid rounded-circle" src ="../img/avttt.jpg">
                </a>
                <button class="lable ms-3 mt-2 display-6">Thay ảnh</button>
            </div>
            <div class="inf">
                <h1 class="display-5 fs-3 mb-3">THÔNG TIN CÁ NHÂN:</h1>
                <table class="table">
                    <thead >
                        <tr class="text-center">
                    
                        <th scope="col">Họ và tên</th>                    
                        <th scope="col">Giới tính</th>                    
                        <th scope="col">Ngày sinh</th>
                        <th scope="col">Lớp</th>                  
                    </thead>
                    <tbody>
                        <?php
                        // Bước 01: Kết nối Database Server
                        $conn = mysqli_connect('localhost','root','','edmodo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT full_name, sex, date_of_birth, idclass FROM student";
                        $result = mysqli_query($conn,$sql);
                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result) > 0){
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                                <tr class="text-center">
                                    <th scope="row"><?php echo $row['full_name']; ?></th>
                                    <td><?php echo $row['sex']; ?></td>
                                    <td><?php echo $row['date_of_birth']; ?></td>
                                    <td><?php echo $row['idclass']; ?></td>
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
            <div class="menu">
                <a type="button" class="btn btn-warning" style="width: 200px ; display: block" href="add-student.php">Thêm</a>
                <a type="button" class="btn btn-warning" style="width: 200px ; display: block" href="">Sửa</a>
                <!-- <button type="button" class="btn btn-warning">Xóa</button> -->
            </div>              
        </div>  
        <nav>
        <div class="nav nav-tabs mt-5" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Bài về nhà</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Bài kiểm tra</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Xem điểm</button>
        </div>
        </nav>
        <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            Comming soon
            <div class="empty">
                <img src="../img/empty.png" alt="" class="img-fluid empty-img">
            </div>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
            Comming soon
            <div class="empty">
                <img src="../img/empty.png" alt="" class="img-fluid empty-img">
            </div>
        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
            Comming soon
            <div class="empty">
                <img src="../img/empty.png" alt="" class="img-fluid empty-img">
            </div>
        </div>
        </div>     
    </main>
</body> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>