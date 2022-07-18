
<?php
session_start();
 require('dbconnect.php');
   ?>

<?php
$user = $_POST['username'];
$pass = $_POST['password']; 
$cmd = "Select * from admin where name='".$user."' and password='".$pass."'";

$data = mysqli_query($conn, $cmd);
$numrow = mysqli_num_rows($data);
echo $numrow;
if($numrow > 0){

    $row = mysqli_fetch_array($data);
    $_SESSION['adminid'] = $row['aid'];
    $_SESSION['adminname'] = $row['name'];
    header('location:admin-panel.php');
    
}else{
    header('location:index.php?error=1');
}

?>