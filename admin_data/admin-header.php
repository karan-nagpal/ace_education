<?php session_start();?>
  <?php  if(isset($_SESSION['adminid'])){
      $admin = $_SESSION['adminname'];
    }else{
     header('location:admin-login.php');
  }



?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ace Education -Admin Panel</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    

    <div class="col-md-12 text-center bg-info">
    <div class="col-md-9">        
        <h1>Welcome to Admin Panel..</h1>
    </div>
    <div class="col-md-3">
        <p> Welcome <?php echo $admin; ?></p>
        <p>Last Login : </p>
        <a href="http://localhost/ace_Education/index.php"> Customer Website</a>
    </div>
</div>
