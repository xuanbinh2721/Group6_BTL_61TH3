<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../../css/main.css">
  <link rel="stylesheet" href="../../css/teachers.css" />
  <title>Teachers</title>
</head>

<body>
  <header class="header-navbar container-fluid fixed-top">
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg navbar-light ">
          <div class="navbar-contain container-fluid ms-5 me-5 navbar_header">
            <a href="../../index.php">
              <img src="../../img/edomoicon.png" alt="" class="img-fluid edmodo-img me-2" >
            </a>

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
                      <a class="dropdown-item learn-more_item border-bottom" href="./teachers.php">Teachers</a>
                    </li> 
                    <li>
                      <a class="dropdown-item border-bottom" href="./students.php">Students</a>
                    </li>
                    <a class="dropdown-item border-bottom" href="./sdo.php">Schools, Districts, & Organization</a>
                    </li>
                    <li>
                      <a class="dropdown-item" href="./dlt.php">Distance learning toolkit</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../blog.php">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="../support.php">Support</a>
                </li>
                <li class="nav-item">
                  <a href="../gettingStarted.php" class="nav-link">Getting Started</a>
                </li>
              </ul>
              <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                  <a class="login-btn nav-link" href="../../Login-Signup/login.php">Log In</a>
                </li>
                <li class="nav-item-1">
                  <a class="signup-btn nav-link bg-warning" href = "../../Login-Signup/signup.php">
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
  <main class="container-fluid">
    <div class="row">
      <div class="col-md-6">
          <img src="../../img/learnmore-1-1.png" alt="" class ="img-fluid pt-5 ps-4 learnmore-1-1">
      </div>

      <div class="col-md-6 intro ">
          <h3>All your tools in one place</h3>
          <p class = " pe-5">Simplify communication and improve student engagement in your classroom and beyond.</p>
          <button class = "btn-create-account-teacher bg-warning btn-create">Create a Teacher Account</button>
          <button class = "btn-contact-us bg-warning btn-contact">Contact Us</button>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 intro_1">
        <h3>Conversations that change lives</h3>
        <p>Everyone remembers the teacher who made a difference in their life. With communication tools like Posts and Messages, Edmodo helps you be that teacher for your students.</p>
        <span>Get started for free</span>
      </div>

      <div class="col-md-6">
        <img src="../../img/learnmore-1-2.png" alt="" class = "img-fluid pt-5 ps-4 learnmore-1-2">
      </div>
    </div>

    <div class="row">
      <div class="col-md-6">
      <img src="../../img/learnmore-1-3.png" alt="" class = "img-fluid pt-5 ps-4 learnmore-1-3">
    </div>

    <div class="col-md-6 intro_2">
      <h3>Lessons for 21st-century students</h3>
      <p>It feels like magic when a lesson captivates students and improves their understanding. With Edmodo, it’s easy to share digital assignments, create quizzes, or bring your favorite tools onboard.</p>
      <span>Get started for free</span>
    </div>

    <div class="row">
      <div class="col-md-6 intro_3">
        <h3>Resources by teachers, for teachers</h3>
        <p>No teacher is an island—find a community of peers that will support you when you need it most. Get inspired for your next lesson by exploring Discover, browsing Spotlight, or following hashtags on Edmodo.</p>
        <span>Get started for free</span> 
      </div>
      <div class="col-md-6">
        <img src="../../img/learnmore-1-4.png" alt="" class ="img-fluid learnmore-1-4">
      </div>
    </div>

    <div class=" submit bg-light formsubmit">
      <h3>Stay in Touch!</h3>
      <p>Sign up to receive the latest Edmodo news and community insights.</p>
      <form>
        <div class="row">
          <div class="col-md-4">
            <label for="validationDefault01">First name*</label>
            <input type="text" class="form-control p-3 mb-3" id="validationDefault01" placeholder="" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefault02">Last name*</label>
            <input type="text" class="form-control p-3" id="validationDefault02" placeholder="" value="" required>
          </div>
          <div class="col-md-4">
            <label for="validationDefaultUsername">Email*</label>
            <div class="input-group">
              <input type="text" class="form-control p-3" id="validationDefaultUsername" placeholder="" aria-describedby="inputGroupPrepend2" required>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 mb-3">            
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Phone Number</label>
            <select class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
              <option selected></option>
              <option value="1">China</option>
              <option value="2">England</option>
              <option value="3">Germany</option>
              <option value="3">Vietnam</option>
            </select>
            <span class=" mb-3 input-group">
              <input type="text" class="form-control p-3 " id="validationDefaultUsername" placeholder="+84" aria-describedby="inputGroupPrepend2" required>
            </span>            
          </div>
        </div>
      </form>

      <form class="form-inline">
        <div class="col-md-12 mb-3">
          <label for="validationDefault02">Additional Comments</label>
          <p>Please tell us any addition information about you to help us provide better assistace.</p>
          <input type="text" class="form-control p-5" id="validationDefault02" placeholder="" value="" required>
        </div>
        <div class="custom-control custom-checkbox my-1 mr-sm-2">
          <lable>Edmodo is committed to protecting and respecting your privacy, and we’ll only use your personal information to administer your account and to provide the products and services you requested from us. From time to time, we would like to contact you about our products and services, as well as other content that may be of interest to you. If you consent to us contacting you for this purpose, please tick below to say how you would like us to contact you:</lable>
          <br><br><input type="checkbox" class="custom-control-input" id="customControlInline">
          <label class="custom-control-label" for="customControlInline">I agree to receive other communications from Edmodo.</label>
          <br><br><lable>You can unsubscribe from these communications at any time. For more information on how to unsubscribe, our privacy practices, and how we are committed to protecting and respecting your privacy, please review our Privacy Policy.</lable>
          <br><br><lable>By clicking submit below, you consent to allow Edmodo to store and process the personal information submitted above to provide you the content requested.</lable>
        </div>
        <button type="submit" class="btn bg-warning ps-5 pe-5 pt-3 pb-3 mt-3">Submit</button>            
      </form>
    </div>
      <a href="#" id="scrollTop" style = "width: 3.5% !important"><i class="bi bi-caret-up-fill "></i></a> 
  </main>
  <hr>
  <script>
  window.onscroll = function() {scrollFunction()};
    scrollFunction = () => {
        if(document.body.scrollTop > 40 || document.documentElement.scrollTop > 40) {
            document.querySelector('#scrollTop').style.bottom = '0';
        } else document.querySelector('#scrollTop').style.bottom = '-56px';
    }
  </script> 
  <footer class="ps-4 mb-3">
    <div class=" container-fluid footer">
      <div class="row">
        <div class="edmodo-footer col-md-12 mb-3">
          <img src="../../img/edomoicon.png" alt="" />
        </div>
      </div>

      <div class="row">
        <div class="col-sm-4">
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
          <select class="form-select" aria-label="Default select example">
            <option selected>
              <i class="bi bi-globe"></i>Language
            </option>
            <option value="1">Vietnamese</option>
            <option value="2">Germany</option>
            <option value="3">English0 (UK)</option>
            <option value="3">English1 (UK)</option>
            <option value="3">English2 (UK)</option>
            <option value="3">English3 (UK)</option>
          </select>
        </div>

        <div class="col-sm-2">
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
        <div class="col-sm-2">
          <h6 class="mb-3 lead">Learn more</h6>
          <ul class="list-inf list-unstyled">
            <li>
              <a href="./teachers.php" class="text-decoration-none">Teachers</a>
            </li>
            <li>
              <a href="./students.php" class="text-decoration-none">Students</a>
            </li>
            <li>
              <a href="#" class="text-decoration-none">Parents</a>
            </li>
            <li>
              <a href="./sdo.php" class="list-inf_item text-decoration-none">School, Districts, & Organization</a>
            </li>
            <li>
              <a href="./dlt.php" class="text-decoration-none">Distance Learning Toolkit</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
          <h6 class="ps-2 mb-3 lead">Resources</h6>
          <ul class="ps-2 list-inf list-unstyled">
            <li>
              <a href="../blog.php" class="text-decoration-none">Blog</a>
            </li>
            <li>
              <a href="../support.php" class="text-decoration-none">Support</a>
            </li>
            <li>
              <a href="../gettingStarted.php" class="text-decoration-none">Getting Started</a>
            </li>
          </ul>
        </div>
        <div class="col-sm-2">
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
  <script src="./js/main.js"></script>
</body>

</html>