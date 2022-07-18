<?php

$name = $_POST['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$message = $_POST['custmessage'];
$date = date('d-m-Y');
$time = date('h:i:s');

require('dbconnect.php');
$cmd = "INSERT INTO Customer_message( name, mobile, email, message, date, time) VALUES ('".$name."',' ".$mobile."','".$email."','".$message."','".$date ."','".$time."')";

$status = mysqli_query($conn, $cmd);

if($status){
    header('location:contact_Us.php?submit=1');
}else{
    header('location:contact_Us.php?submit=0');
}


?>



