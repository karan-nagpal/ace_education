<?php
$id = $_GET['id'];
echo $id;
require('dbconnect.php');
$cmd = "delete from Customers where Uid='".$id."'";

mysqli_query($conn, $cmd);
header('location:rollsshow.php');

?>