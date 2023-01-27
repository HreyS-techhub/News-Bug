<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

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

          <button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-google"></i></button>
          <button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-facebook"></i></button>
          <button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-twitter"></i></button>
          <button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-linkedin"></i></button>
          <button type="button" class="btn btn-dark btn-floating mx-1"><i class="fa fa-github"></i></button>

      </nav>

    

      <?php
        $db = mysqli_connect("localhost", "root", "", "news-website");
        $query = "SELECT * FROM sports";
	      $result = mysqli_query($db, $query);
        $i = 0;
        if(mysqli_num_rows($result)>0){
        while ($data = mysqli_fetch_assoc($result)) {
              $finalarray[$i] = $data['file_name'];
              $i += 1;
      }
  }
  ?>

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">

        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
  
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block mx-auto mt-5" src="./sports/<?php echo $finalarray[0]; ?>">
            </div>
            
            <div class="carousel-item">
                <img class="d-block mx-auto mt-5" src="./sports/<?php echo $finalarray[1]; ?>">
            </div>
            <div class="carousel-item">
                <img class="d-block mx-auto mt-5" src="./sports/<?php echo $finalarray[2]; ?>">
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
    </div>
      
</body>
</html>