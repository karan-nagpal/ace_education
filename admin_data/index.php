

<!-- Admin Header -->
<?php  require('admin-header.php')?>
<!-- Buttons for changing content -->
<?php require('admin_menu.php');?>
<!-- Customer messages content -->
<div class="col-md-9 text-right" id = "messageDiv">

<div class="col-md-3 bodycon bg-theme fmar">

<form action="admin-login.php" method="post">
    <input type="text" name="username" placeholder =" Enter Admin Username">
    <input type="password" name="password" placeholder =" Enter Password">
    <input type="submit" class="btn btn-primary">
</form>
<p class= "text-danger text-center">
    <?php if(isset($_GET['error'])){
        if($_GET['error'] == 1){
            echo "Invalid Username or Password";
        }
    }
    ?>
    </p>
    
</div>
</div>
<?php require('admin-footer.php') ?>
