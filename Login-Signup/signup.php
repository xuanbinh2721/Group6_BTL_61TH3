<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link rel="stylesheet" href="../css/signup.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./js/scripts.js"></script>
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
<main class="container-fluid signupOption">
    <div class="page-content ">
        <button type="button" href="../index.php" class="btn btn-link text-decoration-none text-black btnBack">
            <span>
                <i class="fas fa-angle-left"></i>
            </span>
            <span>Back</span>
        </button>
        <h3 class="pt-3 mb-4">Choose an account</h3>
        <div class="user-options">
            <button class="big-button-text-image mb-4" href="./signupTeacher.php">
                <a href="./signupTeacher.php" class="text-decoration-none text-black">
                    <div class="row">
                        <div class="col-2 option-icon">
                            <i class="fas fa-school"></i>
                        </div>
                        <div class="col-10 option-decription">
                            <div class="title">
                                Teacher Account
                            </div>
                            <div class="decription">
                                For teachers, co-teachers, admins, coaches, club advisors, instructional tech
                            </div>
                        </div>
                    </div>
                </a>
            </button>
            <button class="big-button-text-image " href="./signupStudent.php">
                <a href="./signupStudent.php" class="text-decoration-none text-black    ">
                    <div class="row">
                        <div class="col-2 option-icon">
                            <i class="fas fa-user-graduate"></i>
                        </div>
                        <div class="col-10 option-decription">
                            <div class="title">
                                    Student Account
                            </div>
                            <div class="decription">
                                For students, class participants, club members, etc
                            </div>
                        </div>
                    </div>
                </a>
            </button>
        </div>
    </div>
</main>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>