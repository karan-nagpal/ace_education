<?php
require("dbconnect.php");?>
<?php
$newCourse = $_POST['newCourse'];
echo $newCourse;
$cmd = "insert into courses (Course) Values('".$newCourse."')";
$status = mysqli_query($conn, $cmd);

if($status){
    header('location:addcourse.php?ok=1');
}else{
    header('location:addcourse.php?ok=0');
}

?>