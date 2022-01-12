<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
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
        <a href="../index.php" class="text-decoration-none btnBack ">
            <i class="fas fa-angle-left"></i> 
            <span>Back</span>
        </a>
        <h3 class="mb-5">Choose an account to login</h3>
        <div class="user-options mb-4">
            <a href="./loginTeacher.php" class="btn  btn-choose"> 
                <div class="choose-teacher">
                    <div class="choose-teacher-img">
                        <i class="fas fa-school"></i>
                    </div>
                    <div class="choose-teacher-text">
                        <h5 class="mt-1 mb-2">Log In For An Teacher Account</h5>
                        <p>For teachers, co-teachers, admins, coaches, club advisors, instructional tech.</p>
                    </div>
                </div>    
            </a>
            <a  href="./loginStudent.php" class=" mt-4 btn  btn-choose"> 
                <div class="choose-teacher">
                    <div class="choose-student-img">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <div class="choose-teacher-text">
                        <h5 class="mt-1 mb-2">Log In For An Student Account</h5>
                        <p>For students, class participants, club members, etc ...</p>
                    </div>
                </div>    
            </a>            
        </div>
        <div class="learn-more-inf">
            <span>Not sure which account you need?</span> <a href="" class="text-decoration-none a-text">Learn more</a>
        </div>
        <hr class="bg-light">
        <div class="log-in">
            <span>Don't have an account?</span> <a href="./signup.php" class="text-decoration-none a-text">Sign Up</a>
        </div>
    </div>
</main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>