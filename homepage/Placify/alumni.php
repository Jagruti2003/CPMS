<?php
  session_start();
  if($_SESSION["username"]){
  }
   else {
	   header("location: ../../SProfile/login/sloginform.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumni Support</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #b5d1e3;
        }

        header {
            background-color: #437784;
            color: #fff;
            padding: 1em;
            text-align: center;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 15px;
            padding: 15px;
            border-radius: 8px;
            transition: box-shadow 0.3s ease-in-out;
        }

        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card img {
            max-width: 100%;
            border-radius: 8px;
        }

        .card h2 {
            margin-bottom: 10px;
        }

        .card p {
            color: #555;
        }
    </style>
</head>

<body>
    <header>
        <h1>Alumnies who are working in top MNC's</h1>
    </header>

    <div class="container">
        <div class="card">
            
            <h2>Prajakta Tamte</h2>
            <p>Amazon</p>
            <p>Connect on LinkedIn: <a href="https://www.linkedin.com/in/prajakta-tamte-5b8379182" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
           
            <h2>Pooja Yadav</h2>
            <p>Amazon</p>
            <p>Connect on LinkedIn: <a href="linkedin.com/in/pooja-yadav-9a5939169" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
            
            <h2>Swaroopa Joshi</h2>
            <p>Amazon</p>
            <p>Connect on LinkedIn: <a href="linkedin.com/in/swaroopa-joshi-7b5a2012a" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
          
            <h2>Bhagyashree Gandhewar</h2>
            <p>IBM</p>
            <p>Connect on LinkedIn: <a href="https://www.linkedin.com/in/bhagyashree-gandhewar-735292115/" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
           
            <h2>SAWRABH PATHAK</h2>
            <p>IBM</p>
            <p>Connect on LinkedIn: <a href="linkedin.com/in/sawrabh-pathak-513534103" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
           
            <h2>Ajay Panchal</h2>
            <p>Apple</p>
            <p>Connect on LinkedIn: <a href="https://www.linkedin.com/in/ajay-panchal-224592/" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">
           
            <h2>Vaikhari Bongulwar</h2>
            <p>Adobe</p>
            <p>Connect on LinkedIn: <a href="https://www.linkedin.com/in/vaikhari3/" target="_blank">LinkedIn Profile</a></p>
        </div>

        <div class="card">

            <h2>Surya Sable</h2>
            <p>Intel</p>
            <p>Connect on LinkedIn: <a href="https://www.linkedin.com/in/surya-sable-68994b208/" target="_blank">LinkedIn Profile</a></p>
        </div>


    </div>
</body>

</html>