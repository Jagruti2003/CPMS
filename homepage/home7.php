
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/creative2.css" type="text/css">
  <!-- Footer -->
  <link type="text/css" rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/bootstrap.min0.css" type="text/css"> -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>Placify (CPMS)</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-dark">

    <!-- <nav id="mainNav" class="navbar navbar-default" style="background:black ;">  -->
    <div class="container-fluid">
      <a class="navbar-brand text-white" href="#">
        <img class="d-inline-block align-top" src="images/icon2.png" width="30" height="30" alt="Icon" />
        PLACIFY
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">

          <li class="nav-item">
            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
          </li>

          <li class="nav-item">
            <!-- <a class="nav-link text-white">Announcements</a> -->
            <a class="nav-link text-white" href="../homepage/Placify/sk.php">Announcements</a>
          </li>

          <li class="nav-item">
            <a class="nav-link text-white" href="../homepage/pp/index1.php">Companies</a>
            <!-- <a class="nav-link text-white" aria-disabled="true">Companies</a> -->
          </li>
        </ul>

        <!-- Center-align the search box -->
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <!-- Log in and sign up buttons -->
        <div class="mx-2">
          <div class="btn-group">
            <a class="btn btn-outline-secondary dropdown-toggle text-white" type="button" data-bs-toggle="dropdown" aria-hashpop="true" aria-expanded="false">
              Login
            </a>
            <ul class="dropdown-menu bg-dark">
              <!-- <li><a class="dropdown-item text-white" href="../homepage/jw/login.php">Student</a></li> -->
              <!-- <li><a class="dropdown-item text-white" data-bs-toggle="modal" data-bs-target="#signupModal">Student</a></li> -->
              <li><a class="dropdown-item text-white" href="../SProfile/login/sloginform.php">Student</a></li>
              <!-- <li><a class="dropdown-item text-white" href="#">HOD</a></li> -->
              <li><a class="dropdown-item text-white" href="../SProfile/login/aloginform.php">Administrative</a></li>
            </ul>
          </div>

          <button class="btn btn-outline-secondary text-white" data-bs-toggle="modal" data-bs-target="#signupModal">Sign up</button>

        </div>
      </div>
    </div>
  </nav>


  <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://source.unsplash.com/1400x400/?nature,water" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?nature,tree" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="https://source.unsplash.com/1400x400/?nature,animals" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="signupModalLabel">SIGN UP AS</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <a href="../SProfile/login/register.php"><b>
              <h5>Student</h5>
            </b></a><br>
          
          <a class="dropdown-item text-red" href="../Profilers/SProfile/login/register.php"><b>
              <h5>Administrative</h5>
            </b></a><br>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>

  <!-- Header -->

  <header>
    <div class="header-content">
      <div class="header-content-inner">
        <h1>GUIDING FUTURES, ON CAMPUS</h1>
        <hr>
        <p><b>We are here to Build your Skills and Career with our Driven Passion and Reality.<br>Click Below to Get
            Our Current Drive Details</b></p>
        <p><b></b></p>
        <a href="#" class="btn btn-primary btn-xl page-scroll">Current Drives</a>
      </div>
    </div>
  </header>


  <!-- Cards Section -->
  <div class="container mt-4">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-lg-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x400/?Graphs" class="card-img-top" alt="Computer Science">
          <!-- <img src="https://api.unsplash.com/400x400/?Graphs" class="card-img-top" alt="Computer Science"> -->
          <div class="card-body">
            <h5 class="card-title">Past Placements</h5>
            <p class="card-text">Check placement records of past years and analysis</p>
            <a href="#" class="btn btn-primary">Click here</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-lg-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x400/?Study" class="card-img-top" alt="Business">
          <div class="card-body">
            <h5 class="card-title">Study plan</h5>
            <p class="card-text">Explore career opportunities in the business world</p>
            <a href="../homepage/study/smt.php" class="btn btn-primary">click here</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-lg-4">
        <div class="card mb-4">
          <img src="https://source.unsplash.com/400x400/?contact" class="card-img-top" alt="Engineering">
          <div class="card-body">
            <h5 class="card-title">Contact us</h5>
            <p class="card-text">Discover engineering career paths and placement information</p>
            <a href="jw/about.php" class="btn btn-primary">click here</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of Cards Section -->

  <!-- Footer Section -->
  <div class="footer" style="background:black">
    <div class="container">
      <div class="row">
        <div class="col-6 col-md-2 mb-3 text-white">
          <h5>NAVIGATION</h5>
          <ul class="nav flex-column text-white">
            <li class="nav-item mb-2"><a href="home7.php" class="nav-link p-0 text-white">Home</a></li>
            <li class="nav-item mb-2"><a href="../SProfile/login/sloginform.php" class="nav-link p-0 text-white">Student login</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Administrative login</a></li>
            <li class="nav-item mb-2"><a href="Placify/college.php" class="nav-link p-0 text-white">Guidance</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">FAQs</a></li>
          </ul>
        </div>
        
        <div class="col-6 col-md-2 mb-3 text-white">
          <h5>HELP</h5>
          <ul class="nav flex-column text-white">
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Placement Support</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-white">Faculty Support</a></li>
            <li class="nav-item mb-2"><a href="pp/index1.php" class="nav-link p-0 text-white">Companies</a></li>
            <li class="nav-item mb-2"><a href="study/smt.php" class="nav-link p-0 text-white">Training</a></li>
            <li class="nav-item mb-2"><a href="jw/feedback.php" class="nav-link p-0 text-white">Feedback</a></li>
          </ul>
        </div>
        
        <div class="col-6 col-md-2 mb-3 text-white">
          <h5>Contact us</h5>
          <p>SGGS</p>
          <p>vishnupuri, Nanded, India</p>
          <p>83019-79790/221456</p>
          <a href="mailto:hajareamey07@gmail.com">placify@gmail.com</a>
          
        </div>

        <div class="col-md-5 offset-md-1 mb-3 text-white">
          <form>
            <h5>Subscribe to Pro Placify</h5>
            <p>Get direct contact with Alumini...</p>
            <div class="d-flex flex-column flex-sm-row w-100 gap-2">
              <label for="newsletter1" class="visually-hidden">Email address</label>
              <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
              <button class="btn btn-primary" type="button">Subscribe</button>
            </div>
          </form>
        </div>
      </div>
      
      <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top text-white">
        <p>© 2023 Team Placify, Inc. All rights reserved.</p>
        <ul class="list-unstyled d-flex">
          <li class="ms-3"><a class="link-body-emphasis" href="https://www.linkedin.com/">
            <img src="images/linkedin.png" alt="mdo" width="24" height="24" class="rounded-circle">
          </li>
          <li class="ms-3"><a class="link-body-emphasis" href="https://www.twitter.com/">
            <img src="images/x.png" alt="mdo" width="24" height="24" class="rounded-circle">
          </a></li>
          <li class="ms-3"><a class="link-body-emphasis" href="https://www.facebook.com/">
            <img src="images/facebook.webp" alt="mdo" width="24" height="24" class="rounded-circle">
            </a></li>
          </ul>
        </div>
      </footer>
    </div>
    <!-- End of Footer Section -->
    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  </body>
</html>
  <!-- <div class="container border-top">
        <footer class="py-5" style="background:black">
            <div class="row"> -->