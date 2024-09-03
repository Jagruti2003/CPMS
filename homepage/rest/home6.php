<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="css/creative0.css" type="text/css">
    <!-- Footer -->
    <link type="text/css" rel="stylesheet" href="css/style.css">
    <title>Placify(cpms)</title>

    <link rel="shortcut icon" href="favicon.ico" type="image/icon">
         <link rel="icon" href="favicon.ico" type="image/icon"> 
         <!-- Bootstrap Core CSS --> 
        <link rel="stylesheet" href="css/bootstrap.min0.css" type="text/css">
        <!-- Custom Fonts --> 
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
         rel='stylesheet' type='text/css'> 
        <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>  
        <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">
        <!-- Plugin CSS -->
        <link rel="stylesheet" href="css/animate.min.css" type="text/css"> 
        

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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


        <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button"
           data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="../Profilers/SProfile/index.php">Student</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a></li>
          </div>
        </li> -->


        <li class="nav-item">
            <a class="nav-link disabled text-white" aria-disabled="true">Companies</a>
        </li>
      </ul>
      
      <!-- Center-align the search box -->
      <form class="d-flex" role="search">
      <!-- <form class="d-flex mx-auto" role="search"> -->
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Go</button>
      </form>

      
      <!-- <div class="mx-2"> -->
        <!-- <button class="btn btn-danger">Login</button> -->
        <!-- <button class="btn btn-danger">Sign up</button> -->

        <div class="btn-group">
          <a class="btn btn-outline-secondary dropdown-toggle text-white" type="button" data-bs-toggle="dropdown"  aria-hashpop="true" aria-expanded="false">
            Login
          </a>
           <ul class="dropdown-menu bg-dark">
             <li><a class="dropdown-item text-white" data-bs-toggle="modal" data-bs-target="#loginModal" href="../Profilers/SProfile/index.php">Student</a></li>
             <li><a class="dropdown-item text-white" href="#">HOD</a></li>
            <!-- <li><hr class="dropdown-divider"></li> -->
            <!-- <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item text-white" href="#">Administrative</a></li>
          </ul>
        </div>

        <div class="btn-group">
          <a class="btn btn-outline-secondary dropdown-toggle text-white" type="button" data-bs-toggle="dropdown"  aria-hashpop="true" aria-expanded="false">
            SIGN UP
          </a>
           <ul class="dropdown-menu bg-dark">
             <li><a class="dropdown-item text-white"  href="#">Student</a></li>
             <li><a class="dropdown-item text-white" href="#">HOD</a></li>
            <li><a class="dropdown-item text-white" href="#">Administrative</a></li>
          </ul>
        </div>
      <!-- </div> -->
    </div>
  </div>
</nav>





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
</header>
              

<div class="footer" style="background: black;">
  <div class="container">
    <div class="row">
      <div class="col-md-3 ftr_navi">
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
      <div class="col-md-3 ftr_navi">
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
          </li>
          <li>
            <a href="#">Training</a>
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
          <div class="col-md-3 ftr-logo">
          <p>Copyright &copy; 2023 | Developed by 
          TEAM-PLACIFY
          </div>
          <div class="clearfix"></div>
    </div>
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
  


    
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  
  </html>
