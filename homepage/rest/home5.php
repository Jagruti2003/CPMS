<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/creative0.css" type="text/css">
    <!-- Footer -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min0.css" type="text/css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Placify(cpms)</title>
  </head>



  <body>
    <h1></h1>
<nav class="navbar navbar-expand-lg bg-dark">
<!-- <nav id="mainNav" class="navbar navbar-default" style="background:black ;">  -->
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="#">
      <img 
      class="d-inline-block align-top"
      src="images/icon2.png"
      width="30" height="30" alt="Icon"/>
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
          <a class="nav-link text-white" href="#">Announcements</a>
        </li>

        <li class="nav-item">
            <a class="nav-link disabled text-white" aria-disabled="true">Companies</a>
        </li>
      </ul>
      
      <!-- Center-align the search box -->
      <form class="d-flex" role="search">
      <!-- <form class="d-flex mx-auto" role="search"> -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

      <!-- log in and sign up buttons -->
      <div class="mx-2">
        <div class="btn-group">
          <a class="btn btn-outline-secondary dropdown-toggle text-white" type="button" data-bs-toggle="dropdown"  aria-hashpop="true" aria-expanded="false">
            Login
          </a>
           <ul class="dropdown-menu bg-dark">
             <li><a class="dropdown-item text-white" href="../Profilers/SProfile/index.php">Student</a></li>
             <li><a class="dropdown-item text-white" href="#">HOD</a></li>
            <li><a class="dropdown-item text-white" href="#">Administrative</a></li>
          </ul>
        </div>

         <a class="btn btn-outline-secondary text-white" data-bs-toggle="modal" data-bs-target="#signupModal" >Sign up</a>

     </div>
    </div>
  </div>
</nav>

<!-- <div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/1400x400/?nature,water" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1400x400/?nature,tree" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/1400x400/?nature,school" class="d-block w-100" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div> -->


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
        <a href="../Profilers/SProfile/register.php"><b><h5>Student</h5></b></a><br>
        <a class="dropdown-item text-white" href="#">HOD</a><br>
        <a class="dropdown-item text-white" href="#">Administrative</a><br>
            
            
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
      <h1>PLACIFY</h1>
      <hr>
      <p>We are here to Build your Skills and Career with our Driven Passion and Reality.</br>Click Below to Get Our Current Drive
      Details</p>
      <a href="../Drives/index.php" class="btn btn-primary btn-xl page-scroll">Current Drives</a>
    </div>
  </div>
  <div class="card" style="width: 18rem;">
    <img src="https://source.unsplash.com/400x400/?nature,laptop" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Computer Science</h5>
      <p class="card-text">Check placement records of past years and analysis</p>
      <a href="#" class="btn btn-primary">Check..</a>
    </div>
  </div>
</header>


<!-- <header>
  <div class="header-content">
    <div class="header-content-inner">
      <h1>PLACIFY</h1>
      <hr>
      <p>We are here to Build your Skills and Career with our Driven Passion and Reality.</br>Click Below to Get Our Current Drive Details</p>
      <a href="../Drives/index.php" class="btn btn-primary btn-xl page-scroll">Current Drives</a>

       Progress Bar Section -->
      <!-- <div class="progress-stacked">
        <div class="progress" role="progressbar" aria-label="Segment one" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%">
          <div class="progress-bar"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment two" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%">
          <div class="progress-bar bg-success"></div>
        </div>
        <div class="progress" role="progressbar" aria-label="Segment three" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
          <div class="progress-bar bg-info"></div>
        </div>
      </div> -->
      <!-- End of Progress Bar Section -->

    <!-- </div>
  </div>
</header> -->



              
<!-- footer    ---------------------- -->

              <!-- <div class="footer" style="background:black">
                <div class="container">
                  <div class="col-md-3 ftr_navi ftr" >
                    <h3>NAVIGATION</h3>
                    <ul>
                      <li>
                        <a href="../Homepage/index.php">Home</a>
                      </li>
                      <li>
                        <a href="../Profilers/SProfile/index.php">Student Login</a>
                      </li>
                      <li>
                        <a href="../Profilers/PProfile/index.php">Placement Login</a>
                      </li>
                      <li>
                        <a href="../Profilers/HODProfile/index.php">HOD Login</a>
                      </li>
                      <li>
                        <a href="../Profilers/Priprofile/index.php">Administrative Login</a>
                      </li>
                    </ul>
                  </div>
                  <div class="col-md-3 ftr_navi ftr">
                    <h3>MEMBERS</h3>
                    <ul>
                      <li>
                        <a href="#">Customer Support</a>
                      </li>
                      <li>
                        <a href="#">Placement Support</a>
                      </li>
                      <li>
                        <a href="#">Faculty Support</a>
                      </li>
                      <li>
                        <a href="#">Registered Companies</a>
                      </li> -->



<div class="footer" style="background: black;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 ftr_navi">
        <h3>NAVIGATION</h3>
        <ul>
          <li>
            <a href="../homepage/index.php"><h5>Home</h5></a>
          </li>
          <li>
            <a href="../Profilers/SProfile/index.php"><h5>Student Login</h5></a>
          </li>
          <li>
            <a href="../Profilers/PProfile/index.php"><h5>Placement Login</h5></a>
          </li>
          <li>
            <a href="../Profilers/HODProfile/index.php"><h5>HOD Login</h5></a>
          </li>
          <li>
            <a href="../Profilers/Priprofile/index.php"><h5>Administrative Login</h5></a>
          </li>
        </ul>
      </div>
      <div class="col-md-3 ftr_navi">
        <h3>MEMBERS</h3>
        <ul>
          <li>
            <a href="#"><h5>Customer Support</h5></a>
          </li>
          <li>
            <a href="#"><h5>Placement Support</h5></a>
          </li>
          <li>
            <a href="#"><h5>Faculty Support</h5></a>
          </li>
          <li>
            <a href="#"><h5>Registered Companies</h5></a>
          </li>
          <li>
            <a href="#"><h5>Training</h5></a>
          </li>
        </ul>
          </div>
          <div class="col-md-3 get_in_touch ftr">
          <h3>GET IN TOUCH</h3>
          <p>SGGS</p>
          <p>vishnupuri, nanded, India</p>
          <p>83019-79790/221456</p>
          <a href="mailto:hajareamey07@gmail.com">hajareamey07@gmail.com</a>
          </div>
          <div class="col-md-3 ftr-logo text-white">
          <p>Copyright &copy; 2023 | Developed by 
          TEAM-PLACIFY
          </div>
          <div class="clearfix"></div>
          </div>
          </div>
        </ul>
      </div>
      <!-- <div class="col-md-3 get_in_touch">
        <h3>GET IN TOUCH</h3>
        <p>SGGS</p>
        <p>Vishnupuri, Nanded, India</p>
        <p>83019-79790/221456</p>
        <a href="mailto:hajareamey07@gmail.com">hajareamey07@gmail.com</a>
      </div>
       <div class="col-md-3 ftr-logo">
        <p>Copyright &copy; 2023 | Developed by TEAM-PLACIFY</p>
      </div> -->
    </div>
  </div>
</div>


    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  
  </html>
