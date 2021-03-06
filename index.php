<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
  <link rel="stylesheet" href="./css/main.css">
  <link rel="stylesheet" href="./css/style.css">
  <title>Edmodo</title>
</head>

<body>
  <header class="header-navbar container-fluid fixed-top">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="navbar-contain container-fluid ms-5 me-5 navbar_header">            
            <img src="./img/edomoicon.png" alt="" class="img-fluid edmodo-img me-2" />

            <button class="navbar-toggler btn-show" type="button" data-bs-toggle="collapse"
              data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse sub-menu-header" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0 header_items">
                <li class="nav-item learn-more_dad">
                  <a>
                    Learn more <i class="bi bi-caret-down-fill down-hover"></i> <i class="bi bi-caret-up-fill up-hover"></i>
                  </a>
                  <ul class="learn-more_list">
                    <li>
                      <a class="dropdown-item learn-more_item border-bottom" href="./Edomo_items/learnmore/teachers.php">Teachers</a>
                    </li> 
                    <li>
                      <a class="dropdown-item border-bottom" href="./Edomo_items/learnmore/students.php">Students</a>
                    </li>
                    <a class="dropdown-item border-bottom" href="./Edomo_items/learnmore/sdo.php">Schools, Districts, & Organization</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="./Edomo_items/learnmore/dlt.php">Distance learning toolkit</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Edomo_items/blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="./Edomo_items/support.php">Support</a>
                </li>
                <li class="nav-item">
                  <a href="./Edomo_items/gettingStarted.php" class="nav-link">Getting Started</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="login-btn nav-link" href="./Login-Signup/login.php">Log In</a>
                </li>
                <li class="nav-item-1">
                  <a class="signup-btn nav-link bg-warning" href="./Login-Signup/signup.php">
                    <span>Sign Up</span> 
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <main class="container-fluid main">
    <div class="row checkout-contain">
      <div class="learning_banner">
          <div class="learning_banner-img">
              <img src="./img/phone.jpg" alt="" class="img-fluid img_banner" />
          </div>
          <div class="learing_banner-title">
              <h5 class="banner_title">Check out Edmodo's learning solutions!</h5>
              <p class="banner_text">
              As a response to emerging educational needs, we are continually
              evolving to meet the needs of educators and learners around the
              world.
              </p>
          </div>
          <div class="learing_banner-btn">
              <a href="#"><button type="button" class="btn btn-primary ms-auto"><span>Learn more</span></button></a>
          </div>
      </div>
    </div>

    <div class="container">
      <div class="row signup_section">
        <div class="col-md-6">
          <img src="img/learnbettertogether.webp" alt="" class="img-fluid margin-img">
        </div>
        <div class="col-md-6 margin-title">
          <div class="title">Learn Better Together</div>
          <div>
            <span>Manage your classroom. Engage your students.</span><br>
            <span>Safe. Simple. Free.</span>
          </div>
          <a href="./Login-Signup/signup.php"><button type="button" class="btn btn-warning mt-4 btn_signup">
              <span class="signup_btn">Sign up for a free account</span>
            </button>
          </a>
        </div>
      </div>
    </div>
    <hr>
    <div class="container for_teacher">
      <div class="row">
        <div class="col-md-6 teacher-contain">
          <div class="header mt-5">FOR EDUCATORS</div>
          <div class="subtitle">Tools that teachers need</div>
          <p class="message">Send messages, share class materials, and make learning accessible anywhere. Save yourself
            time by bringing all your classroom tools together.</p><br>
          <a href="#"><span>Show me how</span></a>
        </div>
        <div class="col-md-6">
          <img src="img/Toolsthatteachersneed.webp" alt="" class="img-fluid">
        </div>
      </div>
    </div>
    <hr>
    <div class="container for_student">
      <div class="row">
        <div class="col-md-6 ">
          <img src="img/Aplatformstudentslove.webp" alt="" class="img-fluid margin-img">
        </div>
        <div class="col-md-6 margin-title student-contain">
          <div class="header mt-5">FOR STUDENTS</div>
          <div class="subtitle">A platform students love</div>
          <p class="message">Raise your confidence, find your voice, and experience what it means to be a digital
            citizen. Empower your learning and become part of a vibrant classroom community.</p><br>
          <a href="#"><span>Learn more</span></a>
        </div>
      </div>
    </div>
    <hr>

  </main>
  <footer class="ps-4 mb-3">
    <div class=" container-fluid footer">
      <div class="row">
        <div class="edmodo-footer col-md-12 mb-3">
          <img src="img/edomoicon.png" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col-md-4">
          <p class="footer-lable">
            Edmodo is a global education network that helps connect all
            learners with the people and resources needed to reach their full
            potential.
          </p>
          <div class="col-md-12">
            <p class="footer-lable">Edmodo &copy; 2021</p>
          </div>
          <div class="col-md-12 ">
            <p class="footer-lable-2">
              Edmodo is ultimately owned and controlled by NetDragon Websoft
              Holdings Limited, a public company principally based in Hong Kong
              with operations in China, traded on the Hong Kong Stock Exchange
              (HKSE: 777), and ultimately majority owned by Chinese persons
              located in China
            </p>
          </div>
          <select class="form-select mb-3 w-50" aria-label="Default select example">
            <option selected>
              <i class="bi bi-globe"></i>Language
            </option>
            <option value="1">Vietnamese</option>
            <option value="2">Germany</option>
            <option value="3">English0 (UK)</option>
            <option value="4">English1 (UK)</option>
            <option value="5">English2 (UK)</option>
            <option value="6">English3 (UK)</option>

          </select>
        </div>
        <div class="col-md-2">
          <h6 class="mb-3 lead">Company</h6>
          <ul class="list-inf list-unstyled">
            <li>
              <a href="#!" class="text-decoration-none">About</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">News</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">Careers</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">Privacy</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">Terms of Service</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">Contact Us</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2">
          <h6 class="mb-3 lead ">Learn more</h6>
          <ul class="list-inf list-unstyled">
            <li>
              <a href="./Edomo_items/learnmore/teachers.php" class="text-decoration-none">Teachers</a>
            </li>
            <li>
              <a href="./Edomo_items/learnmore/students.php" class="text-decoration-none">Students</a>
            </li>
            <li>
              <a href="./Edomo_items/learnmore/students.php" class="text-decoration-none">Parents</a>
            </li>
            <li>
              <a href="./Edomo_items/learnmore/sdo.php" class="list-inf_item text-decoration-none">School, Districts, & Organization</a>
            </li>
            <li>
              <a href="./Edomo_items/learnmore/dlt.php" class="list-inf_item text-decoration-none">Distance Learning Toolkit</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2">
          <h6 class="mb-3 lead resource">Resources</h6>
          <ul class="list-inf list-unstyled resource">
            <li>
              <a href="./Edomo_items/blog.php" class="text-decoration-none">Blog</a>
            </li>
            <li>
              <a href="./Edomo_items/support.php" class="text-decoration-none">Support</a>
            </li>
            <li>
              <a href="./Edomo_items/gettingStarted.php" class="text-decoration-none">Getting Started</a>
            </li>
          </ul>
        </div>
        <div class="col-md-2">
          <h6 class="mb-3 lead">Connet</h6>
          <ul class="list-inf list-unstyled">
            <li>
              <a href="#!" class="text-decoration-none">Twittter</a>
            </li>
            <li>
              <a href="#!" class="text-decoration-none">Facebook</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>
