<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up For Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="../Login-Signup/js/scriptsStudent.js"></script>
</head>
<body>
<header class="header-navbar container-fluid fixed-top">
    <nav class="navbar navbar-light">
    <div class="container">
        <a class="navbar-brand" href="../index.php">
        <img src="../img/edomoicon.png" alt="" class="img-fluid">
        </a>
    </div>
    </nav>
</header>
<main class="container-fluid">
<div class="wrapper">
    <div class="card">
        <form action="processSignupStudent.php" method="post" class="d-flex flex-column">
            <div class="h3 text-center text-black">Sign up</div>
            <div class="d-flex align-items-center input-field my-3"> 
              <span class="fas fa-school p-2"></span> 
              <input type="text" placeholder="ID Class" required class="form-control" id="idClass" name="class">  
            </div>
            <small id="classNotification"></small>
            <div class="d-flex align-items-center input-field my-3"> 
              <span class="fa fa-user p-2"></span> 
              <input type="text" placeholder="Username" required class="form-control" id="username" name="name"> 
            </div>
            <small id="userNotification"></small>
            <div class="d-flex align-items-center input-field my-3"> 
              <span class="fa fa-paper-plane p-2"></span> 
              <input type="email" placeholder="Email" required class="form-control" id="email" name="email"> 
            </div>
            <small id="emailNotification"></small>
            <div class="d-flex align-items-center input-field my-3">
                <span class="fas fa-lock p-2"></span> 
                <input type="password" placeholder="Password" required class="form-control" name="pass" id="pwd" onchange='check_pass();'> 
            </div>
            <div class="d-flex align-items-center input-field my-3 ">
                <span class="fas fa-lock p-2"></span> 
                <input type="password" placeholder="Confirm Password" required class="form-control" id="cpwd" name="pass"  onchange='check_pass();'>            
            </div>
            <p id="message"></p>
            <small>
            <?php
                require '../config/session.php';
            ?>
            </small>
            <div class="my-3"> <input type="submit" value="Sign up" class="btn btn-primary" name="btnSignUp" id='Signup' disable> </div>
        </form>
    </div>
</div>
<script>
function check_pass() {
    let message = document.getElementById('message');
    let pass = document.getElementById('pwd');
    let cpass = document.getElementById('cpwd');
    let btnSignUp = document.getElementById('Signup');
    if (pass.value == cpass.value) {
        message.style.color = 'green';
        message.innerHTML = 'Mật khẩu trùng khớp';
        btnSignUp.disabled = false;

    } else {
        message.style.color = 'red';
        message.innerHTML = 'Mật khẩu không trùng khớp';
        btnSignUp.disabled = true;
    }
} 

</script>
</main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>