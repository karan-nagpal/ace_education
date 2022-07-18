<?php
$host = "localhost";
$user = "root";
$pass = '';
$database = 'Ace_Education';



$conn = mysqli_connect($host, $user, $pass, $database);
if(!$conn){
    die("ERROR: Database not connected");
}

?>