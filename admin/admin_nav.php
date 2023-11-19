<?php session_start();
if(isset($_GET['user_name']) && $_GET['user_name'] != ""){
    $url_index   = "index.php?user_name={$_SESSION['user_name']}&id={$_COOKIE['session_id']}";
}else{
    $url_index   = "index.php";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../asset/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../action/bootstrap.min.js"></script>
    <script src="../action/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style.css" >
    <link href="../style/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <script src="ckeditor/ckeditor.js"></script>
    <title>Admin</title>
    
</head>