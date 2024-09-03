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
<title>CSE Placement </title>
<link rel="stylesheet" href="styles.css">
<style>
    .section-heading {
      text-align: center;
    }
  </style>

</head>
<body>

  <div class="section">
    <h1 class="section-heading">Study Material</h1>
    <div class="card-wrapper">
    
        <div class="card">
        <img src="LOGO.png" alt="Card Image 2">
        <div class="card-content">
        <h3>SGGS VIDEO LIBRARY</h3>
        <p>Explore Video Lectures for Computer Science and Engineering (CSE)</p>
        <a href="https://www.youtube.com/@sggsvideolibrary95/">Learn More</a>
        </div>
        </div>    

        <div class="card">
            <img src="https://imgs.search.brave.com/dxDGHAMvVmcqWZtRZw9COjYNqa1QozOFs44XZecFOfQ/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9vcGVu/Y2xpbWIuaW8vaW1h/Z2VzL3ByZXZpZXdf/Y3NhdF93aGl0ZS5w/bmc" alt="Card Image 2">
            <div class="card-content">
            <h3> Computer Science Aptitude</h3>
            <p>Explanations are provided for your competitive exams, placement interviews, and entrance tests</p>
            <a href="https://www.indiabix.com/computer-science/questions-and-answers/">Learn More</a>
            </div>
        </div>

    <div class="card">
        <img src="https://img.freepik.com/free-ve
        ctor/interview-concept-illustration_114360-1678.jpg?w=740&t=st=1700722475~exp=1700723075~hmac=31fb6ee923b99fd867d33ed39b15474abdbe0802f5bffd403d1f4561611115fd" alt="Card Image 1">
        <div class="card-content">
        <h3>Preparation Tips</h3>
        <p>Prepare for Placement and ace for it.</p>
        <a href="https://prepinsta.com/how-to-prepare-for-placements-cse/">Learn More</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/7MHeJRRwXpkLkraApeph5FDa8FzTGKx1qy2SKKIaqm4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJjYXZlLmNv/bS93cC93cDkxNjU0/NjUucG5n" alt="Card Image 3">
        <div class="card-content">
        <h3>Data Structures</h3>
        <p>Understand fundamental data structures (arrays, linked lists, trees, graphs, stacks, queues, etc.)</p>
        <a href="https://www.geeksforgeeks.org/introduction-to-data-structures/">Learn More</a>
        </div>
    </div>
    
    <div class="card">
        <img src="https://imgs.search.brave.com/DX_bx4KHzQaCwzSOcYw4ND4lXQgDjnj5v08mwscZw_4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWcu/ZnJlZXBpay5jb20v/ZnJlZS1waG90by9v/bmxpbmUtYnVzaW5l/c3MtZGF0YWJhc2Vf/NTM4NzYtOTU4NzYu/anBnP3NpemU9NjI2/JmV4dD1qcGc" alt="Card Image 2">
        <div class="card-content">
        <h3>Database Management System</h3>
        <p>Explore Database and Database Management.</p>
        <a href="https://www.geeksforgeeks.org/introduction-of-dbms-database-management-system-set-1/">Learn More</a>
        </div>
    </div>
    
    <div class="card">
        <img src="https://imgs.search.brave.com/pd6z6pU_hnKG87m6ih9YPMKlvsu5gI8tCe8e5PMzIUk/rs:fit:500:0:0/g:ce/aHR0cHM6Ly90My5m/dGNkbi5uZXQvanBn/LzAwLzkyLzMyLzQw/LzM2MF9GXzkyMzI0/MDA1X2hUVHVRYTJl/NWVERjJPRHlJQ1hE/OHFaS1ZFN2RNZXN0/LmpwZw" alt="Card Image 2">
        <div class="card-content">
        <h3>Operating System</h3>
        <p>Get help understanding operating systems</p>
        <a href="https://www.g2.com/articles/operating-system">Learn More</a>
        </div>
        </div>    

    <div class="card">
        <img src="https://img.freepik.com/free-vector/data-analysis-isometric-infographics-layout_1284-25277.jpg?w=740&t=st=1700831472~exp=1700832072~hmac=64e7e3cf6721d5f602fc5f030a871c3edd0491aa585dc237cc136fa8a7277007" alt="Card Image 1">
        <div class="card-content">
        <h3>Computer Networks</h3>
        <p>Understanding of network protocols, OSI model, TCP/IP through Video Lectures</p>
        <a href="https://www.youtube.com/watch?v=VwN91x5i25g&list=PLBlnK6fEyqRgMCUAG0XRw78UA8qnv6jEx&index=1">Learn More</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/K7ilXP0U2q3zciRdASpc8cZZ_ze1Ug_-N8CcrEc_HCI/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9zdGF0/aWMuamF2YXRwb2lu/dC5jb20vY29yZS9p/bWFnZXMvd2hhdC1p/cy1vYmplY3Qtb3Jp/ZW50ZWQtcHJvZ3Jh/bW1pbmcucG5n" alt="Card Image 3">
        <div class="card-content">
        <h3>Object Oriented Programming </h3>
        <p>Strong grasp of OOP concepts </p>
        <a href="https://www.educative.io/blog/object-oriented-programming">Learn More</a>
        </div>
    </div>
    </div>
  </div>


  <div class="section">
    <h1 class="section-heading">Training & Internships</h1>
    <div class="card-wrapper">
    <div class="card">
        <img src="https://imgs.search.brave.com/vEvuTP37ru8J1U7J-0ZMEx6Kj2jBelFi5iXcRTtHp4o/rs:fit:500:0:0/g:ce/aHR0cHM6Ly8xMDAw/bG9nb3MubmV0L3dw/LWNvbnRlbnQvdXBs/b2Fkcy8yMDE2LzEx/L2dvb2dsZV9sb2dv/LTY2N3g0MDAucG5n" alt="Card Image 1">
        <div class="card-content">
        <h3>Google Careers</h3>
        <a href="https://www.google.com/about/careers/applications/jobs/results/?category=DATA_CENTER_OPERATIONS&category=DEVELOPER_RELATIONS&category=HARDWARE_ENGINEERING&category=INFORMATION_TECHNOLOGY&category=MANUFACTURING_SUPPLY_CHAIN&category=NETWORK_ENGINEERING&category=PRODUCT_MANAGEMENT&category=PROGRAM_MANAGEMENT&category=SOFTWARE_ENGINEERING&category=TECHNICAL_INFRASTRUCTURE_ENGINEERING&category=TECHNICAL_SOLUTIONS&category=TECHNICAL_WRITING&category=USER_EXPERIENCE&employment_type=FULL_TIME&employment_type=PART_TIME&employment_type=TEMPORARY&jex=ENTRY_LEVEL">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/5GyMJ85_OsZqmdZKX14vxw95ZpsQ8Oems65ZLVQACSU/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9tZWRp/YS5nZXR0eWltYWdl/cy5jb20vaWQvMTI1/ODkxODUwNS9waG90/by9taWNyb3NvZnQt/bG9nby1pcy1zZWVu/LWluLW1vbnRyZWFs/LWNhbmFkYS1vbi1q/dW5lLTEzLTIwMjMu/anBnP3M9NjEyeDYx/MiZ3PTAmaz0yMCZj/PVZFUC1yNGVwZUZh/WnpmRXQ1bWJkV0hV/RndONWpRSlBKN1B5/TXU5NEVocFE9" alt="Card Image 2">
        <div class="card-content">
        <h3>Microsoft Careers </h3>
        <a href="https://jobs.careers.microsoft.com/global/en/job/1577325/Software-Engineering---Internship-Opportunities">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/Iec_uHLUYWBTgtsQWmSwpafGgWPfxo-tuom9lHbFor0/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/bG9nb2pveS5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMjMw/NjI5MTMyNDQyL0Ft/YXpvbi1sb2dvLTEw/MjR4NjkwLmpwZw" alt="Card Image 2">
        <div class="card-content">
        <h3>Amazon Jobs</h3>
        <a href="https://www.amazon.jobs/en/job_categories/software-development">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/G85EgK0djhcNbIpKz8wqqq-eYMAOqMMS0wIo5TRXsVE/rs:fit:860:0:0/g:ce/aHR0cHM6Ly9hc3Nl/dHMuc3RpY2twbmcu/Y29tL2ltYWdlcy82/MTA2NzMzNTJjZWQ0/ZDAwMDRlYWQ0ZTUu/cG5n" alt="Card Image 2">
        <div class="card-content">
        <h3>Flipkart Careers</h3>
        <a href="https://www.flipkartcareers.com/#!/joblist">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/Dk_wUiQDZ08JGKDacTXzH8Y_Ee7--0RGXAuOmheHCHY/rs:fit:860:0:0/g:ce/aHR0cHM6Ly93YWxs/cGFwZXJhY2Nlc3Mu/Y29tL2Z1bGwvNjA3/NTczMi5qcGc" alt="Card Image 2">
        <div class="card-content">
        <h3>Netflix Jobs</h3>
        <a href="https://jobs.netflix.com/jobs/198642264.">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/e8QQXbn-rpqbwKEZ9BIuBMGx450KHgNTZpbIF39w-ag/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9jZG4u/bG9nb2pveS5jb20v/d3AtY29udGVudC91/cGxvYWRzLzIwMjMw/NTA5MTE0NzU2L2Fw/cGxlLWxvZ28tZnV0/dXJlLTYwMHg0MDAu/anBn" alt="Card Image 2">
        <div class="card-content">
        <h3>Apple Jobs</h3>
        <a href="https://www.apple.com/careers/us/software-and-services.html">Apply Here</a>
        </div>
    </div>

    <div class="card">
        <img src="https://imgs.search.brave.com/ptrunLy0KB-SkbEFiVnDtXbHhxtcESxnYdEJ_TiIe_4/rs:fit:500:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMueW91cnN0b3J5/LmNvbS9jcy9pbWFn/ZXMvY29tcGFuaWVz/L1VudGl0bGVkZGVz/aWduMTktMTY1ODMx/MzQ0NzAwNy5wbmc_/Zm09YXV0byZhcj0x/OjEmbW9kZT1maWxs/JmZpbGw9c29saWQm/ZmlsbC1jb2xvcj1m/ZmY" alt="Card Image 3">
        <div class="card-content">
        <h3>UNSTOP</h3>
        <a href="https://unstop.com/all-opportunities">Apply Here</a>
        </div>
    </div>
  </div> 


</body>
</html>