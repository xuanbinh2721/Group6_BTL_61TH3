<?php
    // Trước khi cho người dùng xâm nhập vào bên trong
    // Phải kiểm tra THẺ LÀM VIỆC
    require './commons/checklogin.php';

    require '../config/session.php';
    $iduser =$_SESSION['id'];
    $conn = mysqli_connect('localhost','root','','edmodo');
     if(!$conn){
         die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
     }
     $sql = "SELECT * from teacher where iduser = '$iduser'";
     $result = mysqli_query($conn,$sql);
     if(mysqli_num_rows($result) >0){
         $row = mysqli_fetch_assoc($result);
         
        }
  
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
  <link rel="stylesheet" href="../home/css/header.css" ></link> 
  <link rel="stylesheet" href="../home/css/hometeacher.css"></link>
  <title>Home | Edmodo</title>
</head>

<body>
    <header class="container-fluid">
        <div class="row">
            <nav class="fixed-top navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="../img/edomoicon.png" alt="" class="img-fluid edmodo-img me-2"></a>
                    <button class="btn-show navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="sub-menu-header collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">
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
                                <i class="bi bi-person-circle"></i>
                                <?php
                                    if(isset($_SESSION['name']))
                                    {
                                       echo $_SESSION['name'];
                                    }
                                ?>                                                           
                                </a>
                                <ul class="account_chil">
                                    <li>
                                        <a href="./view_teacher.php" class="dropdown-item border-bottom text-start">
                                            <i class="bi bi-eye-fill"></i>
                                             View profile
                                        </a>
                                    </li>
    
                                    <li>
                                        <a href="./pw_teacher.php" class="dropdown-item border-bottom text-start">
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
    <main class="main">
        <div class="row">
            <div class="column1 col-md-3">
                <div class="view-profile">
                    <div class="account">
                        <img src="./upload/<?php echo $row['teacher_img']; ?>" class="img-fluid rounded-circle avatar">
                        <div class="account-1">
                            <?php
                                if(isset($_SESSION['name']))
                                {
                                    echo '<h5 class="name">';
                                    echo $_SESSION['name'];                                        
                                    echo'</h5>';
                                }
                            ?>
                            <a href="" class="text-decoration-none link-dark">View profile</a>
                        </div>
                    </div>   
                </div>
                <div class="my-classes">
                    <h5 class="pt-3">MY CLASSES</h5>
                    <?php 
                        $sql1 = "SELECT * from class where idteacher = '$iduser'";
                        $result1 = mysqli_query($conn,$sql1);
                        if(mysqli_num_rows($result1) >0){
                            while($row1 = mysqli_fetch_assoc($result1)){
                    ?>
                        <li href=""><a href = "" class="text-decoration-none text-dark" >
                            <?php
                                echo $row1['classname'];
                            ?>
                        </a></li>
                    <?php 
                       }
                    }else{
                    ?>
                        <li href=""><a href = "" class="text-decoration-none text-dark" >
                            <?php
                                echo 'Chưa có lớp nào';
                            ?>
                        </a></li>
                    <?php    
                    }
                    mysqli_close($conn);
                    ?>
                   
                                      
                    <hr>
                    <h5 class="groups">MY GROUPS</h5>
                    <li href="" class="list-unstyled groups_text"><span>Share resources and collaborate with educators like you.</span></li>
                    <li href="" class="list-unstyled">
                        <a href="" class="text-decoration-none groups_link">
                            <i class="bi bi-plus"></i>
                                Create a Group
                        </a>
                    </li>                               
                    <hr>
                    <h5 class="groups">MY HASHTAGS</h5>
                    <li href="" class="list-unstyled groups_text-2"><span>Hashtags you follow will appear here.</span></li>
                    <hr>
                    <h5 class="pt-2">POPULAR HASHTAG</h5>
                    <li href="" class="list-unstyled">#Art</li>
                    <li href="" class="list-unstyled">#Class</li>
                    <li href="" class="list-unstyled ">
                        <a href="" class="text-decoration-none mb-4">
                            Explore hashtag
                        </a>
                    </li>      
                </div>
            </div>
            <div class="column2 col-md-6">
                <div class="share">
                    <img src="../img/avttt.jpg" class="img-fluid rounded-circle avatar-md-6">
                    <div class="">
                        <span class="share-text text-muted">
                            Share your throughts with other teachers
                        </span>
                        <span>
                        <a href="" class="text-decoration-none text-muted me-1">
                            <i class="bi bi-image"></i>
                        </a>
                        </span>
                        <span>
                        <a href="" class="text-decoration-none text-muted">
                            <i class="bi bi-journal-bookmark-fill"></i>
                        </a>
                        </span>                        
                    </div>                    
                </div>
                <hr>
                <div class="post">
                    <div class="card" style="">
                        <img src="../img/home_teacher.jpg" class="card-img-top img-fluid " alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Get Started With Edmodo!</h5>
                            <p class="card-text ps-5 pe-5 text-center">Create a class or join an existing class or school and start communicating with students and parents, and share digital assignments, quizzes, and more.</p>
                            <span>
                                <a href="#" class="btn btn-warning post-btn join">Join School</a>
                            </span>
                            <span>
                                <a href="./createclass.php" class="btn btn-warning post-btn">Create a class</a>
                            </span>
                        </div>
                    </div>                   
                </div>
                <div class="recomment border border-secondary">
                    <div class="rcm border-bottom border-secondary">
                        <img src="../img/edmodo_yl.png" class="img-fluid rounded-circle post-img">
                        Recommended for you
                    </div>
                    <div class="card" style="">
                        <img src="../img/home_teacher.jpg" class="card-img-top img-fluid card-img" alt="...">
                        <div class="card-body">
                            <h5 class="card-title text-center">Distance Learning Collection</h5>
                            <p class="card-text ps-5 pe-5 text-center">Find practical resources for distance learning, including guides and activities for engaging students online.</p>
                            <span>
                                <a href="#" class="btn btn-warning post-btn-1">View Collection</a>
                            </span>
                        </div>
                    </div>                   
                </div> 
                <button class="btn-load mt-4 pt-2 pb-2">
                    All posts loaded
                </button>                
            </div>
            <div class="col-md-3">
                <div class="footer">
                    <span><a href = "" class ="text-decoration-none text-muted">Languages</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Support</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">About</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Career</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Privacy</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Terms of Service</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Contact Us</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Blog</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Twitter</a></span> ·
                    <span><a href = "" class ="text-decoration-none text-muted">Facebook</a></span>                    
                </div>
                <p class="mt-3">Edmodo &copyright 2022</p>
            </div>
        </div>
    </main>
    <script  script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>