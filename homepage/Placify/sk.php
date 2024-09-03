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
    <title>Announcement</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <img id="sk" src="SGGSlogo.png" alt="">
            <h1>Shri Guru Gobind Singhji Institute of Engineering and Technology (SGGSIET),Vishnupuri Nanded.</h1>
        </div>
        <table style="width: 50%;">
            <tbody>
                <tr style="height: 10%;">
                    <th>Regarding Ongoing Drive 2023</th>
                </tr>
                <tr>
                    <td>Microsoft in last week of Oct 2023</td>
                </tr>
                <tr>
                    <td>Google in last week of Oct 2023</td>
                </tr>
                <tr>
                    <td>Amazon tentative dates 9 to 14 Oct 2023</td>
                </tr>
                <tr>
                    <td>Flipcart in last week of Oct 2023</td>
                </tr>
                <tr>
                    <td>Endress Hauser in 1st week of Oct 2023</td>
                </tr>
                <tr>
                    <td>Hexaware in 1st week of Oct 2023</td>
                </tr>
                <tr>
                    <td>MyWay in last week of Oct 2023</td>
                </tr>
                <tr style="height: 10%;">
                    <th>Regarding Upcoming Drive 2023</th>
                </tr>
                <tr>
                
                    <td>Adobe in 1st week of Dec 2023</td>
                </tr>
                <tr>
                    <td>Apple in last week of Dec 2023</td>
                </tr>
                <tr>
                    <td>Netflix in 1st week of Jan 2024</td>
                </tr>
                <tr>
                    <td>Facebook in 1st week of Feb 2024</td>
                </tr>
                <tr>
                    <td>Oracle in 1st week of Dec 2024</td>
                </tr>
                <tr>
                    <td>TCS in 1st week of Jan 2024</td>
                </tr>
                <tr>
                    <td>Adani Groups in last week of Dec 2023</td>
                </tr>
                <tr>
                    <td>Planet Spark in last week of Dec 2023</td>
                </tr>
                <tr>
                    <td>Steep Graph in 1st week of Jan 2024</td>
                </tr>
                <tr>
                    <td>Coditas Internship in Dec 2023</td>
                </tr>
                <tr style="height: 10%;">
                    <th><a href="../pp/index1.php">Click here to get information about these comapanies</a></th>
                </tr>
            </tbody>
        </table>
    </div>
</body>
</html>

<style>
    body{
        background-color: #b5d1e3; 
    }

    .container-opacity {
            opacity: 0.3; /* 50% opacity applied to the whole container */
            padding: 20px;
        }

    img{
        width:120px ;
        height: 90px;
        padding:35px ;
    }

    h1{
        color: rgb(27, 3, 3);
        float: right;
        margin-right: 16%;
        margin: -130px 15px;
        padding-top:20px ;
        font-family: serif;
        
    }

    .container table{
        margin: auto;
        border: 3px solid black;
        padding: 10px;
        
    
    }

    tr:hover {
        background-color: rgb(72, 164, 180);
        pointer-events:visible;
        
    }

    tbody{
        height: 500px;
    }

    table,th,td{
        border: 1px solid black;
        text-align: center;
        color:midnightblue;
    }

    table th{
        background-image: linear-gradient(rgb(179, 107, 72), rgb(198, 177, 101), rgb(210, 164, 66));
    }

</style>