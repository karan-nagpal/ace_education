<?php
$name = $_POST["name"];
$gaurdian_name = $_POST["gardiansname"];
$mobile = $_POST["mobile"];
$course = $_POST["courselist"];
$email = $_POST["email"];
$sex = $_POST["gender"];
$date = date('d-m-Y');
$pic = basename($_FILES['pic']['name']);
$picname = date('dmYhis').$pic;

require('dbconnect.php');

$cmd = "INSERT INTO Customers(name, gaurdian_name, mobile, course, sex, email, date, fee_status, pic) VALUES('".$name."','".$gaurdian_name."','".$mobile."','".$course."','".$sex."','".$email."','".$date."','Pending','".$picname."')";

$status = mysqli_query($conn, $cmd);

if(mysqli_query($conn, $cmd)){

    move_uploaded_file($_FILES['pic']['tmp_name'], "studentimages/".$picname);

    header('location:index.php?id=1');

}else{

    // header('location:index.php?id=0');
    echo mysqli_error($conn);
    
}

?>

