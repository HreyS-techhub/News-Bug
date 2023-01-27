<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Bug</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="state.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <a class="navbar-brand" href="#"><img src="./images/Logo.JPG" class="rounded" alt="logo" width="100" height="50"></a>
            <h5 id="time" class="mt-2 bg-dark rounded text-light"></h5>
                  
            <script>
                var datetime = new Date().toDateString();
                document.getElementById("time").textContent = datetime;
            </script>

            <form class="d-flex ms-3 mt-2 mb-2" autocomplete="off" action="/action_page.php">
              <div class="autocomplete">
                <input class="form-control" id = "myInput" type="search" name="myState" placeholder="Search State" aria-label="Search" size="30">
              </div>
              <button class="btn btn-outline-dark ms-3" type="submit">Search</button>
            </form>    
            
            <script>
                var states = ["Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", "Uttarakhand", "Uttar Pradesh", "West Bengal"];
                autocomplete(document.getElementById("myInput"), states);
            </script>   
            </div>
          </div>

          <a href="https://instagram.com/hreys_techhub?igshid=OGQ2MjdiOTE="><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-instagram"></i></button></a>
          <a href="https://www.facebook.com/HreysTechHub?mibextid=ZbWKwL"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-facebook"></i></button></a>
          <a href="https://youtube.com/"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-youtube"></i></button></a>
          <a href="https://www.linkedin.com"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-linkedin"></i></button></a>
          <a href="https://www.github.com"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-github"></i></button></a>

      </nav>

      <div class="popup">
        <button id="close">&times;</button>
        <h1 class="text-center"><strong>SIGN IN</strong></h1>
        <form method="post" action="userCheck.php">
          
          <div class="d-flex flex-row align-items-center justify-content-center">
            <button type="button" class="btn btn-primary btn-floating mx-1"><i class="fa fa-google"></i></button>
            <button type="button" class="btn btn-primary btn-floating mx-1"><i class="fa fa-facebook"></i></button>
            <button type="button" class="btn btn-primary btn-floating mx-1"><i class="fa fa-twitter"></i></button>
            <button type="button" class="btn btn-primary btn-floating mx-1"><i class="fa fa-linkedin"></i></button>
            <button type="button" class="btn btn-primary btn-floating mx-1"><i class="fa fa-github"></i></button>
          </div><hr>

            <input class="form-control mb-3" type="email" name="username" placeholder="Email Address" aria-label="Email">
            <input class="form-control" type="password" name="password" placeholder="Password" aria-label="Password">
            <input class="btn btn-danger w-100" name="submit" type="submit" value="Sign In">
        
          </form>
        </div>      
        
        <script src="script.js"></script>

        <div class="input-group justify-content-center mt-4">

        <button type="button" class="btn btn-outline-dark btn-lg dropdown-toggle" data-bs-toggle="dropdown">Categories</button>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#entertainment">Entertainment</a></li>
          <li><a class="dropdown-item" href="#sports">Sports</a></li>
          <li><a class="dropdown-item" href="#politics">Politics</a></li>
          <li><a class="dropdown-item" href="#education">Education</a></li>
          <li><a class="dropdown-item" href="#business">Business</a></li>
        </ul>
        <span class="input-group-text"><h2>REACHING OUT WITH NEW PERSPECTIVE!</h2></span>

        </div>

        <img src="./images/Home page.JPG" alt="Home Page image" class="img-thumbnail mt-4 mx-auto d-block"><br>
        <h1 class="text-center">GENUINE JOURNALISM IS INTENSE LIKE WE DO</h1><br><br>

        <div class="content">

        <div id="entertainment" class="section">

            <img src="./images/Entertainment.JPG" alt="Entertainment Image" class="rounded ms-5 float-start" width="180px" height="180px">
            <span class="badge bg-dark ms-5 mt-4"><h2>E &nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp T &nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp R &nbsp&nbsp&nbsp&nbsp&nbsp T &nbsp&nbsp&nbsp&nbsp&nbsp A &nbsp&nbsp&nbsp&nbsp&nbsp I &nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp M &nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp T</h2></span>
            <br>
            <span class="badge bg-light text-danger ms-5 mt-4"><h3># Lifestyle </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Musics </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Cinemas </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Celebrity Weddings </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Television </h3></span>

            <?php
              $db = mysqli_connect("localhost", "root", "", "news-website");
              $query = "SELECT * FROM entertainment ORDER BY id DESC LIMIT 3";
	            $result = mysqli_query($db, $query);
              $i = 0;
              if(mysqli_num_rows($result)>0){
                while ($data = mysqli_fetch_assoc($result)) {
                  $finalarray[$i] = $data['file_name'];
                  $i += 1;
                }
              }
            ?>
        
          <div id="carouselExampleIndicators1" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./entertainment/<?php echo $finalarray[0]; ?>">
              </div>
  
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./entertainment/<?php echo $finalarray[1]; ?>">
              </div>
    
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./entertainment/<?php echo $finalarray[2]; ?>">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators1" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
          
      </div><br><br><br><br>

      <div id="sports" class="section">
            
          <img src="./images/Sports.JPG" alt="Sports Image" class="rounded ms-5 float-start" width="180px" height="180px">
            <span class="badge bg-dark ms-5 mt-4"><h2>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp P &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp O &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp R &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp T &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp W &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp&nbsp&nbsp&nbsp&nbsp</h2></span>
            <br>
            <span class="badge bg-light text-danger ms-5 mt-4"><h3># Cricket </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Football </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Badminton </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># IPL </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Test Match </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># World Cup </h3></span>
            <br>

            <?php
              $db = mysqli_connect("localhost", "root", "", "news-website");
              $query = "SELECT * FROM sports ORDER BY id DESC LIMIT 3";
	            $result = mysqli_query($db, $query);
              $i = 0;
              if(mysqli_num_rows($result)>0){
                while ($data = mysqli_fetch_assoc($result)) {
                  $finalarray[$i] = $data['file_name'];
                  $i += 1;
                }
              }
            ?>

          <div id="carouselExampleIndicators2" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./sports/<?php echo $finalarray[0]; ?>">
              </div>
  
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./sports/<?php echo $finalarray[1]; ?>">
              </div>
    
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./sports/<?php echo $finalarray[2]; ?>">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators2" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div><br><br><br><br>

      <div id="politics" class="section">
          <img src="./images/Politics.JPG" alt="Politics Image" class="rounded ms-5 float-start" width="180px" height="180px">
            
            <span class="badge bg-dark ms-5 mt-4"><h2>&nbsp P &nbsp&nbsp&nbsp&nbsp&nbsp O &nbsp&nbsp&nbsp&nbsp&nbsp L &nbsp&nbsp&nbsp&nbsp&nbsp I &nbsp&nbsp&nbsp&nbsp&nbsp T &nbsp&nbsp&nbsp&nbsp&nbsp I &nbsp&nbsp&nbsp&nbsp&nbsp C &nbsp&nbsp&nbsp&nbsp&nbsp A &nbsp&nbsp&nbsp&nbsp&nbsp L &nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp W &nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp</h2></span>
              <br>
              <span class="badge bg-light text-danger ms-5 mt-4"><h3># Freedom </h3></span>
              <span class="badge bg-light text-danger ms-4 mt-4"><h3># Government </h3></span>
              <span class="badge bg-light text-danger ms-4 mt-4"><h3># Elections </h3></span>
              <span class="badge bg-light text-danger ms-4 mt-4"><h3># Campaigns </h3></span>
              <span class="badge bg-light text-danger ms-4 mt-4"><h3># Power </h3></span>
              <span class="badge bg-light text-danger ms-4 mt-4"><h3># Riots </h3></span>
              <br>
              
            <?php
              $db = mysqli_connect("localhost", "root", "", "news-website");
              $query = "SELECT * FROM politics ORDER BY id DESC LIMIT 3";
	            $result = mysqli_query($db, $query);
              $i = 0;
              if(mysqli_num_rows($result)>0){
                while ($data = mysqli_fetch_assoc($result)) {
                  $finalarray[$i] = $data['file_name'];
                  $i += 1;
                }
              }
            ?>

             <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./politics/<?php echo $finalarray[0]; ?>">
              </div>
  
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./politics/<?php echo $finalarray[1]; ?>">
              </div>
    
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./politics/<?php echo $finalarray[2]; ?>">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div><br><br><br><br>

    <div id="education" class="section">
          <img src="./images/Education.JPG" alt="Education Image" class="rounded ms-5 float-start" width="180px" height="180px">
            
          <span class="badge bg-dark ms-5 mt-4"><h2>E &nbsp&nbsp&nbsp&nbsp D &nbsp&nbsp&nbsp&nbsp U &nbsp&nbsp&nbsp&nbsp C &nbsp&nbsp&nbsp&nbsp A &nbsp&nbsp&nbsp&nbsp T &nbsp&nbsp&nbsp&nbsp I &nbsp&nbsp&nbsp&nbsp O &nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp A &nbsp&nbsp&nbsp&nbsp L &nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp W &nbsp&nbsp&nbsp S</h2></span>
            <br>
            <span class="badge bg-light text-danger ms-5 mt-4"><h3># CBSE Results </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Universities </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># IIT </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Holidays </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># NEET </h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Schools </h3></span>
            <br>

            <?php
              $db = mysqli_connect("localhost", "root", "", "news-website");
              $query = "SELECT * FROM education ORDER BY id DESC LIMIT 3";
	            $result = mysqli_query($db, $query);
              $i = 0;
              if(mysqli_num_rows($result)>0){
                while ($data = mysqli_fetch_assoc($result)) {
                  $finalarray[$i] = $data['file_name'];
                  $i += 1;
                }
              }
            ?>

             <div id="carouselExampleIndicators4" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./education/<?php echo $finalarray[0]; ?>">
              </div>
  
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./education/<?php echo $finalarray[1]; ?>">
              </div>
    
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./education/<?php echo $finalarray[2]; ?>">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators4" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div><br><br><br><br>

    <div id="business" class="section">
              
          <img src="./images/Business.JPG" alt="Business Image" class="rounded ms-5 float-start" width="180px" height="180px">
            
          <span class="badge bg-dark ms-5 mt-4"><h2>&nbsp B &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp U &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp I &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp N &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp E &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp W &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp S &nbsp</h2></span>
            <br>
            <span class="badge bg-light text-danger ms-5 mt-4"><h3># Recession</h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Entrepreneurs</h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Marketing</h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Start Ups</h3></span>
            <span class="badge bg-light text-danger ms-4 mt-4"><h3># Monetization</h3></span>
            <br>

            <?php
              $db = mysqli_connect("localhost", "root", "", "news-website");
              $query = "SELECT * FROM business ORDER BY id DESC LIMIT 3";
	            $result = mysqli_query($db, $query);
              $i = 0;
              if(mysqli_num_rows($result)>0){
                while ($data = mysqli_fetch_assoc($result)) {
                  $finalarray[$i] = $data['file_name'];
                  $i += 1;
                }
              }
            ?>

             <div id="carouselExampleIndicators5" class="carousel slide" data-bs-ride="carousel">


            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./business/<?php echo $finalarray[0]; ?>">
              </div>
  
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./business/<?php echo $finalarray[1]; ?>">
              </div>
    
              <div class="carousel-item">
                <img class="d-block mx-auto mt-5" width="300px" height="300px" src="./business/<?php echo $finalarray[2]; ?>">
              </div>
            </div>

            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators5" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
      </div><br><br><br><br>

      <hr>

      <img src="./images/Testimonials.JPG" alt="Testimonials image" class="img-thumbnail mt-4 mx-auto d-block"><br>

      <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="./images/Logo.JPG" class="rounded" alt="logo" width="100" height="50"></a>
          <h6>FAQ</h6><br>
          <h6>Privacy Policy</h6>
          <h6>Terms & Condition</h6><br>
          <h6>feedback@newsbug.com</h6>

          <a href="https://instagram.com/hreys_techhub?igshid=OGQ2MjdiOTE="><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-instagram"></i></button></a>
          <a href="https://www.facebook.com/HreysTechHub?mibextid=ZbWKwL"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-facebook"></i></button></a>
          <a href="https://youtube.com/"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-youtube"></i></button></a>
          <a href="https://www.linkedin.com"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-linkedin"></i></button></a>
          <a href="https://www.github.com"><button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-github"></i></button></a>

        </div>

         
      </nav>

    </div>
</body>
</html>