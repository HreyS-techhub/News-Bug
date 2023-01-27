<!DOCTYPE html>
<html lang="en">
<head>
    <title>News Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <?php
    $emailCheck = $_POST["username"];
    $passwordCheck = $_POST["password"];

    if($emailCheck == "admin123@gmail.com" && $passwordCheck == "123456"){
        header("location:adminPanel.php");
        exit();
    }
    else{
        header("location:index.php");
    }
    ?>
</body>
</html>