<?php 
  require 'logincheck.php';

?>
<html>
    <head>
        <title>Edmodo - Home Page</title>
        <link rel="stylesheet" href="../css/admin.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="./js/scripts.js"></script>
    </head>
    
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><img src="../../img/edomoicon.png" alt="" class="img-fluid edmodo-img me-2" ></a>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Admin</a>
        </li>
        
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class = "">
          <a class="nav-link" href = "logout.php">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
       