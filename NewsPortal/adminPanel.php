<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="styleadmin.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">HOME</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </nav>
    
  <?php
    $db = mysqli_connect("localhost", "root", "", "news-website");
  ?>

    <div class="upload">

    <h1 class="text-center"> Hello Admin</h1><br>

    <form class="d-flex" method="POST" action="" enctype="multipart/form-data">
        <label>Upload Entertainment News</label>
		<input class="form-control" type="file" name="uploadfileentertainment[]" value="" multiple/>
        <button class="btn btn-success" type="submit" name="uploadentertainment">UPLOAD</button>
	</form><br>

    <form class="d-flex" method="POST" action="" enctype="multipart/form-data">
        <label>Upload Sports News</label>
		<input class="form-control" type="file" name="uploadfilesports[]" value="" multiple/>
        <button class="btn btn-success" type="submit" name="uploadsports">UPLOAD</button>
	</form><br>

    <form class="d-flex" method="POST" action="" enctype="multipart/form-data">
        <label>Upload Political News</label>
		<input class="form-control" type="file" name="uploadfilepolitics[]" value="" multiple/>
        <button class="btn btn-success" type="submit" name="uploadpolitics">UPLOAD</button>
	</form><br>

    <form class="d-flex" method="POST" action="" enctype="multipart/form-data">
        <label>Upload Educational News</label>
		<input class="form-control" type="file" name="uploadfileeducation[]" value="" multiple/>
        <button class="btn btn-success" type="submit" name="uploadeducation">UPLOAD</button>
	</form><br>

    <form class="d-flex" method="POST" action="" enctype="multipart/form-data">
        <label>Upload Business News</label>
		<input class="form-control"type="file" name="uploadfilebusiness[]" value="" multiple/>
        <button class="btn btn-success" type="submit" name="uploadbusiness">UPLOAD</button>
	</form><br>

    </div>

<?php
error_reporting(0);

if (isset($_POST['uploadentertainment'])) {

    $imagecount = count($_FILES['uploadfileentertainment']['name']);
    for ($i = 0; $i < $imagecount; $i++){
      $filename = $_FILES["uploadfileentertainment"]["name"][$i];
      $tempname = $_FILES["uploadfileentertainment"]["tmp_name"][$i];
      $folder = "./entertainment/" . $filename;
      
        if (move_uploaded_file($tempname, $folder)) {
          $sql = "INSERT INTO entertainment (file_name) VALUES ('$filename')";
        $result = mysqli_query($db, $sql);
        } 
    }	
  }


if (isset($_POST['uploadsports'])) {

  $imagecount = count($_FILES['uploadfilesports']['name']);
  for ($i = 0; $i < $imagecount; $i++){
    $filename = $_FILES["uploadfilesports"]["name"][$i];
    $tempname = $_FILES["uploadfilesports"]["tmp_name"][$i];
    $folder = "./sports/" . $filename;
    
	  if (move_uploaded_file($tempname, $folder)) {
	    $sql = "INSERT INTO sports (file_name) VALUES ('$filename')";
      $result = mysqli_query($db, $sql);
	  } 
  }
	
}

if (isset($_POST['uploadpolitics'])) {

    $imagecount = count($_FILES['uploadfilepolitics']['name']);
    for ($i = 0; $i < $imagecount; $i++){
      $filename = $_FILES["uploadfilepolitics"]["name"][$i];
      $tempname = $_FILES["uploadfilepolitics"]["tmp_name"][$i];
      $folder = "./politics/" . $filename;
      
        if (move_uploaded_file($tempname, $folder)) {
          $sql = "INSERT INTO politics (file_name) VALUES ('$filename')";
        $result = mysqli_query($db, $sql);
        } 
    }
      
  }

  if (isset($_POST['uploadeducation'])) {

    $imagecount = count($_FILES['uploadfileeducation']['name']);
    for ($i = 0; $i < $imagecount; $i++){
      $filename = $_FILES["uploadfileeducation"]["name"][$i];
      $tempname = $_FILES["uploadfileeducation"]["tmp_name"][$i];
      $folder = "./education/" . $filename;
      
        if (move_uploaded_file($tempname, $folder)) {
          $sql = "INSERT INTO education (file_name) VALUES ('$filename')";
        $result = mysqli_query($db, $sql);
        } 
    }
      
  }

if (isset($_POST['uploadbusiness'])) {

  $imagecount = count($_FILES['uploadfilebusiness']['name']);
  for ($i = 0; $i < $imagecount; $i++){
    $filename = $_FILES["uploadfilebusiness"]["name"][$i];
    $tempname = $_FILES["uploadfilebusiness"]["tmp_name"][$i];
    $folder = "./business/" . $filename;
    
	  if (move_uploaded_file($tempname, $folder)) {
	    $sql = "INSERT INTO business (file_name) VALUES ('$filename')";
      $result = mysqli_query($db, $sql);
	  } 
  }
	
}
?>

</body>
</html>