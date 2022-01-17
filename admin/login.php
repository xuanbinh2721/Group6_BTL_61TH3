<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/scripts.js"></script>
</head>
<body>
<header class="header-navbar container-fluid fixed-top">
    <nav class="navbar navbar-light">
    <div class="container ">
        <a class="navbar-brand" href="../index.php">
        <img src="../img/edomoicon.png" alt="" class="img-fluid">
        </a>
    </div>
    </nav>
</header>
<main class="container-fluid">
<div class="wrapper">
    <div class="card">
        <form action="./processLogin.php" class="d-flex flex-column" method ="post">
            <div class="h3 text-center text-black mt-3 mb-5">Admin</div>
            <div class="d-flex align-items-center input-field my-3 "> 
                <span class="fa fa-user p-2"></span> 
                <input type="text" placeholder="Username" required class="form-control" id="user" name="user"> 
            </div>
            <small id="userNotification" class ="mb-4"></small>
            <div class="d-flex align-items-center input-field mb-4">
                <span class="fas fa-lock p-2"></span> 
                <input type="password" placeholder="Password" required class="form-control" id="pwd" name="pass">  
            </div>
            <div class="my-3"> 
                <input type="submit" value="Login" class="btn btn-primary" name= "btnLogIn" id="btnLogIn"> 
            </div>
            <small>
            <?php
                require '../config/session.php';
            ?>
            </small>
        </form>
    </div>
</div>
</main>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>